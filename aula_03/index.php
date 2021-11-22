<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_banco','root','');


    if(isset($_POST['acao'])){

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $data = date('Y-m-d H:i:s');

        $id = 8;

        $sql_insert = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?,?,?)");
        $sql_update = $pdo->prepare("UPDATE `clientes` SET nome='Alex', sobrenome = 'Ferreira' WHERE id=$id or nome='Alan'");
        $sql_insert->execute(array($nome,$sobrenome,$data));
        $sql_update->execute();
    }


?>

<!DOCTYPE html>

<head>
</head>
<body>
    <form method = "post">
        <input type="text" name = "nome" require>
        <input type ="text" name = "sobrenome" require>
        <input type ="submit" name = "acao" value = "Enviar">
    </form>
</body>
