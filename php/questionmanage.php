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
$condition1 = "1 = 1";
$condition2 = "1 = 1";
$category = "random";
$level = 0;
// echo $_POST['category'];
if(isset($_GET["category"])){
    // $q = isset($_GET['category'])? htmlspecialchars($_GET['category']) : '';
    $category = htmlspecialchars($_GET['category']);
    // $condition1 = " category like '%{$category}%'";
    $condition1 = " category = '$category'";
    echo $condition1;
 }
if(isset($_GET['level'])){
    $level = htmlspecialchars($_GET['level']);
    $condition2 = " level = '$level'";
    echo $condition2;
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
            <form method="get" action="questionmanage.php?creator=0" style="display: inline-block">
                <input type="hidden" name="creator" value="0">
                <div>
                Category
                <select name="category">
                    <option value="geography"<?php if($category == 'geography'){ echo ' selected="selected"'; } ?>>geography</option>
                    <option value="sport"<?php if($category == 'sport'){ echo ' selected="selected"'; } ?>>sport</option>
                    <option value="science"<?php if($category == 'science'){ echo ' selected="selected"'; } ?>>science</option>
                    <option value="general"<?php if($category == 'general'){ echo ' selected="selected"'; } ?>>general</option>
                </select>
                Difficulty
                <select name="level">
                    <option value=1<?php if($level == '1'){ echo ' selected="selected"'; } ?>>easy</option>
                    <option value=2<?php if($level == '2'){ echo ' selected="selected"'; } ?>>medium</option>
                    <option value=3<?php if($level == '3'){ echo ' selected="selected"'; } ?>>hard</option>
                </select>
                    <input type= "submit" value="Search"/>
                </div>                
            </form>
            <button onclick='add()' style="display: inline-block">Add</button>
        </div>

    </div>

    <div id="bottom">

        <table id="table" width="1200">
            <caption style="font-family: 'Times New Roman';font-size: 24pt;font-weight: bolder;color: brown">Questions</caption>
            <tr><th>Number</th><th>Category</th><th>Level</th><th>Question</th><th>Answer</th></tr>
            <?php
            $records = showQuestion($condition1,$condition2,$creator);
            $count =  $records->rowCount();
            $index = 1;
            for ($index ; $index <= $count ; $index++){
                $record = $records->fetch();
                $id = $record['id']; 
                $creator = $record['creator']; 
                echo "<tr>
                <td>$index</td>
                    <td>{$record['category']}</td>
                    <td>{$record['level']}</td>
                    <td>{$record['question']}</td>
                    <td>{$record['answer']}</td>
                    <td><button onclick='del($id,$creator)'>Delete</button></td>
                    <td>
                        <button onclick='update($id,$creator)'>Update</button>
                    </td>
                </tr>";
            }
            ?>
        </table>
    </div>
</div>
<?php
include("../include/closing.html");
?>




