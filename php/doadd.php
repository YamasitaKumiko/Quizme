<?php
session_start();
$name = $_SESSION['name'];
include("../include/util.inc.php");

$category = $_POST['category'];
$level = $_POST['level'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$creator = intval($_POST['creator']);

AddQuestion($category,$level,$question,$answer,$creator);



header("Location: addquestion.php");
?>
