<?php
session_start();
$name = $_SESSION['name'];
include("../include/util.inc.php");

$id = intval($_POST['id']);
$category = $_POST['category'];
$level = $_POST['level'];
$question = $_POST['question'];
$answer = $_POST['answer'];
$creator = intval($_POST['creator']);

updateQueById($id,$category,$level,$question,$answer,$creator);



header("Location: questionmanage.php?creator=0");
?>