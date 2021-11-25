<?php

$pdo = new PDO('mysql:host=localhost;dbname=modulo_bancodedados', 'root', '');
/*
$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id=?");

$sql->execute(array($_GET['categoria_id']));

$info = $sql->fetchAll();

foreach ($info as $key => $value) {

    echo 'Titulo: ' . $value['titulo'];
    echo '<br/>';
    echo 'Conteudo: ' . $value['conteudo'];
    echo '<hr>';
}
*/

/*

$sql = $pdo->prepare("SELECT * FROM categoria");

$sql->execute();

$info = $sql->fetchAll();


foreach ($info as $key => $value) {

    $categoria_id = $value['id'];
    echo 'Categoria_id: ' . $value['id'];
    echo '<br/>';
    echo 'Categoria: ' . $value['nomes'];
    echo '<hr>';

    $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
    $sql->execute();
    $info_ = $sql->fetchAll();

    foreach($info_ as $key =>$value){

        echo 'Titulo: ' . $value['titulo'];
        echo '<br/>';
        echo 'Conteudo: ' . $value['conteudo'];
        echo '<hr>';

    }
}
*/

$sql = $pdo->prepare("SELECT `posts`.*,`categoria`.*, `posts`.`id` AS `posts_id` FROM `posts` INNER JOIN `categoria` ON `posts`.`categoria_id` = `categoria`.`id`");

$sql->execute();

$info = $sql->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($info);
echo '</pre>';

?>