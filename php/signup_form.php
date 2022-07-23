<?php
include("../include/opening.inc.php");
?>
<link rel="stylesheet" type="text/css" href="../css/signin-signup.css">
<link rel="stylesheet" type="text/css" href="../css/common.css">
<span><a href="../index.php" style="text-decoration: none" title="back to home page">Home</a></span>
<div id="form">
    <h1>Sign-up to QuizMe System</h1>
    <form action="signup.php" method="post">
        <div>UserName (4~10 characters, including letters and digits)</div>
        <br>
        <input type="text" name="name">
        <br><br>
        <div>Password (5~10 characters)</div>
        <br>
        <input type="password" name="password1">
        <br><br>
        <div>Repeat password</div>
        <br>
        <input type="password" name="password2">
        <br><br>
        <input type="submit" value="Sign-up">
        <input type="reset" value="Reset">
    </form>
</div>
<?php
include("../include/closing.html");
?>


