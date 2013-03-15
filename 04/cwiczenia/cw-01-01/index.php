<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8"/>
</head>
<body>

<?php

require_once 'Gajdaw/Arrays/Renderer.php';
require_once 'Gajdaw/File/Txt/Reader.php';

use Gajdaw\Arrays\Renderer;
use Gajdaw\File\Txt\Reader;

$reader = new Reader();
$renderer = new Renderer();
$renderer->setReader($reader);

echo $renderer->renderUl('dane/auta.txt');

?>

</body>
</html>
