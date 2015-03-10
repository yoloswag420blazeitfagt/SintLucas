<?php
if(!isset($_POST["intNumberInput"]))
{
	$strMessage = '<p></p>';
	$_POST["intNumberRandom"] = rand(1, 10);
}
else if($_POST["intNumberInput"] < $_POST["intNumberRandom"])
{
	$strMessage = '<p style="Color: red">Your answer is Wrong!</p>';
}
else if ($_POST["intNumberInput"] > $_POST["intNumberRandom"])
{
	$strMessage = '<p style="Color: red">Your answer is Wrong!</p>';
}
else if($_POST["intNumberInput"] === $_POST["intNumberRandom"])
{
	$strMessage = '<p style="Color: green">Your answer is Correct!</p>';

	echo "<script>alert('Your answer was correct! Redirecting...  Please close this alert window.');window.location.href='test.php';setTimeOut(500)</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Guess the Number</title>
	<link rel="stylesheet" type="text/css" href="../../inc/css/style.css" media="all">
</head>
<body>
	<div id="container">
		<div id="nav">
			<ul class="nav">
		   		<li id="settings">
		       		<img src="../../inc/img/settings.png" />
		   		</li>
		   		<li>
		       		<a href="../../index.html">Home</a>
		   		</li>
		   		<li>
			        <a href="../sps/index.php">Steen Papier Schaar</a>
			    </li>
			    <li id="settings">
		       		<img src="../../inc/img/settings.png" />
		   		</li>
			</ul>
		</div>
	</div>

	<br>

	<div id="container">
		<h1>Welcome To: Guess the Number!</h1>
		<strong><?php echo $strMessage; ?></strong>
		
		<br>

		<span>Guess the number(1 to 10):</span>
		
		<form action="" method="POST">
			<input type="text" name="intNumberInput">
			<br>
			<input type="hidden" name="intNumberRandom" value="<?php echo $_POST["intNumberRandom"] ?>">
			<br>
			<input type="submit" value="Probeer!">
		</form>
	</div>
</body>
</html>
