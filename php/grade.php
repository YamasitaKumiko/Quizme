<?php
include("../include/util.inc.php");
include("../include/opening.inc.php");
session_start();
if (time()<$_SESSION['end'])
    $_SESSION['end'] = time();
if (isset($_SESSION['name'])){
    $name = $_SESSION['name'];
}
else {
    $name = "user";
}
$welcome = 'Dear '.$name.":";
$start = $_SESSION['start'];
$end = $_SESSION['end'];
$correct = $_SESSION['num_correct'];
$wrong = $_SESSION['num_wrong'];
$grade = $_SESSION['grade'];
$question_num = $wrong + $correct;
$date = $_SESSION['date'];
$second = $end - $start;
if (isset($_SESSION['name'])){
    $a = "<a href='record.php' style='text-decoration: none; font-size: 20pt; position: absolute; top: 400px;left: 30px'>show record</a>";
}
else $a = null;
addrecord($name,$grade,$question_num,$date,$second);
?>

    <link rel="stylesheet" type="text/css" href="../css/grade.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">

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
<div id="grade">
    <h1><?= $welcome?></h1>
    <h2>scores:     <?= $grade?></h2>
    <h2>answered:    <?= $question_num?></h2>
    <h2>correct:     <?= $correct?></h2>
    <h2>wrong:      <?= $wrong?></h2>
    <h2>time cost:     <?=$second?> seconds</h2>
</div>
<?= $a?>

<?php
$_SESSION['question'] = array();
$_SESSION['start'] = 9999999999;
$_SESSION['end'] = 9999999999;
$_SESSION['num_correct'] = 0;
$_SESSION['num_wrong'] = 0;
$_SESSION['grade'] = 0;
$_SESSION['date'] = date('Y-m-d');
include("../include/closing.html");
?>
