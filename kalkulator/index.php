<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Prosty Kalkulator</title>
</head>
<body>

<form>
	<input type="text" name="num1" placeholder="Liczba pierwsza">
	<input type="text" name="num2" placeholder="Liczba druga">

	<select name="operator">
		<option>--</option>
		<option>Dodawanie</option>
		<option>Odejmowanie</option>
		<option>Mnożenie</option>
		<option>Dzielenie</option>
	</select>

	<br>

	<button type="submit" name="submit" value="submit">Policz</button>
</form>

<p>Wynik wynosi:</p>

<?php
	if(isset($_GET['submit'])){
		$wynik1 = $_GET['num1'];
		$wynik2 = $_GET['num2'];
		$operator = $_GET['operator'];

		switch($operator){
			case "--":
				echo "Nie wybrałeś operatora!";
			break;
			case "Dodawanie":
				echo $wynik1 + $wynik2;
			break;
			case "Odejmowanie":
				echo $wynik1 - $wynik2;
			break;
			case "Mnożenie":
				echo $wynik1 * $wynik2;
			break;
			case "Dzielenie":
				echo $wynik1 / $wynik2;
			break;
		}
	}

?>

</body>
</html>
