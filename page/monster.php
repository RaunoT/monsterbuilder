<?php

	require("../functions.php");

	if (!isset($_SESSION["userId"])) {

		header("Location: login.php");
		exit();
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
		<script src="../js/jquery-3.2.1.min.js" charset="utf-8"></script>
		 <link type="text/css" rel="stylesheet" href="../css/style.css">
		<script src="../js/javascript.js" charset="utf-8"></script>
		<title>Monster</title>
	</head>

	<body>

		<div class="box" id="player">
			<div id="playerScore"></div>
			<div class="playerCreature" id="pHead"></div>
			<div class="playerCreature" id="pLeftHand"></div>
			<div class="playerCreature" id="pChest"></div>
			<div class="playerCreature" id="pRightHand"></div>
			<div class="playerCreature" id="pLeftLeg"></div>
			<div class="playerCreature" id="pRightLeg"></div>
		</div><!--.box player-->

		<div class="container">

			<a href="main.php"><div id="back"><span>Back</span></div></a>

			<div class="box" id="AI">
				<div id="AIScore"></div>
				<div class="AICreature" id="head"></div>
				<div class="AICreature" id="leftHand"></div>
				<div class="AICreature" id="chest"></div>
				<div class="AICreature" id="rightHand"></div>
				<div class="AICreature" id="leftLeg"></div>
				<div class="AICreature" id="rightLeg"></div>
			</div><!--.box AI-->

			<div class="interface">
				<div id="placeholder"></div>
				<div class="btn" id="refresh">Reload</div>
				<div class="btn" id="play">Play</div>
			</div><!--interface-->

		</div><!--container-->
	</body>
</html>
