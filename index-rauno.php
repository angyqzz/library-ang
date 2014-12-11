<?php
$mysqli = new mysqli('rauno.localnet', 'root', 'rinu123');
$mysqli->select_db('chaehwa');
$mysqli->query("SET CHARACTER SET UTF8, collation_connection=utf8_general_ci");

if (isset($_POST['text'])) {
	$mysqli->query("INSERT INTO text SET text='" . $mysqli->real_escape_string($_POST['text']) . "'");
	header('Location: index.php');
	exit;
}

$texts = [];
$textsQuery = $mysqli->query("SELECT * FROM text ORDER BY id DESC");

while ($textsQuery && $textArray = $textsQuery->fetch_array(MYSQL_ASSOC)) {
	$texts[] = $textArray;
}

header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="en" ng-app="chaehwaApp">
<head>
	<meta charset="utf-8">
	<title>Chaehwa</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.27/angular.min.js"></script>
	<script>
		var chaehwaApp = angular.module('chaehwaApp', []);

		chaehwaApp.controller('ChaehwaCtrl', function($scope) {
			$scope.texts = <?=json_encode($texts)?>;
		});
	</script>
	<style>
		.pad15 {
			padding: 15px;
		}
		.padLeft15 {
			padding-left: 15px;
		}
		.nl2br {
			white-space: pre-line;
		}
	</style>
</head>
<body ng-controller="ChaehwaCtrl">
	<form action="index.php" method="post">
		<textarea name="text" cols="50" rows="5"></textarea>
		<input type="submit" value="Add" />
	</form>
	<div class="pad15" ng-repeat="text in texts">
		<span>{{text.id}}.</span>
		<span class="padLeft15">Added {{text.time}}</span>
		<div class="nl2br">{{text.text}}</div>
	</div>
</body>
</html>
