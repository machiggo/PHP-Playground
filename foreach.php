<?php

for ($i=0; $i <10; $i++) {
	echo "$i<br>";
	
};
	
	echo "<hr>";
	
	$freunde = array("Mario", "Michi", "Thomas", "Halleljulia");
	for ($i=0; $i < sizeof($freunde); $i++) {
	echo "$i<br>";
	echo "$freunde[$i]<br>";}

	$i = 0;
	while ($i < sizeof($freunde)) {
		echo $freunde[$i]." ist mein Kumpel <br>";
		
		$i++;
	}
	
	
	foreach ($freunde as $key => $value) {
		$freunde[$key] = $value." Kumpel";
		echo "Array Element ".$key." ist ".$value."<br>";
		echo $freunde[$key];
	};
	
	// ermöglicht es durch einen Array durchzulaufen. Wert wird in der Schleife verwendet

	
	$i = 0;
	while ($i <= 10) {
		$j = $i * 5;
		echo $j."<br>";
		
		$i++;
	}
	
	
	
?>