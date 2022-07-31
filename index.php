<?php
include("include/opening.inc.php");
session_start();
$_SESSION['all_questions'] = array();
$_SESSION['question_id'] = array(); //只记录错的题目
$_SESSION['question'] = array(); //只记录错的题目
$_SESSION['wrong_answer'] = array();
$_SESSION['answer'] = array(); //问题的答案
$_SESSION['grade'] = 0;
$_SESSION['index'] = 0;//当前取第几个题目
$_SESSION['size'] = 0;
$_SESSION['date'] = date('Y-m-d');
$_SESSION['level'] = "";
$_SESSION['category'] = "";
$_SESSION['times'] = 9999999999;//默认不限时
//creator=0表示显示公共问题
if (isset($_SESSION['name']))   {
    $name = $_SESSION['name'];
    $show = "<li><a href = '../php/signout.php' title='click to sign out' class='button primary'>$name</a></li>";
    $des0 = "<li><a href='php/questionmanage.php?creator=0' style='text-decoration: none;font-size: 18pt'>Public Questions</a></li>";
    $des1 = "<li><a href='php/questionmanage.php?creator=1' style='text-decoration: none;font-size: 18pt'>Private Questions</a></li>";
    $des2 = "<li><a href='php/record.php' style='text-decoration: none;font-size: 18pt'>Show record</a></li>";
}
else {
    $show = "<li><a href='php/sign.php' class='button primary'>Sign</a></li>";
    $des0 = "<li title='please sign in first' style='font-size: 18pt'>Public Questions</li>";
    $des1 = "<li title='please sign in first' style='font-size: 18pt'>Private Questions</li>";
    $des2 = "<li title='please sign in first' style='font-size: 18pt'>Show record</li>";
}
?>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<script src="js/index.js"></script>
<!--new added-->
<link rel="stylesheet" href="assets/css/main.css" />
<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
<!--end-->
<!--new added-->

<body class="is-preload">
		<div id="page-wrapper">

<!-- Header  导航栏 -->
<header id="header">
    <h1 id="logo"><a href="index.php">QuizMe <img src="./images/logo.png" style="width:20px;height:20px;"></a></h1>
    <nav id="nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="php/choose.php" style="text-decoration: none">Quiz Now</a></li>
            <?= $show?>
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
                            <?= $des0?>
                            <?= $des1?>
                            <?= $des2?>
						</header>
                                    <!-- Content -->
							<section id="content">
								<a href="#" class="image fit"><img src="images/bg.jpg" alt="" /></a>
								
							</section>
					</div>
				</div>

		</div>
</body>
		<!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
<?php
include("include/closing.html");
?>

