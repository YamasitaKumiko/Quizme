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
$welcome = 'Hi! '.$name.":";
$grade = $_SESSION['grade'];
$size = $_SESSION['size'];
$date = $_SESSION['date'];
$category = $_SESSION['category'];
$level = $_SESSION['level'];

if (isset($_SESSION['name'])){
    $a = "<a href='record.php' style='text-decoration: none; font-size: 20pt; position: absolute; top: 400px;left: 30px'>show record</a>";
}
else $a = null;
if($_SESSION['times']>20)
    $time = 0;
else
    $time = $_SESSION['times'];
$item_id = addrecord($name,$grade,$date,$category,$level,$size,$time);
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
    <h2>scores:     <?= $grade?>/<?= $size?></h2>
    <h2>wrong question list:</h2>
    <?php
    while(!empty($_SESSION['question_id'])){
        $qid = array_shift($_SESSION['question_id']);
        $q = array_shift($_SESSION['question']);
        $wa = array_shift($_SESSION['wrong_answer']);
        $an = array_shift($_SESSION['answer']);
        if(isset($_SESSION['name'])){
            $user_id = $_SESSION['user_id'];
            addWrongQuestion($item_id,$user_id,$qid,$wa);
        }
        echo '<h2 class="qlist">Q:</h2>';
        echo $q;
        echo '<h2 class="qlist">your ans:</h2>';
        echo $wa;
        echo '<h2 class="qlist">right:</h2>';
        echo $an;
        echo '<br>';
    }
    ?>

</div>
<?= $a?>

<?php

$_SESSION['times'] = 9999999999;
$_SESSION['grade'] = 0;
$_SESSION['date'] = date('Y-m-d');
$_SESSION['all_questions'] = array();
$_SESSION['question'] = array();
$_SESSION['question_id'] = array(); //只记录错的题目
$_SESSION['wrong_answer'] = array();
$_SESSION['answer'] = array(); //问题的答案
$_SESSION['index'] = 0;//当前取第几个题目
$_SESSION['size'] = 0;
$_SESSION['level'] = "";
$_SESSION['category'] = "";
include("../include/closing.html");
?>
