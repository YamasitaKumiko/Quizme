<?php
include("include/opening.inc.php");
session_start();
$_SESSION['all_questions'] = array();
$_SESSION['question_id'] = array(); //只记录错的题目
$_SESSION['question'] = array(); //只记录错的题目
$_SESSION['wrong_answer'] = array();
$_SESSION['answer'] = array(); //问题的答案
$_SESSION['grade'] = 0;
$_SESSION['index'] = 0;//当前取第几个题目
$_SESSION['size'] = 0;
$_SESSION['date'] = date('Y-m-d');
$_SESSION['level'] = "";
$_SESSION['category'] = "";
$_SESSION['times'] = 9999999999;//默认不限时
//creator=0表示显示公共问题
if (isset($_SESSION['name']))   {
    $des0 = "<div><a href='php/questionmanage.php?creator=0' style='text-decoration: none;font-size: 18pt'>Public Questions</a></div><br>";
    $des1 = "<div><a href='php/questionmanage.php?creator=1' style='text-decoration: none;font-size: 18pt'>Private Questions</a></div><br>";
    $des2 = "<div><a href='php/record.php' style='text-decoration: none;font-size: 18pt'>Show record</a></div>";
}
else {
    $des0 = "<div title='please sign in first' style='font-size: 18pt'>Public Questions</div><br>";
    $des1 = "<div title='please sign in first' style='font-size: 18pt'>Private Questions</div><br>";
    $des2 = "<div title='please sign in first' style='font-size: 18pt'>Show record</div>";
}
?>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<script src="js/index.js"></script>
<div id="index">
    <h1>Welcome to QuizMe System</h1>
    <h3>Try to test your knowledge!!</h3>
    <div><a href="php/choose.php" style="text-decoration: none">Quiz Now</a></div>
    <br>
    <div><a href="php/signin_form.php" style="text-decoration: none">Sign in</a></div>
    <br>
    <div><a href="php/signup_form.php" style="text-decoration: none">Sign up</a></div>
    <br>
    <?= $des0?>
    <?= $des1?>
    <?= $des2?>
</div>
<input type="button" id="regulation" value="Hints" onclick="popBox()">
<div id="popLayer">
    <div id="popBox">
        <div id="word">1:Users don't log in can answer questions, but can not add questions or view quiz records.<br></div>
        <br>
        <input type="button"  value="close" onclick="hide()">
    </div>
</div>
<?php
include("include/closing.html");
?>

