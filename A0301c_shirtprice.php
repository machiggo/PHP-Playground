<?php

  /*
    Aufgabe: Shirt-Price

    Wir haben einen T-Shirt-Shop
    Jede Größe hat seinen eigenen Preis
    Es gibt nur die Größen S, M, L, XL

    Frage den Nutzer, welche Größe er hat

    Die Größen haben folgende Preise:
      S : 15,00 Euro
      M : 17,50 Euro
      L : 20,00 Euro
      XL : 22,50 Euro

    Entscheide nach der eingegebenen Kleidergröße. Informiere den Kunden
    über den Preis.
    Sofern keine der verfügbaren Kleidergrößen angegeben wurde, soll
    ausgegeben werden:
      Die Größe führen wir nicht.

    WICHTIG:
    - Keine Entscheidungsprüfung soll doppelt erfolgen
  */

  $shirts = [
    "S" => 15.0,
    "M" => 17.5,
    "L" => 20.0,
    "XL" => 22.5,
    "XXL" => 0.0
  ];

  $groesse = 'XXL';

  // if (isset($shirts[$groesse])) {
  if (!empty($shirts[$groesse])) {
    echo 'Das Shirt kostet ' . number_format($shirts[$groesse], 2, ',', '.') . ' Euro';
  } else {
    echo 'Die Größe führen wir nicht.';
  }







?>