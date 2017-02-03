<?php

  $farben = array('rot', 'grün', 'blau');

  function formatListItems(array &$items) {

    foreach ($items as $key => &$item) {
      // $key darf keine Referenz sein (ab PHP 7.0.0)
      $key = '<strong>' . $key . '</strong>';
      $item = '<li>' . $item . '</li>';

    }
  } // formatListItems

  formatListItems($farben);

  echo '<ul>' . implode("\n", $farben) . '</ul>';




?>