<?php
include("../include/opening.inc.php");

?>
<link rel="stylesheet" type="text/css" href="../css/common.css">
<link rel="stylesheet" type="text/css" href="../css/index.css">
<script src="js/index.js"></script>
<!--new added-->
<link rel="stylesheet" href="../assets/css/main.css" />
<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
<!--end-->
<!--new added-->

<body class="is-preload">
		<div id="page-wrapper">

<!-- Header  导航栏 -->
<header id="header">
    <h1 id="logo"><a href="index.php">QuizMe <img src="../images/logo.png" style="width:20px;height:20px;"></a></h1>
    <nav id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="php/choose.php" style="text-decoration: none">Quiz Now</a></li>
            <li><a href='php/signin_form.php' class='button primary'>Sign</a></li>
        </ul>
    </nav>
</header>


			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>QuizMe System</h2>
							<p>Welcome to test your knowledge!</p>
                            <p style = "color: #e44c65";><i>Hint: You can also answer questions without logging in, but you can't add questions or view records!</i></p>
						</header>
                                    <!-- Content -->
							<section id="content">
								<a href="#" class="image fit"><img src="images/bg.jpg" alt="" /></a>
								
							</section>
					</div>
				</div>

		</div>
<!--end-->

<!-- <input type="button" id="regulation" value="Hints" onclick="popBox()">
<div id="popLayer">
    <div id="popBox">
        <div id="word">1:Users don't log in can answer questions, but can not add questions or view quiz records.<br></div>
        <br>
        <input type="button"  value="close" onclick="hide()">
    </div>
</div> -->
</body>
		<!-- Scripts -->
        <script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
<?php
include("../include/closing.html");
?>

