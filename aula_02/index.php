<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_banco','root','');


    if(isset($_POST['acao'])){

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $data = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?,?,?)");
        $sql->execute(array($nome,$sobrenome,$data));
    }

//INSERINDO INFORMAÇÃO AO BANCO DE DADOS
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


