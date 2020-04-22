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

    /*
        $name = "TV TIpo 2 update";
        $desc = "SMART testes update";

        $sql = "INSERT INTO products (name, `desc`) VALUES ('{$name}', '{$desc}');";
        //INSERT INTO especializa_ti_phppdo.products (id, name, `desc`) VALUES (1, 'TV', 'Smart TV');
        //$insert = $pdo->exec($sql);
        //var_dump($insert);

        $sql_update = "UPDATE products SET name = '{$name}', `desc` = '{$desc}' WHERE id = 1;";
        //UPDATE products SET name = 'Gravador', `desc` = 'PortÃ¡til testes' WHERE id = 1;
        $update = $pdo->exec($sql_update);
        var_dump($update);
    */

    $name = "TV QUERY Teste";
    $desc = "SMART query tesste";
    $sql = "INSERT INTO products (name, `desc`) VALUES ('{$name}', '{$desc}');";

    /*
    $query = $pdo->query("SELECT * FROM products");
    $products = $query->fetchAll();
    foreach ($products as $product) :
        echo $product['name'] . '<br>';
    endforeach;
    */
    $insert = $pdo->query($sql);
    var_dump($insert);
    //object(PDOStatement)#2 (1) {
    // ["queryString"]=> string(84) "INSERT INTO products (name, `desc`) VALUES ('TV QUERY Teste', 'SMART query tesste');"
    // } object(PDO)#1 (0) { }


} catch (Throwable | PDOException $e) {
    echo $e->getCode() . "<br>";
    echo $e->getMessage();
}

var_dump($pdo);

