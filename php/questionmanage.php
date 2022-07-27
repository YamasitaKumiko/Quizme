<?php
include("../include/util.inc.php");
include("../include/opening.inc.php");
session_start();
$PDO = getPDO();
$name = $_SESSION['name'];
$id = $_SESSION['user_id'];
$user = GetUserInfo($name)->fetch();
$public = intval($_GET['creator']);
if($public == 0){
    $pub = "public";
    $creator = 0;
}
else{
    $pub = "private";
    $creator = $id;
}

?>
<link rel="stylesheet" type="text/css" href="../css/common.css">
<link rel="stylesheet" type="text/css" href="../css/record.css">
<script src="../js/quiz.js"></script>
<?php

if (!isset($_SESSION['name'])){
    $banner = "<a href = 'signin_form.php' style='font-weight: bolder;text-decoration: none' >Sign in</a>";
}
else{
    $name = $_SESSION['name'];
    $banner = "<a href = 'signout.php' title='click to sign out' style='font-weight: bolder;text-decoration: none'>Welcome $name</a>";
}
?>
<span><?= $banner?></span><br><br>
<span><a href="../index.php" style="text-decoration: none" title="back to home page">Home</a></span>
<div id="record">
    <div id="top">
        Hi <?= $name?> !
        Here is the <?= $pub?> question list：
    </div>

    <div id="selector">
        <div id="box">
            <form method="post" action="search.php" style="display: inline-block">
                <input type="search" name="search" size = "20" placeholder="input keyword" value = "<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" autofocus/>
                <input type= "submit" value="Search"/>
            </form>
            <button onclick='add()' style="display: inline-block">Add</button>
        </div>

    </div>

    <div id="bottom">

        <table id="table" width="1200">
            <caption style="font-family: 'Times New Roman';font-size: 24pt;font-weight: bolder;color: brown">Questions</caption>
            <tr><th>Number</th><th>Category</th><th>Level</th><th>Question</th><th>Answer</th></tr>
            <?php
            $category = "random";
            $level = 0;
            $records = showQuestionAll($category,$level,$creator);
            $count =  $records->rowCount();
            $index = 1;
            for ($index ; $index <= $count ; $index++){
                $record = $records->fetch();
                $id = $record['id'];
                echo "<tr><td>$index</td><td>{$record['category']}</td><td>{$record['level']}</td><td>{$record['question']}</td><td>{$record['answer']}</td><td><button onclick='del($id,$creator)'>Delete</button></td><td><button onclick='upd()'>Update</button></td></tr>";
            }
            ?>
        </table>
    </div>
</div>
<?php
include("../include/closing.html");
?>




