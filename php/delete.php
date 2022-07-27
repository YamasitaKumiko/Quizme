<?php
session_start();
include("../include/util.inc.php");

//要删除的问题id
$id = intval($_GET['id']);
$creator = $_GET['creator'];
deleteQueById($id);
header("Location: questionmanage.php?creator=$creator");
?>

