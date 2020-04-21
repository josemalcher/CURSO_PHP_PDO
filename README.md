# CURSO PHP PDO

https://academy.especializati.com.br/curso/php-pdo

APRENDA A TRABALHAR COM BANCO DE DADOS NO PHP, UTILIZANDO A FAMOSA E SEGURA INTERFACE PDO.

## <a name="indice">Índice</a>

1. [01 - Apresentação do Curso de PHP PDO](#parte1)     
2. [02 - Ferramentas Necessárias](#parte2)     
3. [03 - Configurando o Docker com Laradock](#parte3)     
4. [04 - Multiplos Projetos com Laradock](#parte4)     
5. [01 - O que é PDO](#parte5)     
6. [02 - Conexão Banco de Dados com PHP Usando PDO](#parte6)     
7. [03 - Tratamento de Erros PHP PDO](#parte7)     
8. [04 - PDO exec05 - PDO query](#parte8)     
9. [06 - PDO prepare bindValue](#parte9)     
10. [08 - PHP PDO Transaction](#parte10)     
11. [09 - Utilidades do PDO](#parte11)     
---


## <a name="parte1">1 - 01 - Apresentação do Curso de PHP PDO</a>



[Voltar ao Índice](#indice)

---


## <a name="parte2">2 - 02 - Ferramentas Necessárias</a>



[Voltar ao Índice](#indice)

---


## <a name="parte3">3 - 03 - Configurando o Docker com Laradock</a>



[Voltar ao Índice](#indice)

---


## <a name="parte4">4 - 04 - Multiplos Projetos com Laradock</a>



[Voltar ao Índice](#indice)

---


## <a name="parte5">5 - 01 - O que é PDO</a>



[Voltar ao Índice](#indice)

---


## <a name="parte6">6 - 02 - Conexão Banco de Dados com PHP Usando PDO</a>

- https://www.php.net/manual/pt_BR/pdo.connections.php

```php
<?php

$dsn = "mysql";
$host = "localhost";
$database = "especializa_ti_phppdo";
$user = "root";
$pass = "";
$port = 3306;

$pdo = new PDO("{$dsn}:host={$host};port={$port};dbname={$database}", $user, $pass);

var_dump($pdo);


```

[Voltar ao Índice](#indice)

---


## <a name="parte7">7 - 03 - Tratamento de Erros PHP PDO</a>

```php
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

} catch (Throwable | PDOException $e) {
    echo $e->getCode() . "<br>";
    echo $e->getMessage();
}

var_dump($pdo);


```

[Voltar ao Índice](#indice)

---


## <a name="parte8">8 - 04 - PDO exec05 - PDO query</a>



[Voltar ao Índice](#indice)

---


## <a name="parte9">9 - 06 - PDO prepare bindValue</a>



[Voltar ao Índice](#indice)

---


## <a name="parte10">10 - 08 - PHP PDO Transaction</a>



[Voltar ao Índice](#indice)

---


## <a name="parte11">11 - 09 - Utilidades do PDO</a>



[Voltar ao Índice](#indice)

---

