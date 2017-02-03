<?php

  // A0602_namensraeume.php

  // globale Variablen sind nur im globalen Namensraum sichtbar, d. h. auch les- und
  // nutzbar
  $global = 'hier steht was drin';
  $kaffee = '<br>Kaffee<br>';

  var_dump($_GET);

  function tueWas() {
    /*
      global dient dazu, eine global deklarierte Variable im lokalen Namensraum
      zur Verfügung zu stellen
    */
    global $global, $kaffee;
    echo $global, $kaffee;
    $lokal = 'ein Kaffee und ein Kaffeestückchen';
    echo $lokal;
    var_dump($_GET);

  } // tueWas

  tueWas();
  echo $lokal;

  /*
    PHP stellt uns sog. superglobale Variablen zur Verfügung.
    Diese werden von PHP bereit gestellt und können von uns nicht
    erstellt werden. Meist dienen superglobale Variablen dazu,
    um Daten vom Browser oder vom Server zur Verfügung zu stellen.

    Superglobale Variablen beginnen stets mit einem Unterstrich, gefolgt
    von einem Namen in Großbuchstaben, wie z. B. $_GET

    Superglobale Variablen sind in allen Namensräumen sichtbar.

    Wird eine Superglobale mit unset() gelöscht, dann muss erst der
    Webserver neu gestartet werden, damit die Variable wieder bereit
    gestellt wird.
  */




?>