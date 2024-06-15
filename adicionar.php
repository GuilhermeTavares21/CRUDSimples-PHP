<?php

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<section class="cadastro container mx-auto">
    <form class=" rounded-xl border mt-10 py-[60px] p-12 shadow-md mx-auto w-[90%] sm:w-[70%] md:w-[40%] lg:w-[30%] flex flex-col gap-5" method="POST" action="addAction.php">
        <label name="nome"> Cadastrar Produto </label>
        <input name="nome" class="bg-gray-100 text-black text-md font-semibold p-[8px] rounded-full" type="text" placeholder="Nome do Produto">
        <input name="marca" class="bg-gray-100 text-black text-md font-semibold p-[8px] rounded-full" type="text" placeholder="Marca">
        <input class="bg-blue-300 text-white text-xl font-semibold p-[8px] rounded-full" type="submit" value="Cadastrar">
        <a class="text-center bg-red-500 text-white text-xl font-semibold p-[8px] rounded-full" href="index.php"> Voltar </a>
    </form>
</section>


<script src="https://cdn.tailwindcss.com"></script>
</body>