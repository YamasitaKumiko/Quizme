<?php
include("include/opening.inc.php");
session_start();
$_SESSION['all_questions'] = array();
$_SESSION['question_id'] = array(); //只记录错的题目
$_SESSION['question'] = array(); //只记录错的题目
$_SESSION['wrong_answer'] = array();
$_SESSION['answer'] = array(); //问题的答案
$_SESSION['start'] = 9999999999;
$_SESSION['end'] = 9999999999;
$_SESSION['grade'] = 0;
$_SESSION['index'] = 0;//当前取第几个题目
$_SESSION['size'] = 0;
$_SESSION['date'] = date('Y-m-d');
$_SESSION['level'] = "";
$_SESSION['category'] = "";
if (isset($_SESSION['name']))   {
    $des1 = "<div><a href='php/addquestion.php' style='text-decoration: none;font-size: 18pt'>Add Question</a></div><br>";
    $des2 = "<div><a href='php/record.php' style='text-decoration: none;font-size: 18pt'>Show record</a></div>";
}
else {
    $des1 = "<div title='please sign in first' style='font-size: 18pt'>Add Question</div><br>";
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
    <?= $des1?>
    <?= $des2?>
</div>
<input type="button" id="regulation" value="Regulation" onclick="popBox()">
<div id="popLayer">
    <div id="popBox">
        <div id="word">1:Users don't log in can answer questions, but can not add questions or view quiz records.<br><br>2:All the questions are divided into four categories according to the content: history, nature, culture and health, also divided into three levels according to the difficulty: simple(1 point), middle(2 points) and difficult(3 points).</div>
        <br>
        <input type="button"  value="close" onclick="hide()">
    </div>
</div>
<?php
include("include/closing.html");
?>

