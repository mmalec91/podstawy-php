<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="UTF-8" />
  </head>
<body>

<?php

require_once 'Jan/Math/Calculator.php';

use Jan\Math\Calculator;

echo '3 + 11 = ';
echo Calculator::add(3, 11);

?>

<hr />

<?php

echo '7 * 5 = ';
echo Calculator::multiply(7, 5);

?>


</body>
</html>