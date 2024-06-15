<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM produtos");
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
} else {
    echo 'nenhum item encontrado!';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body class="container mx-auto" >
    <section class="AddButton container mx-auto my-7">
        <a href="adicionar.php" class="bg-blue-300 text-white text-xl font-semibold p-[10px] rounded-full">Adicionar Produto</a>
    </section>
    <section class="tabela container mx-auto">
    <table class="table-auto" class="w-[90%] sm:w-[80%] md:w-[60%] lg:w-[50%]">
  <thead class="bg-slate-300">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Marca</th>
      <th>Editar/Excluir</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($lista as $produto): ?>
        <tr class="border text-center">
            <td><?php echo $produto['id']; ?></td>
            <td><?php echo $produto['name']; ?></td>
            <td><?php echo $produto['marca']; ?></td>
            <td class="py-2">
                <div class="">
                <a class="bg-blue-300 text-white text-md font-semibold p-[4px] rounded-full mr-1" href="edit.php?id=<?=$produto['id']?>"> Editar </a>
                <a class="bg-red-500 text-white text-md font-semibold p-[4px] rounded-full" href="removeAction.php?id=<?=$produto['id']?>" onclick="return confirm('Tem certeza que deseja excluir? ')"> Excluir </a>
                </div>
            </td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </section>
    


<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>