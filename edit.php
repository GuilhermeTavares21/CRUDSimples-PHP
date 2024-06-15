<?php
 require 'config.php';

 $id = $_GET['id'];

 if($id) {
 $sql = $pdo->prepare("SELECT * FROM produtos WHERE id = :id");
 $sql->bindValue(':id',$id);
 $sql->execute();
 $product = $sql->fetch(PDO::FETCH_ASSOC);
 } else {
 }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<section class="cadastro container mx-auto">
    <form class="rounded-xl border mt-10 py-[60px] p-12 shadow-md mx-auto w-[30%] flex flex-col gap-5" method="POST" action="editAction.php">
        <h2 class="text-xl text-center font-bold"> Editar Produto </h2>

        <input value="<?= $product['id']?>" name="id" type="hidden" placeholder="id">
        <label> Nome: </br>
        <input value="<?= $product['name']?>" name="nome" class="text-center bg-gray-100 text-black text-md font-semibold p-[8px] rounded-full" type="text" placeholder="Nome do Produto">
        </label>
        <label> Marca: </br>
        <input value="<?= $product['marca']?>" name="marca" class="text-center bg-gray-100 text-black text-md font-semibold p-[8px] rounded-full" type="text" placeholder="Marca">
        </label>
        <input class="bg-blue-300 text-white text-xl font-semibold p-[8px] rounded-full" type="submit" value="Editar">
        <a class="text-center bg-red-500 text-white text-xl font-semibold p-[8px] rounded-full" href="index.php"> Voltar </a>
    </form>
</section>


<script src="https://cdn.tailwindcss.com"></script>
</body>