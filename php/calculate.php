<?php
session_start();

$choice = $_POST['option'];
$answer = $_SESSION['answer'];
$wrong = $_SESSION['num_wrong'];
$correct = $_SESSION['num_correct'];
$grade = $_SESSION['grade'];
$difficulty = $_SESSION['difficulty'];
if ($choice == $answer){
    $correct++;
    $grade += $difficulty;
}
else{
    $wrong++;
}
$_SESSION['num_correct'] = $correct;
$_SESSION['num_wrong'] = $wrong;
$_SESSION['grade'] = $grade;
header("Location: quiz.php");
?>
