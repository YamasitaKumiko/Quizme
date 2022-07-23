<?php
include("../include/util.inc.php");
include("../include/opening.inc.php");
session_start();
$PDO = getPDO();
$name = $_SESSION['name'];
$user = GetUserInfo($name)->fetch();
$num = $user['question_donated'];

?>
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/record.css">
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
<div id="record">
    <div id="top">
        Dear <?= $name?> :
        you have donated <?= $num?> question!!
    </div>

    <div id="bottom">

        <table id="table" width="800">
            <caption style="font-family: 'Times New Roman';font-size: 24pt;font-weight: bolder;color: brown">Quiz Record</caption>
            <tr><th>Number</th><th>Scores</th><th>Answered</th><th>Time(seconds)</th><th>Date</th></tr>
            <?php
                $records = showrecord($name);
                $count =  $records->rowCount();
                $index = 1;
                for ($index ; $index <= $count ; $index++){
                    $record = $records->fetch();
                    echo "<tr><td>$index</td><td>{$record['grade']}</td><td>{$record['num_question']}</td><td>{$record['time']}</td><td>{$record['date']}</td></tr>";
                }
                ?>
        </table>
    </div>
</div>
<?php
include("../include/closing.html");
?>




