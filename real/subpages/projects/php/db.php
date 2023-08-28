<?php

$host = "localhost";
$dbname = "portfolio";
$username = "portfolio_RB";
$password = "DATAb@se-Rick";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Verbinding mislukt: " . $exception->getMessage();
}


