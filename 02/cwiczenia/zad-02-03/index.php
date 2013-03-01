<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php

require_once 'Jan/String/HtmlConverter.php';

use Jan\String\HtmlConverter;

$html = new HtmlConverter();
$html->setString('ala ma kota');
echo $html->toUl();

?>

</body>
</html>