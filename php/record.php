<?php
include("../include/util.inc.php");
include("../include/opening.inc.php");
/* include("../include/navigation.php"); */
session_start();
$PDO = getPDO();
$name = $_SESSION['name'];
$user = GetUserInfo($name)->fetch();
/* added */
if (isset($_SESSION['name']))   {
    $show = "<li><a href='../php/signout.php' class='button primary'>$name</a></li>";
}
else {
    $show = "<li><a href='../php/sign.php' class='button primary'>Sign</a></li>";
}

?>
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <link rel="stylesheet" type="text/css" href="../css/record.css">
    <script src="../js/quiz.js"></script>
    <!--new added-->
<link rel="stylesheet" href="../assets/css/main.css" />
<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>

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

        <div id="record" >
            <div id="bottom">
                <table id="table" style="width:80%;table-layout:fixed;">
                    <caption style="font-family: 'Roboto', Helvetica, sans-serif;font-size: 24pt;font-weight: bolder;color: #e44c65;margin : 30px 0">Quiz Record of <?= $name?></caption>
                    <tr><th>Number</th><th>Scores</th><th>Category</th><th>Level</th><th>Size</th><th>Time(s)</th><th>Date</th><th>False</th></tr>
                    <?php
                        $records = showrecord($name);
                        $count =  $records->rowCount();
                        $index = 1;
                        for ($index ; $index <= $count ; $index++){
                            $record = $records->fetch();
                            if($record['limited_time'] == 0)
                                $timed = "unlimited";
                            else
                                $timed = $record['limited_time'];
                            echo "<tr><td>$index</td><td>{$record['grade']}</td><td>{$record['category']}</td><td>{$record['level']}</td><td>{$record['size']}</td><td>$timed</td><td>{$record['date']}</td><td><button onclick='showlist({$record['item_id']})'>Check</button></td></tr>";
                        }
                        ?>
                </table>
            </div>
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




