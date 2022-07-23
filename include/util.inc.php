<?php

$PDO = getPDO();

// returns a PDO object
function getPDO() {
    $host = 'localhost';    # TO COMPLETE
    $db   = 'project';
    $user = 'root';    # TO COMPLETE
    $pass = '12345678';    # TO COMPLETE
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
}

function AddUser($username , $password){
    $PDO = getPDO();
    $stmt = $PDO->prepare("INSERT INTO project.user(`username`,`password`) VALUES (?,?);");
    $stmt->execute([$username,$password]);
}

function GetUserInfo($name){
    $index = "username";
    $PDO = getPDO();
    $name = $PDO->quote($name);
    $result = $PDO->query("SELECT * FROM project.user WHERE $index = $name;");
    return $result;
}

function AddQuestion($name){
    $index = "username";
    $PDO = getPDO();
    $name = $PDO->quote($name);
    $result = $PDO->query("SELECT * FROM project.user WHERE $index = $name;");
    $user = $result->fetch();
    $count = $user["question_donated"];
    $count++;
    $stmt = $PDO->prepare("UPDATE project.user SET question_donated = $count WHERE $index = $name;");
    $stmt->execute();
}

function addrecord($name,$grade,$num,$date,$time){
    $PDO = getPDO();
    $stmt = $PDO->prepare("INSERT INTO project.record(`username`,`grade`,`num_question`,`date`,`time`) VALUES (?,?,?,?,?);");
    $stmt->execute([$name,$grade,$num,$date,$time]);
}

function showrecord($name){
    $index = "username";
    $PDO = getPDO();
    $name = $PDO->quote($name);
    $result = $PDO->query("SELECT * FROM project.record WHERE $index = $name;");
    return $result;
}

