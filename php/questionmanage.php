<?php
include("../include/util.inc.php");
include("../include/opening.inc.php");
session_start();
$PDO = getPDO();
$name = $_SESSION['name'];
$id = $_SESSION['user_id'];
$user = GetUserInfo($name)->fetch();
$public = intval($_GET['creator']);
if($public == 0){
    $pub = "Public";
    $creator = 0;
}
else{
    $pub = "private";
    $creator = $id;
}
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

<div id="record">
<!--     <div id="top">
        Hi <?= $name?> !
        Here is the <?= $pub?> question list：
    </div> -->

<!--     <div id="selector">
        <div id="box">
            <form method="post" action="search.php" style="display: inline-block">
                <input type="search" name="search" size = "20" placeholder="input keyword" value = "<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" autofocus/>
                <input type= "submit" value="Search"/>
            </form>
            <button onclick='add()' style="display: inline-block">Add</button>
        </div>

    </div> -->

    <div id="bottom">

        <table id="table" style="width:80%;table-layout:fixed;">
            <caption style="font-family: 'Roboto', Helvetica, sans-serif;font-size: 24pt;font-weight: bolder;color: #e44c65;margin : 30px 0"><?= $pub?> Question List of <?= $name?></caption>
            <tr><th>Number</th><th>Category</th><th>Level</th><th>Question</th><th>Answer</th></tr>
            <?php
            $category = "random";
            $level = 0;
            $records = showQuestionAll($category,$level,$creator);
            $count =  $records->rowCount();
            $index = 1;
            for ($index ; $index <= $count ; $index++){
                $record = $records->fetch();
                $id = $record['id'];
                echo "<tr><td>$index</td><td>{$record['category']}</td><td>{$record['level']}</td><td>{$record['question']}</td><td>{$record['answer']}</td><td><button onclick='del($id,$creator)'>Delete</button></td><td><button onclick='upd()'>Update</button></td></tr>";
            }
            ?>
        </table>
        <div id="selector">
            <div id="box" style="width:80%;table-layout:fixed;">
                <form class="search" method="post" action="../php/search.php" >
                    <input type="search" placeholder="搜索.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    <button onclick='add()'>Add</button>
                </form>
<!--                 <form method="post" action="search.php" style="display: inline-block">
                    <input type="search" name="search" size = "20" placeholder="input keyword" value = "<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" autofocus/>
                    <input type= "submit" value="Search"/>
                </form>
                <button onclick='add()' style="display: inline-block">Add</button> -->
            </div>

        </div>
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




