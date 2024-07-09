<?php


$host = "localhost";
$db = "ieee";
$charset = "utf8mb4";
$dsn = "mysql:host=$host;dbname=$db;chaset=$charset";
$user = "root";
$pass = "";
$opition = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_CASE => PDO::CASE_NATURAL,
    PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING
];


try {
    $pdo = new PDO($dsn, $user, $pass, $opition);
    echo "Connection Success";
} catch (Exception $e) {
    echo $e;
}
