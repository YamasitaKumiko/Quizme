<?php
session_start();
ini_set("display_errors", 0);
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_WARNING);
include("../include/opening.inc.php");
include("../include/util.inc.php");
$_SESSION['qid'] = null;
$_SESSION['que'] = "";
$_SESSION['wans'] = "";
if (time() < $_SESSION['start'])
    $_SESSION['start'] = time();

//function countLines($filepath)
//{
//    $handle = fopen($filepath, "r+");
//    $count = 0;
//    while (fgets($handle)) {
//        $count++;
//    }
//    fclose($handle);
//    return $count;
//}
//根据种类、难度、题量获取题目集
function getQuestion()
{
    $questions = getQuestions($_POST["option1"], intval($_POST["option2"]), intval($_POST["option3"]), intval($_POST["option4"]));
    $rs = $questions->fetchAll(PDO::FETCH_BOTH);
    return $rs;
}
//难度值转换
function getLevel($value)
{
    switch ($value) {
        case 1:
            return "easy";
        case 2:
            return "medium";
        case 3:
            return "hard";
    }
}

//do {
//    $questionused = $_SESSION['question'];
//    $number_1 = mt_rand(0, 3);
//    $cate = $category[$number_1];
//    $question_dir = "../question/" . $cate . ".txt";
//    $count = countLines($question_dir);
//    $number_2 = mt_rand(1, $count);
//    $number = $number_1 * 1000 + $number_2;
//    $_SESSION['question'] = $questionused;
//    $rs = getquestion();
//    $current_question = $rs[i];
//    $content = explode(";", $rs);
//    $description = $content[0];
//    $A = $content[1];
//    $B = $content[2];
//    $C = $content[3];
//    $difficulty = $difficulties[$content[5]];
//    $answer = $content[4];
//    $_SESSION['answer'] = $answer;
//    $_SESSION['difficulty'] = $content[5];
//
//} while (in_array($number, $questionused));
//array_push($questionused, $number);
//
//$_SESSION['question'] = $questionused;
if ($_SESSION['index'] == 0) {
    $rs = getQuestion();
    $size = count($rs);
    $_SESSION['all_questions'] = $rs;
    $_SESSION['size'] = $size;
    $_SESSION['category'] = $_POST["option1"];
    $_SESSION['level'] = intval($_POST["option2"]);
    if($_POST["option0"] == 1)
        $_SESSION['times'] = intval($_POST["times"]);
}
$times = $_SESSION['times'] * 1000;


$current_question = current($_SESSION['all_questions']);
if($current_question){
    $content = $current_question['question'];
    $answer = $current_question['answer'];
    $difficulty = getLevel($current_question['level']);
    $_SESSION['qid'] = $current_question['id'];
    $_SESSION['que'] = $content;
    $_SESSION['ans'] = $answer;
}

?>

    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/quiz.css">
    <script src="../js/quiz.js"></script>
    <script src="../js/index.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
<?php
if (!isset($_SESSION['name'])) {
    $banner = "<a href = 'signin_form.php' style='font-weight: bolder;text-decoration: none' >Sign in</a>";
} else {
    $name = $_SESSION['name'];
    $banner = "<a href = 'signout.php' title='click to sign out' style='font-weight: bolder;text-decoration: none'>Welcome $name</a>";
}
?>
    <span><?= $banner ?></span><br><br>
    <span><a href="../index.php" style="text-decoration: none" title="back to home page">Home</a></span>
    <span><a href="../index.php" style="text-decoration: none" title="back to home page">Home</a></span>

        <div id="quiz">
            <div><?php
                if($content){
                    echo $content;
                }else{
                    echo"all Questions have been finished,click Finish to show your grade";
                }
                ?>
            </div>
            <div><?php
                if($difficulty){
                    echo $difficulty;
                }
                ?></div>
            <form name="quiz_form" method="post" action="calculate.php">
                <input type="text" name="answer" id="answer"><br>
                <input type="submit" value="Next" id="Next"><br>
            </form>
            <script>
                var time = Number(<?php echo $times; ?>)
                setTimeout("quiz_form.submit()",time)</script>
        </div>

<?php

if ($_SESSION["index"] == $_SESSION["size"] ) {
    echo "<script type='text/javascript'>document.getElementById('Next').style.display='none'</script>";
    echo "<script type='text/javascript'>document.getElementById('answer').style.display='none'</script>";
    echo '<input type="button" id="quit_button" value="Finish" onclick="popBox()">';
    echo '<div id="popLayer">';
    echo '<div id="popBox">';
    echo '<div id="word">want to see your grade?</div>';
    echo '<input type="button" value="no" onclick="home()">';
    echo '<input type="button" value="yes" onclick="show()">';
    echo '</div>';
    echo '</div>';
}
?>

<?php
include("../include/closing.html");
?>