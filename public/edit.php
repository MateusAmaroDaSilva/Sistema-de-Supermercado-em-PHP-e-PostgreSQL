<?php
require_once __DIR__ . '/../src/Product.php';
$product = new Product();

if (!isset($_GET['id'])) {
    die("ID não informado");
}

$produto = $product->getById($_GET['id']);

if (!$produto) {
    die("Produto não encontrado!");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'nome' => $_POST['nome'],
        'descricao' => $_POST['descricao'],
        'preco' => $_POST['preco'],
        'estoque' => $_POST['estoque'],
        'categoria' => $_POST['categoria']
    ];

    if ($product->update($_GET['id'], $data)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar produto!";
    }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Editar Produto</title>
</head>
<body>
  <h1>Editar Produto</h1>
  <form method="post">
    Nome: <input type="text" name="nome" value="<?= $produto['nome'] ?>" required><br><br>
    Descrição: <textarea name="descricao"><?= $produto['descricao'] ?></textarea><br><br>
    Preço: <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>" required><br><br>
    Estoque: <input type="number" name="estoque" value="<?= $produto['estoque'] ?>" required><br><br>
    Categoria: <input type="text" name="categoria" value="<?= $produto['categoria'] ?>"><br><br>
    <button type="submit">Salvar Alterações</button>
  </form>
  <br>
  <a href="index.php">Voltar</a>
</body>
</html>
