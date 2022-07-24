<?php
session_start();

$ans = $_POST['answer'];
array_push($_SESSION['wrong_answer'], $ans);
$answer = end($_SESSION['answer']);
$grade = $_SESSION['grade'];

function normalizeString($str){
    $str = trim($str);
    $str = preg_replace('/\s+/'," ",$str);
    return strtolower($str);
}
$ans = normalizeString($ans);
if ( $ans == strtolower($answer)){
    $grade ++;
    array_pop($_SESSION['question_id']);
    array_pop($_SESSION['question']);
    array_pop($_SESSION['wrong_answer']);
    array_pop($_SESSION['answer']);
}
$_SESSION['grade'] = $grade;
$_SESSION["index"]++;
header("Location: quiz.php");
?>
