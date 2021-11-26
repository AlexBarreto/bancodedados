
<?php
    define('HOST', 'localhost');
    define('DB','clientes');
    define('USER','root');
    define('PASS','');

    try {
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::
        MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo '<h1>Erro ao conectar...</h1>';
    }

    $sql = $pdo->prepare("SELECT * FROM `cliente`");

    $sql->execute();

    $cliente = $sql->fetchAll();

   
    foreach($cliente as $key => $value) {

        echo $value['nome'];
        echo '<hr>';
    }

?>

