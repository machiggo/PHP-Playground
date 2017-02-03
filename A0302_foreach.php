<?php

  // A0302_foreach.php

  $shirts = [
// $key => $value
    "S" => 15.0,
    "M" => 17.5,
    "L" => 20.0,
    "XL" => 22.5,
    "XXL" => 0.0
  ];

  $shirts = [];

  $output = '';

  foreach ($shirts as $key => $value) {
    $output .= '<option value="' . $key . '">' . $key .
               ' (' . number_format($value, 2, ',', '.') . ' Euro)</option>' . "\n";
  }

  if ($output) {
    $output = '<select name="tshirts" id="tshirts">' . "\n" . $output  . '</select>';
  } else {
    $output = '<div>Wir führen keine T-Shirts</div>';
  }

  echo $output;



?>
<!--
<select name="tshirts" id="tshirts">
  <option value="XL">XL (22,50 Euro)</option>
  <option value="XL">XL (22,50 Euro)</option>
  <option value="XL">XL (22,50 Euro)</option>
</select>
-->