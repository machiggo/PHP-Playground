<?php

//	print_r($_GET);


/*
echo $_GET['zahl']." <br>";

$zahl = $_GET['zahl'];
//bool ctype_digit (string $zahl)


function isprime($zahl) {
        $maxtest = sqrt($zahl);
        for ($i = 2; $i <= $maxtest; ++$i) {
                if ($zahl % $i == 0) {
                        return false;
                }
        }
        return true;
}

//		if ($zahl != (number_format)
		
//		if ($zahl == "$zahl") {
//			echo "bitte nur gültige Zahlen eingeben";
//			}

	if (ctype_digit($zahl) === false) {	
		echo "bitte gib eine echte Zahl ein";
	}
	else{
		if (isprime($zahl) === true) 
			{
			echo "die Zahl ist eine Primzahl";
		
			} else {
				echo "die Zahl ist keine Primzahl";
			}
		}
*/

$freunde = array("Yannik","Simon", "dei Mudda", "Stinkefuesse");

// print_r($_POST);


$name = $_POST['name'];

 echo $name."<br>";

$istBekannt = "";
foreach ( $freunde as $value){ 
	if ($value == $name){
		$istBekannt=true;}
	}
	
	if ($istBekannt){
		echo "Hi ".$name.", wie gehts?";
	} else {echo "$name ? Who the fuck is $name";}
	
	
	
	/*
	if ( $freunde[$key] == $name) {
		echo "hi";
		return;
		} 
	
		else { echo "ich kenne dich nicht <br>";}
	/*

/*
foreach ( $freunde as $value){
	if ( $freunde[$value] == $name) {
		echo "hi";
		return;
		} 
	
		else { echo "ich kenne dich nicht <br>";}
	}
*/


?>

<!--
<p> Ein Zahl du wählen sollst </p>

	<form>
		<input name="zahl" type="text" placeholder="bitte gib eine Zahl ein">
		<input type="submit" value="go">

-->	

	<form method="post">
		<input name="name" type="text">
		<input type="submit" value="go!">
