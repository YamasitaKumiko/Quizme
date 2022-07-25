<?php

$PDO = getPDO();

// returns a PDO object
function getPDO() {
    $host = 'localhost';    # TO COMPLETE
    $db   = 'project';
    $user = 'root';    # TO COMPLETE
    $pass = '12345678';    # TO COMPLETE
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
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

function AddQuestion($name){
    $index = "username";
    $PDO = getPDO();
    $name = $PDO->quote($name);
    $result = $PDO->query("SELECT * FROM project.user WHERE $index = $name;");
    $user = $result->fetch();
    $count = $user["question_donated"];
    $count++;
    $stmt = $PDO->prepare("UPDATE project.user SET question_donated = $count WHERE $index = $name;");
    $stmt->execute();
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

//从mysql中读取公共问题
//level=0表示随机难度
function getQuestionPublic($category,$level,$size){
    $PDO = getPDO();
    $index1 = "category";
    $index2 = "level";
    $index3 = "creator";
    $category1 = $PDO->quote($category);

    if($category == "random" && $level == 0){
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = 0 ORDER BY RAND() limit $size");
    }else if($category != "random" && $level == 0){
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = 0 and $index1 = $category1 ORDER BY RAND() limit $size");
    }else if($category == "random" && $level != 0){
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = 0 and $index2 = $level ORDER BY RAND() limit $size");
    }else{
        $result = $PDO->query("SELECT * FROM project.questions where $index3 = 0 and $index1 = $category1 and $index2 = $level ORDER BY RAND() limit $size");
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