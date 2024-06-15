<?php
require 'config.php';

$id = $_POST['id'];
$name = $_POST['nome'];
$marca = $_POST['marca'];

if ($id && $name && $marca) {
$sql = $pdo->prepare("UPDATE produtos SET name = :name, marca = :marca WHERE id = :id");
$sql->bindValue(':name', $name);
$sql->bindValue(':marca', $marca);
$sql->bindValue(':id', $id);
$sql->execute();
header('Location: index.php');
exit;

} else {
    header('Location: index.php');
    exit;
}