<?php
session_start();
include("../include/opening.inc.php");
if ( time()<$_SESSION['start'] )
    $_SESSION['start'] = time();
$_SESSION['number_question'] = 0;
$correct = $_SESSION['num_correct'];
$wrong = $_SESSION['num_wrong'];

function countLines($filepath){
    $handle = fopen( $filepath, "r+" );
    $count = 0;
    while( fgets($handle) ) {
        $count++;
    }
    fclose($handle);
    return $count;
}

function getquestion($filename, $Line){
    $fp = new SplFileObject($filename,'r+');
    $fp -> seek($Line-1);
    return trim(($fp -> current()), "\n");
}

$category = ['health','nature','culture','history'];
$difficulties = [' ','simple','middle','difficult'];
do{
    $questionused = $_SESSION['question'];
    $number_1 = mt_rand(0,3);
    $cate = $category[$number_1];
    $question_dir = "../question/".$cate.".txt";
    $count = countLines($question_dir);
    $number_2 = mt_rand(1,$count);
    $number = $number_1*1000+$number_2;
    $_SESSION['question'] = $questionused;
    $question = getquestion($question_dir,$number_2);
    $content = explode(";",$question);
    $description = $content[0];
    $A = $content[1];
    $B = $content[2];
    $C = $content[3];
    $difficulty = $difficulties[$content[5]];
    $answer = $content[4];
    $_SESSION['answer'] = $answer;
    $_SESSION['difficulty'] = $content[5];

}while(in_array($number,$questionused));
array_push($questionused,$number);

$_SESSION['question'] = $questionused;
?>

    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/quiz.css">
    <script src="../js/quiz.js"></script>
    <script src="js/jquery-3.3.1.js"></script>
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
<div id="quiz">
    <div><?= $description?></div>
    <div>(<?= $difficulty?>)</div>
    <form name="quiz_form" method="post" action="calculate.php">
        <input type="radio" name="option" value="A"><?= $A ?><br>
        <input type="radio" name="option" value="B"><?= $B ?><br>
        <input type="radio" name="option" value="C"><?= $C ?><br>
        <input type="text" name="option" value="C"><?= $C ?><br>
        <input type="button" value="check" onclick="Check('<?= $answer?>')">
        <input type="submit" value="Next"><br>
    </form>
    <div id="check"><img src="../images/correct.png">Congratulation!</div>
</div>


<input type="button" id="quit_button" value="Finish" onclick="popBox()">
<div id="popLayer">
    <div id="popBox">
        <div id="word">want to see your garde?</div>
        <input type="button"  value="no" onclick="home()">
        <input type="button"  value="yes" onclick="show()">
    </div>
</div>

<?php
include("../include/closing.html");
?>
