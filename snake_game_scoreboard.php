<!DOCTYPE HTML>
<!-- Kevin Lin -->
<html>
	<head>
		<title>Score Board</title>
		<link rel = "stylesheet" href = "style.css" />
		<style>span{padding:20px;}</style>
		<script src = "utilities.js"></script>
		<?php
		$connection = new PDO("mysql:host=localhost;dbname=klin","root","");
		function getDatabaseResults($cmd, $arrayType = PDO::FETCH_BOTH)
		{
			global $connection;
			
			$result = $connection->prepare($cmd);
			$result->execute();

			return $result->fetchAll(PDO::FETCH_NUM);
		}
		function getScores($difficultyLevel)
		{
			if ($difficultyLevel == "any")
			{
				$cmd = "SELECT * FROM `leaderboard` WHERE 1 ORDER BY 'difficulty','score'";
			}
			else
			{
				$cmd = "SELECT * FROM `leaderboard` WHERE difficulty = '$difficultyLevel' ORDER BY 'score'";
			}
			$values = "";
			foreach (getDatabaseResults($cmd) as $item)
			{
				$values .= implode("\n",$item)."</br>";
			}
			echo '<div id = "divDisplay">'.$values.'</div>';
		}
		echo '<h2 class = title> ~Game of Lambdas Leaderboard~ </h2> </br> <h2 class = title> <span>Name</span> <span>Difficulty</span> <span>Score</span> </h2>';
		getScores($_POST["findScoreByDifficulty"]);
		?>
	</head>
	<img class = "bg" src = "images/leaderboard.png"/>
</html>