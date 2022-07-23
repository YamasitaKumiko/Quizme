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
        <option value="history">history</option>
        <option value="nature">nature</option>
        <option value="culture">culture</option>
        <option value="healthy">healthy</option>
    </select>
    <br>
    </div>
    <div style="margin-bottom: 10px;font-size: 16pt;font-family: 'Times New Roman'">
    Difficulty
    <select name="difficulty" form="form">
        <option value="simple">simple</option>
        <option value="middle">middle</option>
        <option value="difficult">difficult</option>
    </select>
    <br>
    </div>
    <form action="doadd.php" method="post" id="form">
        <div>Question</div>
        <br>
        <input type="text" name="question" size="60">
        <br>
        <div>OptionA</div>
        <br>
        <input type="text" name="A">
        <br>
        <div>OptionB</div>
        <br>
        <input type="text" name="B">
        <br>
        <div>OptionC</div>
        <br>
        <input type="text" name="C">
        <br>
        <div>Answer</div>
        <br>
        <input type="radio" name="option" value="A">A
        <input type="radio" name="option" value="B">B
        <input type="radio" name="option" value="C">C<br>
        <br>
        <input type="submit" value="AddQuestion">
        <input type="reset" value="Reset">
        <br>
    </form>
</div>
<?php
include("../include/closing.html");
?>


