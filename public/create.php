<?php
require_once __DIR__ . '/../src/Product.php';
$product = new Product();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nome' => $_POST['nome'],
        'descricao' => $_POST['descricao'],
        'preco' => $_POST['preco'],
        'estoque' => $_POST['estoque'],
        'categoria' => $_POST['categoria']
    ];

    if ($product->create($data)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao criar produto!";
    }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Adicionar Produto</title>
</head>
<style>
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body {
  background-color: #f4f6f8;
  color: #333;
  padding: 30px;
}

h1 {
  text-align: center;
  margin-bottom: 30px;
  color: #2c3e50;
}

.container {
  max-width: 700px;
  margin: 0 auto;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 10px;
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

form {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

form label {
  font-weight: 600;
  margin-bottom: 5px;
  color: #555;
}

form input,
form textarea,
form select {
  padding: 12px 15px;
  border-radius: 6px;
  border: 1px solid #ccc;
  font-size: 1rem;
  transition: all 0.3s;
}

form input:focus,
form textarea:focus,
form select:focus {
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0,123,255,0.3);
  outline: none;
}

button[type="submit"] {
  background-color: #007bff;
  color: white;
  padding: 12px;
  border: none;
  border-radius: 6px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s;
}

button[type="submit"]:hover {
  background-color: #0056b3;
}

a {
  display: inline-block;
  margin-top: 15px;
  color: #007bff;
  text-decoration: none;
  transition: color 0.3s;
}

a:hover {
  color: #0056b3;
}

@media (max-width: 600px) {
  .container {
    padding: 20px;
  }
}

</style>
<body>
  <h1>Adicionar Produto</h1>
  <form method="post">
    Nome: <input type="text" name="nome" required><br><br>
    Descrição: <textarea name="descricao"></textarea><br><br>
    Preço: <input type="number" step="0.01" name="preco" required><br><br>
    Estoque: <input type="number" name="estoque" required><br><br>
    Categoria: <input type="text" name="categoria"><br><br>
    <button type="submit">Salvar</button>
  </form>
  <br>
  <a href="index.php">Voltar</a>
</body>
</html>
