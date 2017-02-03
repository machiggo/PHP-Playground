<?php

  $wochentage = [
    0 => "Montag",
    1 => "Dienstag",
    2 => "Mittwoch",
    3 => "Donnerstag",
    4 => "Freitag",
    5 => "Samstag",
    6 => "Sonntag"
  ];


  /*

    http://php.net/manual/de/array.sorting.php
    Es gibt die verschiedensten Array-Sortier-Funktionen. Sie unterscheiden sich danach,
    was sortiert wird (key oder value) und ob die Kombination/Assoziation zwischen
    key und value erhalten bleibt oder verloren geht.
    Die wichtigsten Funktionen sind:
      asort(), arsort()
      sort(), rsort()
      ksort(), krsort()

    Eine benutzerdefinierte Sortierung kann über die u.sort()-Funktionen umgesetzt werden

    array_multisort()
    asort()
    arsort()
    ksort()
    krsort()
    natcasesort()
    natsort()
    sort()
    rsort()
    uasort()
    uksort()
    usort()
  */

  asort($wochentage);

  echo '<pre>';
  var_dump($wochentage);
  echo '</pre>';


  ksort($wochentage);

  echo '<pre>';
  var_dump($wochentage);
  echo '</pre>';

  sort($wochentage);

  echo '<pre>';
  var_dump($wochentage);
  echo '</pre>';


  $zahlen = [
    1, 10, 30, 50, 5, 7, 6
  ];

  natsort($zahlen);
  echo '<pre>';
  var_dump($wochentage);
  echo '</pre>';



?>