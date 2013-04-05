<!DOCTYPE html>
<html>
  <head>
    <title>Metody magiczne</title>
    <meta charset="UTF-8" />
  </head>
<body>

<?php

require_once 'Osoba.php';

$o= new Osoba('Jan', 'Kowalski', 16);

echo $o->getImie();

echo '<hr />';

echo $o;



?>


</body>
</html>