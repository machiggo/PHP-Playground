<?php

  declare(strict_types = 1);

  /* function formatScoreInfo(string $username, int ...$scores) : ?string {
     ab PHP7.1 kann man definieren, dass der Datentyp entweder NULL oder
     ein spezifischer
  */
  function formatScoreInfo(string $username, int ...$scores) : string {
    $result = '';
    foreach ($scores as $score) {
      $result .= sprintf('<li>%s</li>', (string)$score);
    }
    if ($result) {
      $result = '<ol>' . $result . '</ol>';
    }
    return '<h1>' . htmlentities($username) . '</h1>' . $result;
  } // formatScoreInfo

  echo formatScoreInfo('Heinz Zocker', 37, 678);



?>