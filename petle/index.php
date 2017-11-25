<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Tablce, Pętla, Sorotwanie</title>
</head>
<body>

<?php
// Tablice, sortowanie, pętla foreach
echo "<h2>Tablice, sortowanie na pętli foreach:</h2>";

echo "Wynik tablic: </br>";
foreach (range(0, 9) as $val) {
$tablica[$val]=rand(1,1000);
print($tablica[$val]. " ");
}

echo "<br>";
sort($tablica);
echo("<br>Tablica posortowana rosnąco: <br>");

foreach ($tablica as $jedna){
	echo $jedna.' ';
}

echo "<br>";
rsort($tablica);
echo("<br>Tablica posortowana malejąco: <br>");
foreach ($tablica as $jedna){
	echo $jedna.' ';
}



// Tablice, sortowanie, pętla for



echo "<h2>Tablice, sortowanie na pętli for:</h2>";
echo "Wynik tablic: <br>";
for($i=0;$i<10;$i++){
    $tablica[$i]=rand(1,1000);
    echo($tablica[$i]. " ");
	}
		echo "<br>";
    sort($tablica);
    echo("<br>Tablica posortowana rosnąco: <br>");
    for($i=0;$i<10;$i++){
        echo($tablica[$i]. " ");
    }

    rsort($tablica);
		echo "<br>";
    print("<br>Tablica posrotwana malejąco: <br>");

    for($i=0;$i<10;$i++){
        echo($tablica[$i]. " ");
    }

?>


</body>
</html>
