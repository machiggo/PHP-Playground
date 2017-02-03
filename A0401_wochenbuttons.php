<?php

  /*
    Textverkettungen

    Normale Textverkettungen werden schnell unübersichtlich.
    Dafür hat PHP nette Funktionen, welche uns da helfen:
    sprintf()/printf()

    sprintf() liefert einen ersetzten String zurück
    printf() gibt den String direkt aus und die Länge des Strings wird zurück gegeben

    Syntax
      (s)printf(<Ersetzungstext>[, <Wert>, ...]);
      http://php.net/manual/de/function.sprintf.php

      Der Ersetzungstext enthält Einfügemarken, muss aber keine enthalten.
      Es müssen so viele Werte angegeben werden, wie auch Einfügemarken
      in dem Ersetzungstext enthalten sind.
      Einfügemarken beginnen stets mit einem %-Zeichen. Sie schließen
      auch stets mit einem Hinweis auf den Datentyp ab, z. B. s für String

      Datentypen:
        s = string
        d = integer
        f = float
        x = hexadezimal

    Dazwischen können verschiedene Umsetzungsanweisungen stehen:

    1. Position des Arguments/Parameters, welche der Funktion übergeben wurde,
       gefolgt von einem $-Zeichen:
       %1$s (2. Argument der Funktion oder 1. Wertargument)
    2. Vorzeichenangabe (+/-)
    3. ein Füllzeichen
       kann ein Leerzeichen oder eine 0 sein
       Andere Füllzeichen müssen durch ein Hochkomma eingeleitet werden, z. B.
       %'a7s
    4. Ausrichtung (links- oder rechtsbündig)
       rechtsbündig ist Standard
       linksbündig wird mit einem --Zeichen (Minus) an dieser Stelle eingestellt.
    5. Längenangabe
       gibt an, wie viele Zeichen mindestens zurückgegeben werden soll
    6. Genauigkeitsangabe
       (Punkt gefolgt von der Anzahl an Nachkommastellen)

  */


  $wochentage = [
    "Montag",
    "Dienstag",
    "Mittwoch",
    "Donnerstag",
    "Freitag"
  ];



  echo '<pre>';
  var_dump($wochentage);
  echo '</pre>';

  // echo $wochentage[0];

  /*
    Stringvariable für die Ausgabe als Leerstring reservieren.
    Auf den Leerstring wird später geprüft, daher ist es wichtig, auch einen
    Leerstring zu deklarieren.
  */
  $html = '';

  /*
    Eine Schleife kann man ansehen, wie eine if-Anweisung, die mehrfach
    hintereinander ausgeführt wird. Sofern das Array $wochentage leer ist,
    wird der Schleifenrumpf nie ausgeführt und somit werden auch keine
    Buttons generiert.
    Der Effekt: $html bleibt ein Leerstring
  */
  foreach ($wochentage as $value) {
    $html .= sprintf('<button type="button" id="%3$s">%3$s</button>',
                      1000,
                      2000,
                      htmlentities($value)
                    );
  }

  /*
    Jetzt überprüfen wir effizient, ob eine Ausgabe, d. h. hier konkret Buttons,
    produziert wurden. Das entscheidet sich nicht nur, ob $wochentage überhaupt
    elemente enthält, sondern berücksichtigt auch, dass in einer Schleife
    Elemente des Arrays ausgeschlossen werden könnten.
  */
  if ($html) {
    // nur, wenn Buttons vorhanden sind, soll auch der Container drumherum
    // ausgegeben werden
    // hier haben wir die Container-Tags in einem räumlich nahen Zusammenhang
    // womit das übersichtlich bleibt und die Gefahr, invalides HTML zu produzieren
    // reduziert wird.
    echo '<nav>' . $html . '</nav>';
  } else {
    // Webuser wollen stets ein Feedback, selbst wenn nichts anzuzeigen ist.
    // das generieren wir hiermit.
    echo '<div>ich habe keine Werte</div>';
  }



?>