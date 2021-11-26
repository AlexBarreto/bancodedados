<?php

    $pdo = new PDO('mysql:host=localhost;dbname=clientes','root','');


        $sql = $pdo->prepare("INSERT INTO `clientes` WHERE emal LIKE '%g%'");//LIKE utilizado para pesquisar letra ou palavra chave no banco de dados com paramentros -> %iniciaCom, %temPeloMenos%, finalizaCom%

        $sql->execute();

        $emails = $sql->fetchAll();

        print_r($emails);


//INSERINDO INFORMAÇÃO AO BANCO DE DADOS MYSQL
?>