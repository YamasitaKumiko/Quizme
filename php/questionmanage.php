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
    $pub = "public";
    $creator = 0;
}
else{
    $pub = "private";
    $creator = $id;
}
$condition1 = "1 = 1";
$condition2 = "1 = 1";
$category = "random";
$level = 0;
// echo $_POST['category'];
if(isset($_GET["category"])){
    $category = htmlspecialchars($_GET['category']);
    $condition1 = " category = '$category'";
    // echo $condition1;
 }
if(isset($_GET['level'])){
    $level = htmlspecialchars($_GET['level']);
    $condition2 = " level = '$level'";
    // echo $condition2;
}
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
<span><a href="../index.php" style="text-decoration: none" title="back to home page">Home</a></span>
<div id="record">
    <div id="top">
        Hi <?= $name?> !
        Here is the <?= $pub?> question list：
    </div>

    <div id="selector">
        <div id="box" style="text-align:center">
            <form method="get" action="questionmanage.php?creator=0" style="display: inline-block">
                <input type="hidden" name="creator" value="0">
                <div>
                Category
                <select name="category">
                    <option value="geography"<?php if($category == 'geography'){ echo ' selected="selected"'; } ?>>geography</option>
                    <option value="sport"<?php if($category == 'sport'){ echo ' selected="selected"'; } ?>>sport</option>
                    <option value="science"<?php if($category == 'science'){ echo ' selected="selected"'; } ?>>science</option>
                    <option value="general"<?php if($category == 'general'){ echo ' selected="selected"'; } ?>>general</option>
                </select>
                Difficulty
                <select name="level">
                    <option value=1<?php if($level == '1'){ echo ' selected="selected"'; } ?>>easy</option>
                    <option value=2<?php if($level == '2'){ echo ' selected="selected"'; } ?>>medium</option>
                    <option value=3<?php if($level == '3'){ echo ' selected="selected"'; } ?>>hard</option>
                </select>
                    <input type= "submit" value="Search"/>
                </div>
            </form>
            <button onclick='add()' style="display: block;margin:0 auto;">Add</button>
        </div>

    </div>

    <div id="bottom">

        <table id="table" style="width:80%;table-layout:fixed;">
            <caption style="font-family: 'Roboto', Helvetica, sans-serif;font-size: 24pt;font-weight: bolder;color: #e44c65;margin : 30px 0"><?= $pub?> Question List of <?= $name?></caption>
            <tr><th>Number</th><th>Category</th><th>Level</th><th>Question</th><th>Answer</th></tr>
            <?php
            $records = showQuestion($condition1,$condition2,$creator);
            $count =  $records->rowCount();
            $index = 1;
            for ($index ; $index <= $count ; $index++){
                $record = $records->fetch();
                $id = $record['id'];
                $creator = $record['creator'];
                echo "<tr>
                <td>$index</td>
                    <td>{$record['category']}</td>
                    <td>{$record['level']}</td>
                    <td>{$record['question']}</td>
                    <td>{$record['answer']}</td>
                    <td><button onclick='del($id,$creator)'>Delete</button></td>
                    <td>
                        <button onclick='update($id,$creator)'>Update</button>
                    </td>
                </tr>";
            }
            ?>
        </table>
       <br/>
       <br/>

    </div>
</div>
</div>
</body>
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




