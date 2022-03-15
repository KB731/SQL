<?php

$host = 'localhost';
$db = 'exosql';
$user = 'root';
$port = '3306';
$charset = 'utf8mb4';
$dsn = 'mysql:host=$host;dbname=$db;port=$port;charset=$charset';

try {
    $pdo = new \PDO($dsn, $user);
    echo 'Database connexion established !';
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), $e->getCode());
}