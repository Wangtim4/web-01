<?php
include_once "../base.php";
$table = $_POST['table'];
$DB = new DB($_POST['table']);
    $row = $DB->find(1);
    $row[$table] = $_POST[$table];
    $DB->save($row);

    to('../back.php?do='.$table);