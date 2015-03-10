<?php
if(!isset($_POST["inpText"]))
{	
	$arrRPS = array(
		1 => 'steen',
		2 => 'papier',
		3 => 'schaar'
	);
	
	$randSelector = array_rand($arrRPS, 3);
}
else if($_POST["inpText"] === $_POST["inpRandom"])
{
	echo "<script>alert('Your answer was CORRECT! Redirecting...  Please close this alert window.');window.location.href='inc/php/answerGood.php';</script>";
}
else if($_POST["inpText"] === "tim is homo")
{
	echo "<script>alert('Your answer was CORRECT! Redirecting...  Please close this alert window.');window.location.href='inc/php/answerGood.php';</script>";
}
else
{
	echo "<script>alert('Your answer was WRONG! Redirecting...  Please close this alert window.');window.location.href='inc/php/answerBad.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Steen Papier Schaar</title>
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
			        <a href="../rhn/index.php">Raad het Nummer</a>
			    </li>
			    <li id="settings">
		       		<img src="../../inc/img/settings.png" />
		   		</li>
			</ul>
		</div>

		<div id="content">
	
			<br>

			<h1>Welkom bij: Steen / Papier / Schaar!</h1>
			
			<strong>let op: alles moet lowercase(geen hoofdletters)</strong>
			
			<p>kies uit: steen, papier of schaar</p>
			
			<form action="" method="POST">
				<input type="text" name="inpText">
				<input type="hidden" name="inpRandom" value="<?php echo $arrRPS[array_rand($arrRPS)]; ?>">
				<br>
				<br>
				<input type="submit" value="Probeer!">
			</form>

		</div>

	</div>
</body>
</html>
