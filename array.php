<?php

/*
echo 'Hello Welt';
$name = "Mario";


echo "<p>Hallo mein Name ist $name </p>" ;
echo "<p>Hallo mein Name ist $name </p>" ;
echo '<p>Hallo mein Name ist $name </p>' ;

$string1 = "<p> Die ist ein Teil";
$string2 = "des restlichen Satzes</p>";

echo "$string1 $string2";  

$zahl = 5;

$rechnung = $zahl + 5;

echo "<p> $rechnung </p>";

$bool = true;
echo "<p>Die Aussage ist wahr? $bool </p>";

$meinVar = "name";
echo $$meinVar;
*/

$myArray = array("Mario", "Pia", "Süße");
// echo $myArray;

print_r($myArray);

echo "<p>$myArray[0]</p>";


$myArray2[0] = "Eis";
$myArray2[1] = "Kaffee";
$myArray2[5] = "Milch";
$myArray2[nice] = "ich";
$myArray2[] = "läuft bei dir";


print_r($myArray2);
echo "<p>$myArray2[2]</p>";
echo "<p>$myArray2[5]</p>";
echo "<p>$myArray2[nice]</p>";


$dritterArray = array("Frankreich" => "französisch",
						"USA" => "englisch",
						"Finnland" => "finnisch");
print_r($dritterArray);
echo "<br>";

unset($dritterArray["Frankreich"]);
print_r($dritterArray);	
echo "<br>";
echo sizeof($dritterArray)



?>