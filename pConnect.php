<?php

$host = "127.0.0.1";
$username = "eggricoll";
$password = "123321";
$db = "eggricoll";

$conn = new mysqli($host, $username, $password, $db);
$conn->set_charset("utf8");
if ($conn->connect_error)
    die("SQL Connection Error!");

?>
