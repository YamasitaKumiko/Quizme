<?php
session_start();

array_shift($_SESSION['all_questions']);
$ans = $_POST['answer'];//用户回答的答案
$answer = $_SESSION['ans'];//正确答案
$grade = $_SESSION['grade'];

function normalizeString($str){
    $str = trim($str);
    $str = preg_replace('/\s+/'," ",$str);
    return strtolower($str);
}
$ans = normalizeString($ans);
if ( $ans == strtolower($answer)){
    $grade ++;
}else{
    array_push($_SESSION['question_id'], $_SESSION['qid']);
    array_push($_SESSION['question'], $_SESSION['que']);
    array_push($_SESSION['wrong_answer'], $ans);
    array_push($_SESSION['answer'], $answer);
}
$_SESSION['grade'] = $grade;
$_SESSION["index"]++;
header("Location: quiz.php");
?>
