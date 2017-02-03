<?php

  // A0802_punycode.php

  require_once 'vendors/idna_convert_090/idna_convert.class.php';

  $idna = new idna_convert();

  $email = 'björn@ärger.de';

  /*
    -> => Objektqualifizierungsoperator (OQO)
    dient dazu auf Members von Objekten zuzugreifen, wie Eigenschaften oder Methoden
  */
  $punyEmail = $idna->encode($email);

  echo $punyEmail;

  echo '<pre>';
  var_dump(filter_var($punyEmail, FILTER_VALIDATE_EMAIL),
           filter_var('björn@ärger.de', FILTER_VALIDATE_EMAIL),
           filter_var('ööö@äää.üüü', FILTER_VALIDATE_EMAIL)
           );
  echo '</pre>';



?>