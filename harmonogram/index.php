<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Mini Harmonogram tygodnia - Jaki Dzień Dziś Mamy?</title>
	<style>
		p{
			text-align: center;
			font-size:120px;
			font-family:Arial;
			margin-top:38vh;
		}
	</style>
</head>
<body>

<?php
	date_default_timezone_set('Europe/Warsaw');
	$dzienTygodnia = date("w");

	switch ($dzienTygodnia){
		case 1:
			echo "<p>Dziś jest poniedziałek</p>";
			break;
		case 2:
			echo "<p>Dziś jest wtorek</p>";
			break;
		case 3:
			echo "<p>Dziś jest środa</p>";
			break;
		case 4:
			echo "<p>Dziś jest czwartek</p>";
			break;
		case 5:
			echo "<p>Dziś jest piątek</p>";
			break;
		case 6:
			echo "<p>Dziś jest sobota</p>";
			break;
		case 0: // 0 to niedziela!!!
			echo "<p>Dziś jest niedziela</p>";
			break;

	}

?>

</body>
</html>
