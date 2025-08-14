<?php
require_once __DIR__ . '/../src/Product.php';
$product = new Product();
$produtos = $product->getAll();
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Produtos - Supermercado</title>
</head>
<style>
  /* Reset básico */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
  background-color: #f8f9fa;
  color: #333;
  padding: 20px;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  color: #2c3e50;
  font-size: 2rem;
}

/* Botão */
a.button {
  display: inline-block;
  padding: 12px 25px;
  margin-bottom: 20px;
  background-color: #007bff;
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-weight: 600;
  transition: background-color 0.3s;
}

a.button:hover {
  background-color: #0056b3;
}

/* Tabela */
table {
  width: 100%;
  border-collapse: collapse;
  background-color: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

th, td {
  padding: 15px 20px;
  text-align: left;
}

th {
  background-color: #343a40;
  color: white;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #e9ecef;
}

/* Links de ações */
td a {
  color: #007bff;
  text-decoration: none;
  margin-right: 10px;
  font-weight: 500;
}

td a:hover {
  text-decoration: underline;
}

/* Responsividade */
@media (max-width: 768px) {
  table, thead, tbody, th, td, tr {
    display: block;
  }

  th {
    display: none;
  }

  td {
    padding: 12px;
    position: relative;
    padding-left: 50%;
    border: none;
    border-bottom: 1px solid #ddd;
  }

  td::before {
    content: attr(data-label);
    position: absolute;
    left: 15px;
    font-weight: 600;
    text-transform: uppercase;
    color: #555;
  }
}

</style>
<body>
  <h1>Lista de Produtos</h1>
  <a href="create.php">Adicionar Produto</a>
  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th><th>Nome</th><th>Preço</th><th>Estoque</th><th>Categoria</th><th>Ações</th>
    </tr>
    <?php foreach($produtos as $p): ?>
    <tr>
      <td><?= $p['id'] ?></td>
      <td><?= $p['nome'] ?></td>
      <td><?= $p['preco'] ?></td>
      <td><?= $p['estoque'] ?></td>
      <td><?= $p['categoria'] ?></td>
      <td>
        <a href="edit.php?id=<?= $p['id'] ?>">Editar</a> | 
        <a href="delete.php?id=<?= $p['id'] ?>">Excluir</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
