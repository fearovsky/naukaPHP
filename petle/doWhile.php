<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Pętla Do while</title>
</head>
<body>

<?php

	$x = 1;

	do{// Zawsze wykonuje przynajmniej jeden obrót (Nawet gdy warunke jest niespełniony!)
		echo "Działa... [$x]<br>";
		$x++;
	}while($x <= 5);

?>

</body>
</html>
