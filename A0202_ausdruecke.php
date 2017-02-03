<?php

  /*
    Ein Ausdruck ist eine Anweisung an php, diese auszuwerten und mit dem Ergebnis
    weiter zu arbeiten.

    5 => ist Zahl, Datentyp: Integer, Wert: 5
    $zahl = 7 * 3 + 4;

    Reihenfolge in der Verarbeitung = von rechts nach links

    Ein Ausdruck liefert immer einen Wert in einem Datentyp zurück.
    Ein Ausdruck kann überall verwendet werden. Überall dort, wo ein Wert
    benötigt/erwartet wird, kann ein einfacher, zusammengesetzter oder komplexer Ausdruck
    verwendet werden.

  */

  // $zahl = 7 * 3 + 4 + mt_rand(3 + 4, 7 * 5);
  $zahl = 7 * 3 + 4 + mt_rand(3 + 4, mt_rand(35, 80));
  var_dump($zahl);

  if ($megazahl = 4) {
    var_dump($megazahl);
  } // if






?>