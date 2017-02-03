<?php

  echo '<pre>';
  var_dump('Gundi\nschreibt', "alle anderen\nschauen zu");
  echo '</pre>';

  $filename = "C:\\Program Files (x86)\\Notepad++\\notepad++.exe";
  $filename = 'C:\Program Files (x86)\Notepad++\notepad++.exe';
  $filename = 'C:/Program Files (x86)/Notepad++/notepad++.exe';
  echo $filename;

  // Boolean
  $true = true;
  $false = false;

  // Integer
  // $integer = -123e3; // Exponentialschreibweise -> wird als Float erkannt
  $integer = -123000;

  // Float
  $float = -1.234;

  // Array
  $array = array(12.24, 24, -36);
  $assoziativ = [
    "anrede" => 'Frau',
    "vorname" => 'Gundi',
    "nachname" => 'Hoffmann'
  ];
  $indexed = [
    100 => 'eins',
    200 => 'zwei',
    300 => 'drei'
  ];

  $indexed[] = 'vier';
  $indexed[50] = 'fünf';

  echo '<pre>';
  var_dump($true, $false, $integer, $float, $array, $assoziativ["vorname"], $indexed);
  echo '</pre>';


?>