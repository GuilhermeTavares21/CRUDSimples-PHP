<?php
require('config.php');

$nome = $_POST['nome'];
$marca = $_POST['marca'];



if ( $nome && $marca ) {
    $sql = $pdo->prepare("INSERT INTO produtos (name, marca) VALUES (:name, :marca)");
    $sql->bindValue(':name', $nome);
    $sql->bindValue(':marca', $marca);
    $sql->execute();


    header('Location: index.php');
    exit;

} else {
    header('Location: adicionar.php');
    exit;
}
// header('Location: adicionar.php');