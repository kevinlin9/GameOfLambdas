<?php
	$name = $_GET["name"];
	$difficulty = $_GET["difficulty"];
	$score = $_GET["score"];
	$connection = new PDO("mysql:hostname=localhost;dbname=klin","root","");
	$cmd =  "INSERT INTO `leaderboard` (`name`, `difficulty`, `score`) VALUES ('$name', '$difficulty', '$score')";
	$action = $connection->prepare($cmd);
	$action->execute();
?> 