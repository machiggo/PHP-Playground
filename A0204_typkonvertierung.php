<?php


  /*
    Explizite Typkonvertierungen kann man durch Voranstellen des Zieldatentyps in
    runden Klammern vor den Wert oder die Variable vornehmen.
    Typkonvertierungen sind nach (bool), (int), (float), (string), (array) und (object)
    möglich.
  */
  $integer = 0;

  $string = '';
  $string .= 'Heute ist Freitag!';
  $tag = 25;
  $string .= ' der ' . (string)$tag . 'te'; // explizite Typkonvertierung
  $string = $string . ' Bald ist Wochende';
  $string .= "($tag)"; // Implizierte Typkonvertierung durch Variablenersetzung

  echo $string;

  var_dump((array)$tag);



?>