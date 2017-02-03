<?php

  require_once 'php/classes/Konto.class.php';

  $konto = new Konto('456258956', 'Andreas Joos', 100.0, false);

  $konto->einzahlen(850);

  echo '<pre>';
  var_dump($konto);
  echo '</pre>';



?>