<?php
require 'config.php';

$id = $_GET['id'];
if($id) {
    $sql = $pdo->prepare("DELETE FROM produtos WHERE id = :id");
    $sql->bindValue(':id',$id);
    $sql->execute();
    header("Location: index.php");
    exit;
} else {
    header("Location: index.php");
    exit;
}