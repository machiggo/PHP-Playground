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

  // Steuerskript (Affenformular)

  // Wurde das Formular abgeschickt und ist es auch das richtige
  // für dieses Skript
  $errors = [];
  
  if (isset($_POST["user"]) && $_POST["user"] == 'loginform') {
    // Formular wurde abgeschickt
    // jetzt mit der Validierung beginnen


      if (empty($_POST["email"])) { // required-Prüfung
        $errors["email"] = 'Bitte geben Sie Ihre Email an.';
      }

      if (empty($_POST["password"])) {
        $errors["password"] = 'Bitte geben Sie Ihr Passwort an.';
      }

    if ($errors) {
      // es sind Fehler aufgetreten

      // allgemeine Fehlermeldung einbinden
      $errors["error"] = 'Ihre Anmeldung kann nicht verarbeitet werden. Bitte überprüfen Sie Ihre Angaben';
      // Fehlermeldungen und eingegebene Werte, werden direkt im Formular eingebunden.
      // echo '<h1>Fehler sind aufgetreten</h1>';
      include 'php/login.form.php';
    } else {
      // es ist alles in Ordnung
      // echo '<h1>Alles ist in Ordnung</h1>';
      $user = [
        "admin@admin.de" => 'irgendwas'
      ];
      if (isset($user[$_POST["email"]]) && $user[$_POST["email"]] == $_POST["password"]) {
        echo '<h2>Herzlich Willkommen</h2>';
      } else {
        $errors["error"] = 'Email und Passwort stimmen nicht überein. Bitte versuchen Sie es erneut!';
        include 'php/login.form.php';
      }
    }

  } else {
    // Formular wurde noch nicht angezeigt und wird an den Browser ausgegeben
    // echo '<h1>Frisches Formular</h1>';
    include 'php/login.form.php';
  }



?>

</body>
</html>