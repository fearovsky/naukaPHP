<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Funkcje</title>
</head>
<body>

<?php
	$x = 1500;

	function znizka($x){
	$newnr = $x * 0.75;
	echo "Teraz zapłacisz tylko: ".$newnr.", zamiast $x!".'<br>';
}

	znizka($x);

	znizka(125);

	$a = 100;
	znizka($a);

?>

</body>
</html>
