<?php
session_start();
include("../include/util.inc.php");
$id = intval($_GET['id']);
$creator = $_GET['creator'];
// 查到id对应的问题的信息
$result = getQuestionById($id);
$result = $result->fetch();
$category = $result['category'];
$level = $result['level'];
$question = $result['question'];
$answer = $result['answer'];
//echo $category;
?>
<link rel="stylesheet" type="text/css" href="../css/common.css">
<link rel="stylesheet" type="text/css" href="../css/update.css">

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

<div id="update">
    <h1>Update Question</h1>
    <div style="margin-top: 30px;margin-bottom: 10px;font-size: 16pt;font-family: 'Times New Roman'">
    Category
    <select name="category" form="form" value="<?php echo $category; ?>" placeholder="<?php echo $category; ?>">
        <option value="geography"<?php if($category == 'geography'){ echo ' selected="selected"'; } ?>>geography</option>
        <option value="sport"<?php if($category == 'sport'){ echo ' selected="selected"'; } ?>>sport</option>
        <option value="science"<?php if($category == 'science'){ echo ' selected="selected"'; } ?>>science</option>
        <option value="general"<?php if($category == 'general'){ echo ' selected="selected"'; } ?>>general</option>
    </select>
    <br>
    </div>
    <div style="margin-bottom: 10px;font-size: 16pt;font-family: 'Times New Roman'">
    Difficulty
    <select name="level" form="form" value="<?php echo $level; ?>">
        <option value=1<?php if($level == '1'){ echo ' selected="selected"'; } ?>>easy</option>
        <option value=2<?php if($level == '2'){ echo ' selected="selected"'; } ?>>medium</option>
        <option value=3<?php if($level == '3'){ echo ' selected="selected"'; } ?>>hard</option>
    </select>
    <br>
    </div>
    <div style="margin-bottom: 10px;font-size: 16pt;font-family: 'Times New Roman'">
        PublicOrNot
        <select name="creator" form="form" value="<?php echo $creator; ?>">
            <option value=0>Public</option>
            <option value=<?php echo $id;?>>Private</option>
        </select>
        <br>
    </div>
    <form action="doupdate.php" method="post" id="form">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div>Question</div>
        <br>
        <textarea cols=80 rows=5 name="question">
            <?php echo $question; ?>
        </textarea>
        <br>
        <div>Answer</div>
        <br>
        <input type="text" name="answer" value="<?php echo $answer; ?>">
        <br><br>
        <!-- <button onclick='updateQueById($id,$category,$level,$question,$answer,$creator)'>Update</button> -->
        <input type="submit" value="Update">
        <input type="reset" value="Reset">
        <br>
    </form>
</div>
<?php
include("../include/closing.html");
?>


