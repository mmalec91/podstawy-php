<!DOCTYPE html>
<html>
  <head>
    <title>Metody magiczne</title>
    <meta charset="UTF-8" />
  </head>
<body>

<?php

require_once 'Osoba.php';

$obj = new Osoba('Jan', 'Kowalski', 16);

echo '<hr />';

var_export($obj);

echo '<hr />';

eval('$x = ' . var_export($obj, true) . ';');

echo $x;

?>

</body>
</html>