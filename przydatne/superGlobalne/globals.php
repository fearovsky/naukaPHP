<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>PHP[Globals]</title>
</head>
<body>
	<?php

	$x = 5;

	function something(){
		$y = 10;
		echo $GLOBALS['x'];
	}

	something();

	?>
</body>
</html>
