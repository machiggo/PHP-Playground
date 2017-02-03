<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <title>Login</title>
  <link rel="stylesheet" href="css/forms.css">
</head>
<body>

<?php

  require_once 'php/validate.inc.php';

  $errors = [];

  if (isset($_POST["form"]) && $_POST["form"] == 'contact') {

    // Validierung
    $errors["test"] = 'test';

    if (empty($_POST["email"])) {
      $errors["email"] = 'Bitte geben Sie Ihre Email-Adresse an';
    } elseif (!checkEmail($_POST["email"])) {
      $errors["email"] = 'Bitte geben Sie Ihre echte Email-Adresse an';
    }

    if ($errors) {
      $errors["error"] = 'Es sind Fehler aufgetreten, bitte überprüfen Sie die Angaben';
      include 'php/contact.form.php';
    } else {
      // Daten verwalten

      echo 'Danke für Ihre persönliche Daten';

    }

  } else {
    // leeres Formular
    include 'php/contact.form.php';
  }

?>

</body>
</html>