<?php
include("../include/opening.inc.php");
?>
<link rel="stylesheet" type="text/css" href="../css/common.css">
<link rel="stylesheet" type="text/css" href="../css/signin-signup.css">

<span><a href="../index.php" style="text-decoration: none" title="back to home page">Home</a></span>
<div id="form">
    <h1>Sign-in to QuizMe System</h1>
    <form action="signin.php" method="post">
        <div>UserName</div>
        <br>
        <input type="text" name="name">
        <br><br>
        <div>Password</div>
        <br>
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="Sign-in">
        <input type="reset" value="Reset">
        <br>
        <br>
        <div>Don't have an account? Sign up <a href="signup_form.php">Here</a></div
    </form>
</div>
<?php
include("../include/closing.html");
?>

