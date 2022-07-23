<?php
session_start();
$name = $_SESSION['name'];
include("../include/util.inc.php");
AddQuestion($name);
$category = $_POST['category'];
$question = $_POST['question'];
$answer = $_POST['option'];
$difficulty = $_POST['difficulty'];
if ($difficulty == 'simple'){
    $difficulty = 1;
}
elseif($difficulty == 'middle'){
    $difficulty = 2;
}
else{
    $difficulty = 3;
}
$A = $_POST['A'];
$B = $_POST['B'];
$C = $_POST['C'];
$item = "\r\n".$question.";".$A.";".$B.";".$C.";".$answer.";".$difficulty.";";

$file = '../question/'.$category.'.txt';
$fp = fopen($file, 'a');
fwrite($fp, $item);
fclose($fp);
header("Location: addquestion.php");
?>
