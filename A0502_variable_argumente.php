<?php

  // Funktion mit variabler Anzahl von Argumenten
  /*
    nicht immer weiß man, wie viele Argumente überhaupt übergeben werden.
    Werden Argumentnamen vergeben, dann muss für jedes Argument auch ein
    Wert als Parameter übergeben werden. Es gibt (seit PHP 7) mehrere
    Möglichkeiten, eine beliebige Anzahl von Argumenten zu verwenden
  */
  /*
    Programmiert die Funktion addiere()
    geht dabei nach dem EVA-Prinzip schrittweise vor:
    1. Eingabe (mit eventueller Vorverarbeitung)
    2. Verarbeitung (die gewünschte Bearbeitung)
    3. Ausgabe (mit eventueller Vorprüfung und Anpassung)

    Die Funktion soll entweder einzelne Zahlen als Argumente erhalten
    oder als erstes Argument ein Array mit Zahlen. Im letzten Fall
    wird nur das erste Argument berücksichtigt. Weitere Angaben werden
    ignoriert.
    Die Zahlen sollen addiert werden, wenn es sich um Zahlen handelt.
    Vielleicht sind da is_-Funktionen hilfreichen. Werte in anderen Datentypen
    bleiben unberücksichtigt.
    Das Ergebnis soll unter folgenden Bedingungen zurück gegeben werden:
    1. wenn keine Zahl angegeben wurde: 0
    2. wenn eine Zahl angegeben wurde: die übergebene Zahl
    3. ansonsten das Ergebnis der Addition
  */
  function addiere() {
    $args = func_get_args(); // alte Version, schon bekannt seit der Entstehung von PHP
    // func_get_args() liefert alle übergebenen Argumente als Array zurück
    // func_get_arg(<index>) liefert ein Argument anhand des Index zurück
    // func_num_args() liefert die Anzahl der übergebenen Argumente zurück
    // alle Funktionen sind unabhängig voneinander nutzbar und
    // stehen nur in der Funktion direkt zur Verfügung. Die Nutzung kann
    // nicht in andere Funktionen ausgelagert werden.

    /*
    echo '<pre>';
    var_dump($args);
    echo '</pre>';
    */

    // 1. Eingabe
    if ($args && is_array($args[0])) {
      $args = $args[0];
    }

    $result = 0;

    foreach ($args as $value) {
      if (is_numeric($value)) {
        $result += $value;
      }
    }

    return $result;
  } // addiere

  addiere(1, 3, 7, 90);



?>