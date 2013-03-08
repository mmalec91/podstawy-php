<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8"/>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            text-align: right;
            padding: 2px 10px;
        }
        th {
            border: 1px solid black;
            background: black;
            color: white;
        }
    </style>
</head>
<body>

<?php

require_once 'Ala/Html/Powers.php';
use Ala\Html\Powers;

$t = new Powers();
$t->setA(10);
$t->setN(5);
echo $t->render();

?>

</body>
</html>
