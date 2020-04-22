<?php

$dsn = "mysql";
$host = "localhost";
$database = "especializa_ti_phppdo";
$user = "root";
$pass = "";
$port = 3306;

try {
    $pdo = new PDO("{$dsn}:host={$host};port={$port};dbname={$database}", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $name = "GELATEIRA 2 PREPARE";
    $desc = "Descrição 2 Preparada ta l";

    $sql = 'INSERT INTO products (name, `desc`) VALUES (?, ?);';
    $query = $pdo->prepare($sql);
    $query->bindValue(1, $name);
    $query->bindValue(2, $desc);

    var_dump($query->execute()); // bool(true)



} catch (Throwable | PDOException $e) {
    echo $e->getCode() . "<br>";
    echo $e->getMessage();
}

var_dump($pdo);

