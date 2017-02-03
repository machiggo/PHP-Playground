<?php

  require_once '/php/classes/Girokonto.class.php';


  $konto = new Girokonto('456258956', 'Martina Fölmer', 100.0, 5000, false);
  $konto->auszahlen(5050);
  echo $konto->verfuegungsrahmen;
  $konto->dispo *= 2;
  echo '<pre>';
  var_dump($konto);
  echo '</pre>';

  $konto2 = new Girokonto('556258956', 'Testi Tester', 100.0, 5000, false);
  $konto2->sperren();
  echo '<pre>';
  var_dump($konto2);
  echo '</pre>';

  $konto2->entsperren('geheim');
  echo '<pre>';
  var_dump($konto2);
  echo '</pre>';


?>
