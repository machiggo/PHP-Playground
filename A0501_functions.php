<?php

  function noReturn() {
    echo 'Hallo<br>';
  } // noReturn

  var_dump(noReturn());

  function getReturn() {
    return 'Hallo<br>';
  } // getReturn

  $return = getReturn();
  echo $return . ' funktioniert<br>';
  echo getReturn() . ' funktioniert<br>';

  echo '<pre>';
  var_dump(getReturn(), $return);
  echo '</pre>';

  function printLine($text, $doEscape = true) {
    if ($doEscape) {
      echo htmlentities($text) . "<br>\n";
    } else {
      echo $text . "<br>\n";
    }
  } // printLine

  printLine('Beispieltext');
  printLine('<Beispieltext>', true);



?>