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

require_once 'Ania/Txt/MultiplicationTable.php';
use Ania\Txt\MultiplicationTable;

$t = new MultiplicationTable();
$t->setColumns(5);
$t->setRows(8);
echo $t->render();

?>

</body>
</html>
