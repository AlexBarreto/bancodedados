<?php

$pdo = new PDO('mysql:host=localhost;dbname=clientes', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = $pdo->prepare("SELECT * FROM `cliente` LEFT JOIN `cargos` ON `cliente`.`cargo` = `cargos`.`id`"); //LEFT JOIN e RIGHT JOIN - Diferente no INNER JOIN eles Retornan os dados dos clientes e cargos independente se a relação está vazio.

$sql->execute();

$cliente = $sql->fetchAll();


foreach ($cliente as $key => $value) {
    
    echo $value['nome'];
    echo ' | ';
    echo $value['nomecargo'];
    echo '<hr>';

   
}

//
?>