<?php

  $user = [
    "max@max.de" => 'maxx'
  ];

  $email = 'max@max.de';
  $password = 'maxx';

  if (isset($user[$email]) && $user[$email] == $password) {
    echo '<h1>Login erfolgreich</h1>';
  }



?>