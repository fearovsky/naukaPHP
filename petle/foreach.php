<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Pętla foreach</title>
</head>
<body>

<?php
$array = array("Daniel", "Jane", "Jacob", "John", "<b>Simon</b>");

foreach($array as $loopdate){
	echo "Mam na imię ".$loopdate."<br>";
}

?>

</body>
</html>
