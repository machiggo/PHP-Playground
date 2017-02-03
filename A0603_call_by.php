<?php

 // A0603_call_by.php


 $items = array();

 function formatLabel(string $content, array &$list) {

   $list[] = 'Neu';
   echo '<h1>Innerhalb der Funktion</h1>';
   var_dump($list);

 } // formatLabel

 $label = 'Mein Text';

 formatLabel($label, $items);

 echo '<h1>Außerhalb der Funktion</h1>';
 var_dump($items);

 /*
   call_by_value (Standard)
   Der Wert wird beim Aufruf einer Funktion als Kopie dem Argumentnamen
   zugewiesen

   call_by_reference (&)
   mit dem Referenzierungsoperator (&) wird nicht der Wert in das Argument
   kopiert, sondern nur eine Referenz zur übergebenen Variablen
 */



?>