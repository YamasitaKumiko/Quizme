<?php
include("../include/util.inc.php");
session_start();

$success = true;

function allwhitespace($string){
    if (substr_count($string,' ')===strlen($string)) return true;
    else return false;
}

$name = $_POST["name"];

$password1 = $_POST["password1"];
$password2 = $_POST["password2"];

if (allwhitespace($name) ||  $password1!=$password2)
    $success = false;

if (!preg_match('/^[a-zA-Z0-9]{4,10}$/',$name) || !preg_match('/^[a-zA-Z0-9]{5,10}$/',$password1))
    $success = false;

if ($success){
    $encryption = password_hash($password1,PASSWORD_DEFAULT);

    AddUser($name,$encryption);
    session_unset();
    session_regenerate_id(TRUE);
    $_SESSION["name"] = $name;
    header("Location: ../index.php");
}

else
    header("Location: signup_form.php");
?>



