<?php

  /*
    Übung: Wetterfrosch
    Du bist der Wetterdienst und sollst vor Frostgefahr warnen

    Erstelle eine Variable, in der Du eine Temperatur speicherst.
    Die Temperatur darfst Du selbst bestimmen.

    Nun erstelle eine Entscheidung:
      - liegt die Temperatur bei 0 °C oder niedriger, gebe "Frost" aus
      - liegt die Temperatur über 0 °C und unter 5 °C, gebe "Frostgefahr" aus
      - liegt die Temperatur bei mindestens 5 °C, gebe "keine Frostgefahr" aus

    WICHTIG:
    - Keine Entscheidungsprüfung soll doppelt erfolgen
    - Alle Bereiche müssen auch im Dezimalbereich vollständig abgedeckt sein
  */

  $temperatur = 4.999;

  if ($temperatur <= 0) {
    echo 'Frost';
  } elseif ($temperatur < 5) {
    echo 'Frostgefahr';
  } else {
    echo 'keine Frostgefahr';
  }



?>