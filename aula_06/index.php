<?php

$pdo = new PDO('mysql:host=localhost;dbname=clientes', 'root', '');

$sql = $pdo->prepare("SELECT * FROM `cliente` GROUP BY  cargo LIMIT 1"); //ORDER BY ASC OU DESC OU ORDEM ALFABETICA

$sql->execute();

$cliente = $sql->fetchAll();


foreach ($cliente as $key => $value) {
    
    echo $value['nome'];
    echo '<hr>';

   
}
?>