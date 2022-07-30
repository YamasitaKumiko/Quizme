<?php
include("../include/opening.inc.php");
?>
<!DOCTYPE html>
<html>
<head>
<!-- metatags-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- Custom-Style-Sheet -->
	<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/><!--style_sheet-->
	<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome_Icons-CSS -->

	<link rel="stylesheet" type="text/css" href="../css/common.css">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" href="../assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
<!--//Custom-Style-Sheet -->
<!--online_fonts-->	
	<link href="http://maxcdn.bootstrapcdn.com/css?family=Audiowide" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/css?family=Montserrat+Alternates" rel="stylesheet">
<!--//online_fonts-->
</head>
<body class="is-preload">
	<div id="page-wrapper">
<!-- Header  导航栏 -->
        <header id="header">
            <h1 id="logo"><a href="../index.php">QuizMe <img src="../images/logo.png" style="width:20px;height:20px;"></a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../php/choose.php" style="text-decoration: none">Quiz Now</a></li>
                    <li><a href='../php/sign.php' class='button primary'>Sign</a></li>
                </ul>
            </nav>
        </header>
<div class="w3l-head">
	<h1>Sign for QuizMe System</h1>
</div>
<div class="w3l-main">
<div class="w3l-left-side">
	
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="../images/g5.jpg" alt="image"/>
    </li>
    <li>
      <img src="../images/g2.jpg" alt="image"/>
    </li>
    <li>
      <img src="../images/g3.jpg" alt="image"/>
    </li>
    <li>
      <img src="../images/g4.jpg" alt="image"/>
    </li>
	<li>
      <img src="../images/g1.jpg" alt="image"/>
    </li>
  </ul>
</div>
</div>

<div class="w3l-rigt-side">
	<form action="#" method="post">
		<div class="w3l-signin">
			<a class="w3_play_icon1" href="#small-dialog1"> sign in</a>
		</div>
		<div class="w3l-signup">
			<a class="w3_play_icon1" href="#small-dialog2"> sign up</a>
		</div>
		<div class="clear"></div>
	</form>	
</div>
<div class="clear"></div>
</div>

<!--sign in form -->
<div id="small-dialog1" class="mfp-hide">
	<div class="wthree-container">
		<div class="wthree-form">
			<div class="agileits-2">
				<h2>sign in</h2>
			</div>
			<form action="signin.php" method="post">
				<div class="w3-user">
					<input type="text" name="name" placeholder="Username" required="">
				</div>
<!-- 				<div class="clear"></div> -->
				<div class="w3-psw">
					<input type="password" name="password" placeholder="Password" required="">
				</div>
<!-- 				<div class="clear"></div>
				<div class="clear"></div> -->
				<div class="signin">
					<input type="submit" value="sign in">
				</div>
	<!-- 			<div class="clear"></div> -->
			</form>
		</div>
	</div>
</div>
<!--sign in form -->
<!-- for register popup -->

<!--sign up form -->
<div id="small-dialog2" class="mfp-hide">
	<div class="wthree-container">
		<div class="wthree-form bg">	
			<div class="agileits-2">
				<h2>sign up</h2>
			</div>
			<form action="signup.php" method="post">
				<div class="w3-user">
					<input type="text" name="name" placeholder="Username(4~10 letters and digits)" required="">
				</div>

				<!-- <div class="clear"></div> -->
				<div class="w3-psw">
					<input type="password" name="password1" placeholder="Password (5~10 characters)" required="">
				</div>
				<div class="w3-psw">
					<input  type="password" name="password2" placeholder="Confirm-Password" required="">
				</div>
				<!-- <div class="clear"></div>
				<div class="clear"></div> -->
				<div class="signin">
					<input type="submit" value="sign up">
				</div>
				<!-- <div class="clear"></div> -->
			</form>
		</div>
	</div>
</div>
<!--sign in form -->	
<!-- //for register popup -->

	
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>

<!-- pop-up-box-js-file -->  
	<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box-js-file -->
<script>
	$(document).ready(function() {
	$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
																	
	});
</script>
<!-- flexSlider -->
	<script defer src="../js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	</div>
<!-- //flexSlider -->
</body>
<?php
include("../include/closing.html");
?>
</html>