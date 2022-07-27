<?php
session_start();
include("../include/opening.inc.php");
include("../include/util.inc.php");
?>
<link rel="stylesheet" type="text/css" href="../css/common.css">
<link rel="stylesheet" type="text/css" href="../css/quiz.css">
<script src="../js/quiz.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<?php
if (!isset($_SESSION['name'])) {
    $des1 = "";
    $banner = "<a href = 'signin_form.php' style='font-weight: bolder;text-decoration: none' >Sign in</a>";
} else {
    $des1 = "
    <label>Timed:</label>
    <input type='radio' name='option4' value=0 checked='checked'><label>public</label>
    <input type='radio' name='option4' value={$_SESSION['user_id']}><label>private</label>
    <br><br>";
    $name = $_SESSION['name'];
    $banner = "<a href = 'signout.php' title='click to sign out' style='font-weight: bolder;text-decoration: none'>Welcome $name</a>";
}
?>
<span><?= $banner ?></span><br><br>
<span><a href="../index.php" style="text-decoration: none" title="back to home page">Home</a></span>
<div id="quiz">
    <form name="quiz_form" method="post" action="quiz.php">
        <?= $des1?>
        <label>Timed:</label>
        <input type="radio" name="option0" value=0 checked='checked' onclick="document.getElementById('times').style.display='none'"><label>no</label>
        <input type="radio" name="option0" value=1 onclick="document.getElementById('times').style.display=''"><label>yes</label>
        <input type="number" name="times" id="times" style="display: none" placeholder="[5-20]s" min="5" max="20">
        <br><br>
        <label>Category:</label>
        <input type="radio" name="option1" value="science" checked='checked'><label>science</label>
        <input type="radio" name="option1" value="geography"><label>geography</label>
        <input type="radio" name="option1" value="sport"><label>sport</label>
        <input type="radio" name="option1" value="general"><label>general</label>
        <input type="radio" name="option1" value="random"><label>random</label><br><br>
        <label>Level:</label>
        <input type="radio" name="option2" value=1 checked='checked'><label>easy</label>
        <input type="radio" name="option2" value=2><label>medium</label>
        <input type="radio" name="option2" value=3><label>hard</label>
        <input type="radio" name="option2" value=0><label>random</label><br><br>
        <label>Size:</label>
        <input type="radio" name="option3" value=5 checked='checked'><label>short</label>
        <input type="radio" name="option3" value=10><label>medium</label>
        <input type="radio" name="option3" value=15><label>long</label><br><br>

        <input type="submit" value="Start" >
    </form>
</div>

<?php
include("../include/closing.html");
?>
