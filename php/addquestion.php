<?php
session_start();
include("../include/opening.inc.php");
?>
<link rel="stylesheet" type="text/css" href="../css/common.css">
<link rel="stylesheet" type="text/css" href="../css/add.css">

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

<div id="add">
    <h1>Add Question</h1>
    <div style="margin-top: 30px;margin-bottom: 10px;font-size: 16pt;font-family: 'Times New Roman'">
    Category
    <select name="category" form="form">
        <option value="geography">geography</option>
        <option value="sport">sport</option>
        <option value="science">science</option>
        <option value="general">general</option>
    </select>
    <br>
    </div>
    <div style="margin-bottom: 10px;font-size: 16pt;font-family: 'Times New Roman'">
    Difficulty
    <select name="level" form="form">
        <option value=1>easy</option>
        <option value=2>medium</option>
        <option value=3>hard</option>
    </select>
    <br>
    </div>
    <div style="margin-bottom: 10px;font-size: 16pt;font-family: 'Times New Roman'">
        PublicOrNot
        <select name="creator" form="form">
            <option value=0>Public</option>
            <option value=<?php echo $_SESSION["user_id"];?>>Private</option>
        </select>
        <br>
    </div>
    <form action="doadd.php" method="post" id="form">
        <div>Question</div>
        <br>
        <textarea cols=80 rows=5 name="question"></textarea>
        <br>
        <div>Answer</div>
        <br>
        <input type="text" name="answer">
        <br><br>

        <input type="submit" value="AddQuestion">
        <input type="reset" value="Reset">
        <br>
    </form>
</div>
<?php
include("../include/closing.html");
?>


