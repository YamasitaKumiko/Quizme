<?php
session_start();
include("../include/opening.inc.php");
include("../include/util.inc.php");
?>
<link rel="stylesheet" type="text/css" href="../css/common.css">
<link rel="stylesheet" type="text/css" href="../css/quiz.css">
<script src="../js/quiz.js"></script>
<script src="js/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="../assets/css/main.css" />
<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
<?php
/* if (!isset($_SESSION['name'])) {
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
} */
if (isset($_SESSION['name']))   {
    $name = $_SESSION['name'];
    $show = "<li><a href = '../php/signout.php' title='click to sign out' class='button primary'>$name</a></li>";
}
else {
    $des1 = "";
    $show = "<li><a href='php/sign.php' class='button primary'>Sign</a></li>";
}
?>
<body class="is-preload">
	<div id="page-wrapper">
<!-- Header  导航栏 -->
        <header id="header">
            <h1 id="logo"><a href="../index.php">QuizMe <img src="../images/logo.png" style="width:20px;height:20px;"></a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../php/choose.php" style="text-decoration: none">Quiz Now</a></li>
                    <?= $show?>
                </ul>
            </nav>
        </header>
<div id="quiz">
    <form name="quiz_form" method="post" action="quiz.php">
        <!-- <?= $des1?> -->
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

        <input type="submit" value="Start" style="background-color: #e44c65;">
    </form>
</div>
</div>
</body>
            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<?php
include("../include/closing.html");
?>
