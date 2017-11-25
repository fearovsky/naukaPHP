<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciasteczka / Sesje</title>
</head>
<body>
	<?php
	/*
		*** GLOBALNE ***
				$_COOKIE
				$_SEESION
		*** GLOBALNE ***
	*/

	setcookie("Imie", "Daniel", time() + 86400);
	// *** Imie = Daniel, Aktualny czas + 86400 sekund! ***

	// Zmienna globalna o nazwie name, przypisanie jej wartości "Daniel"
	$_SESSION['name'] = "Daniel";

	?>
</body>
</html>
