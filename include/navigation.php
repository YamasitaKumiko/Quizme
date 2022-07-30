<!-- Header  导航栏 -->
<?php
if (isset($_SESSION['name']))   {
    $name = $_SESSION['name'];
    $show = "<li><a href='#' class='button primary'>$name</a></li>";
}
else {
    $show = "<li><a href='html/sign.html' class='button primary'>Sign In</a></li>";
}
?>
<header id="header">

    <h1 id="logo"><a href="index.php">QuizMe <img src="../images/logo.png" style="width:20px;height:20px;"></a></h1>
    <nav id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="php/choose.php" style="text-decoration: none">Quiz Now</a></li>
            <?= $show?>
        </ul>
    </nav>
</header>