<?php


  /*
    Aufgabe: Schuhgeschäft

    Du hast ein Schuhgeschäft

    Alle Schuhe haben einheitliche Preise:

      bis einschließlich der Größe 39: 33,50 Euro
      * Rückfrage beim Kunden: bis Größe 40 sollen die Schuhe 33,50 kosten *
      von 40 - 45: 39,50 Euro
      und darüber: 49,50 Euro

    Frage den Nutzer nach seiner Schuhgröße (Variable anlegen) und informiere ihn über den Preis.

    WICHTIG:
    - Diese Aufgabe enthält eine Besonderheit, die es zu erkennen und die Lösung nachzufragen gilt
    - Keine Entscheidungsprüfung soll doppelt erfolgen
    - Alle Bereiche müssen auch bei Zwischengrößen sauber bepreist werden
  */

  $schuhgroesse = 39;
  $preis = 0.0;

  if ($schuhgroesse < 40) {
    $preis = 33.5;
  } elseif ($schuhgroesse <= 45) {
    $preis = 39.5;
  } else {
    $preis = 49.5;
  }

  echo 'Die Schuhe kosten ' . number_format($preis, 2, ',', '.') . ' Euro';





?>