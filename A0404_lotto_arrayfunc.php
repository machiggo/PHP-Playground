<?php

  // range() erzeugt ein Array mit Zahlen beginnend bei Start, endend bei End und der
  // Schrittweite Step
  // array range(<start>, <end>[, <step = 1>])
  $lottozahlen = range(1, 49);

  // shuffle() sortiert ein Array zufallsmäßig
  shuffle($lottozahlen);

  // array_slice() erzeugt aus einem Teil eines Arrays ein neues Array
  // array array_slice(<array>, <startindex>[, <länge>])
  $lottozahlen = array_slice($lottozahlen, 0, 6);

  // sort() sortiert die Werte eines Arrays ohne Beibehaltung der Verbindung
  // von key und value
  sort($lottozahlen);


  /*
    implode() verkettet die values eines Arrays in einen String und fügt zwischen
    den Elementen ein(e) Trennzeichen(-kette) ein
    string implode(<trennzeichen>, <array>)
  */
  echo '<ul><li>' . implode('</li><li>', $lottozahlen) . '</li></ul>';
  // explode() splittet einen String anhand eines Trennzeichens in ein Array um



?>