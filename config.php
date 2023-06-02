<?php

$server = "localhost";
$uname = "root";
$pwd = "";
$dbname = "cs";

try {
    $dsn = "mysql:host=$server;dbname=$dbname";
    $pdo = new PDO($dsn, $uname, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>