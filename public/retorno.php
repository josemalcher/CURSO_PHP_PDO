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

    //$sql = 'INSERT INTO products (name, `desc`) VALUES (?, ?);';
    $query = $pdo->prepare($sql);
    $query->bindValue(1, $name);
    $query->bindValue(2, $desc);

    echo $pdo->lastInsertId(); // RETORNA o ultimo ID inserido

    // SELECT * FROM
    echo $query->rowCount(); // RETORNA total de resultados da query / Total de registros

    //REtora todos os drivers que o server pode trabalhar
    var_dump(PDO::getAvailableDrivers());


} catch (Throwable | PDOException $e) {
    echo $e->getCode() . "<br>";
    echo $e->getMessage();
}

var_dump($pdo);

