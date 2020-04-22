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

    $pdo->beginTransaction();

    $name = "GELATEIRA Transation";
    $desc = "Desc Transation ta l";

    $sql = 'INSERT INTO products (name, `desc`) VALUES (?, ?);';
    $query = $pdo->prepare($sql);
    $query->bindValue(1, $name);
    $query->bindValue(2, $desc);
    $insert = $query->execute();

    if ($insert) {
        $pdo->commit();
        echo "SALvo com sucesso";
    }else{
        $pdo->rollBack();
        echo "ERRO AO SALVAR";
    }




} catch (Throwable | PDOException $e) {
    echo $e->getCode() . "<br>";
    echo $e->getMessage();
}

//var_dump($pdo);

