<?php

  /*
    Aufgabenstellung Gepäcktransport

    Die Aufgabe dieses Programms dient dazu mithilfe von einer Fallauswahl auf
    unterschiedliche Bedingungen zu reagieren.

    Aufgrund der Wertangaben für das Gewicht eines Gepäckstücks (gewicht = 36) soll das
    Programm eine Zuordnung zu einer Gewichtsklasse vornehmen.

    Einteilung der Gewichtsklassen:

    Gewicht des Gepäckstücks	Gewichtsklasse
    bis 20 kg	S
    bis 30 kg	M
    bis 50 kg	L
    bis 70 kg	XL
    über 70 kg	als Reisegepäck unzulässig, als Luftfracht versenden

    Die Aussage soll in einer Zeichenkettenvariablen zusammengesetzt und am Ende ausgegeben
    werden.

    Das Ergebnis sieht dann für den einen Fall mit den vorgegebenen Werten so aus:

    Das Gepäckstück wiegt 36 kg. Es gehört zur Kategorie L (bis 50 kg).
  */

  $gepaeckKlassen = [
    20 => 'S',
    30 => 'M',
    50 => 'L',
    70 => 'XL'
  ];

  ksort($gepaeckKlassen); // sortieren, damit die Logik immer sauber funktioniert, auch wenn
  // jemand das Array manuell und falsch verändert hat

  end($gepaeckKlassen); // den Zeiger im Array auf das letzte Element stellen, um das
  // Maximalgewicht zu ermitteln
  $maxGewicht = key($gepaeckKlassen); // den aktuellen Key extrahieren als Maximalgewicht

  $gepaeckGewicht = 70;

  $result = '';

  foreach ($gepaeckKlassen as $gewicht => $klasse) {
    if ($gepaeckGewicht <= $gewicht) {
      $result = sprintf('Das Gepäckstück wiegt %s kg. Es gehört zur Kategorie %s (bis %s kg)', $gepaeckGewicht, $klasse, $gewicht);
      break;
    }
  } // foreach

  if ($result) {
    echo $result;
  } else {
    printf('Ihr Gepäck mit %s kg liegt über dem zulässigen Gewicht (max. %s kg). Es muss als Luftfracht versendet werden!', $gepaeckGewicht, $maxGewicht);
    //über 70 kg	als Reisegepäck unzulässig, als Luftfracht versenden
  }



?>