<?php

$PDO = getPDO();

function console($log='')
{
     switch (empty($log)) {
          case False:
              $out = json_encode($log);
              $GLOBALS['console'] .= 'console.log('.$out.');';
              break;
          
          default:
             echo '<script type="text/javascript">'.$GLOBALS['console'].'</script>';
     }
}

// returns a PDO object
function getPDO() {
    $host = 'localhost';    # TO COMPLETE
    $db   = 'project';
    $user = 'root';    # TO COMPLETE
    $pass = '1123';    # TO COMPLETE
    #$charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        echo extension_loaded("redis");
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        // console($e->getMessage())
        // console((int)$e->getCode())
        echo "$e";
        echo '_________________________________________________-';
        echo extension_loaded("mysqli");
        error_log(print_r($e, true));
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}



//csv文件导入数据库
function importmysql($filepath){
    $PDO = getPDO();
    $handle = new SplFileObject($filepath,'r+');
    while( $line=$handle->fgets() ) {
        $content = explode("#",$line);
        switch ($content[1]) {
            case "medium":
                $level = 2;
                break;
            case "easy":
                $level = 1;
                break;
            case "hard":
                $level = 3;
                break;
        }
        $stmt = $PDO->prepare("INSERT INTO project.questions(`category`,`level`,`question`,`answer`) VALUES (?,?,?,?);");
        $stmt->execute([$content[0],$level,$content[2],$content[3]]);
    }
}

function AddUser($username , $password){
    $PDO = getPDO();
    $stmt = $PDO->prepare("INSERT INTO project.user(`username`,`password`) VALUES (?,?);");
    $stmt->execute([$username,$password]);
}

function GetUserInfo($name){
    $index = "username";
    $PDO = getPDO();
    $name = $PDO->quote($name);
    $result = $PDO->query("SELECT * FROM project.user WHERE $index = $name;");
    return $result;
}

function AddQuestion($category,$level,$question,$answer,$creator){
    $PDO = getPDO();
    $stmt = $PDO->prepare("INSERT INTO project.questions(`category`,`level`,`question`,`answer`,`creator`) VALUES (?,?,?,?,?);");
    $stmt->execute([$category,$level,$question,$answer,$creator]);
}

function addrecord($name,$grade,$date,$category,$level,$size,$timed){
    $PDO = getPDO();
    $stmt = $PDO->prepare("INSERT INTO project.record(`username`,`grade`,`date`,`category`,`level`,`size`,`limited_time`) VALUES (?,?,?,?,?,?,?);");
    $stmt->execute([$name,$grade,$date,$category,$level,$size,$timed]);
    $id = $PDO->lastInsertId();
    return $id;
}

function showrecord($name){
    $index = "username";
    $PDO = getPDO();
    $name = $PDO->quote($name);
    $result = $PDO->query("SELECT * FROM project.record WHERE $index = $name;");
    return $result;
}

//从mysql中读取随机问题
//level=0表示随机难度
function getQuestions($category,$level,$size,$creator){
    $PDO = getPDO();
    $index1 = "category";
    $index2 = "level";
    $index3 = "creator";
    $category1 = $PDO->quote($category);

    if($category == "random" && $level == 0){
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = $creator ORDER BY RAND() limit $size");
    }else if($category != "random" && $level == 0){
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = $creator and $index1 = $category1 ORDER BY RAND() limit $size");
    }else if($category == "random" && $level != 0){
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = $creator and $index2 = $level ORDER BY RAND() limit $size");
    }else{
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = $creator and $index1 = $category1 and $index2 = $level ORDER BY RAND() limit $size");
    }
    return $result;
}

function addWrongQuestion($item_id,$user_id,$question_id,$wrong_answer){
    $PDO = getPDO();
    $stmt = $PDO->prepare("INSERT INTO project.wrong_questions(`item_id`,`user_id`,`question_id`,`wrong_answer`) VALUES (?,?,?,?);");
    $stmt->execute([$item_id,$user_id,$question_id,$wrong_answer]);
}

//通过item_id获取错题
function showWrongListByItem($item_id){
    $PDO = getPDO();
    $result = $PDO->query("SELECT project.questions.question,project.wrong_questions.wrong_answer FROM project.questions inner join project.wrong_questions 
    on project.wrong_questions.question_id = project.questions.id AND project.wrong_questions.item_id = $item_id");
    return $result;
}

//条件查询公共或私有问题(类别、难度)
function showQuestionAll($category,$level,$creator){
    $PDO = getPDO();
    $index1 = "category";
    $index2 = "level";
    $index3 = "creator";
    $category1 = $PDO->quote($category);

    if($category == "random" && $level == 0){
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = $creator");
    }else if($category != "random" && $level == 0){
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = $creator and $index1 = $category1");
    }else if($category == "random" && $level != 0){
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = $creator and $index2 = $level");
    }else{
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = $creator and $index1 = $category1 and $index2 = $level");
    }
    return $result;
}

//根据id删除问题
function deleteQueById($id){
    $PDO = getPDO();
    $index = "id";
    $stmt = $PDO->prepare("DELETE FROM project.questions WHERE $index = $id");
    $stmt->execute();

}

//根据id返回question信息
function getQuestionById($id){
    $PDO = getPDO();
    $index = "id";
    $result = $PDO->query("SELECT * FROM project.questions WHERE $index = $id");
    return $result;
}

//根据id修改问题
function updateQueById($id,$category,$level,$question,$answer,$creator) {
    $PDO = getPDO();
    $index = "id";
    $stmt = $PDO->prepare("UPDATE project.questions SET category='$category',level='$level',question='$question',answer='$answer',creator='$creator'  WHERE $index = $id");
    $stmt->execute();
}
?>
}