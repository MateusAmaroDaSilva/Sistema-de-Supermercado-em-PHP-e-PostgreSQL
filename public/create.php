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
  background-color: #f8f9fa;
  color: #333;
  padding: 20px;
}

.container {
  max-width: 900px;
  margin: 0 auto;
}

.modal {
  display: none; 
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.5);
  justify-content: center;
  align-items: center;
  z-index: 1000;
}

.modal-content {
  background-color: #fff;
  border-radius: 8px;
  padding: 25px;
  width: 90%;
  max-width: 600px;
  box-shadow: 0 5px 20px rgba(0,0,0,0.2);
  position: relative;
}

.modal-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.modal-header h2 {
  font-size: 1.5rem;
  color: #2c3e50;
}

.close-btn {
  background: none;
  border: none;
  font-size: 1.2rem;
  cursor: pointer;
  color: #888;
  transition: color 0.3s;
}

.close-btn:hover {
  color: #e74c3c;
}

.product-form .form-row {
  display: flex;
  gap: 15px;
  margin-bottom: 15px;
}

.product-form .form-group {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.product-form label {
  margin-bottom: 5px;
  font-weight: 600;
  color: #555;
}

.product-form input,
.product-form select,
.product-form textarea {
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  font-size: 0.95rem;
  transition: border-color 0.3s, box-shadow 0.3s;
}

.product-form input:focus,
.product-form select:focus,
.product-form textarea:focus {
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0,123,255,0.3);
  outline: none;
}

.form-actions {
  display: flex;
  justify-content: flex-end;
  gap: 10px;
  margin-top: 20px;
}

.btn {
  padding: 10px 20px;
  border-radius: 5px;
  font-weight: 600;
  cursor: pointer;
  border: none;
  transition: background-color 0.3s;
}

.btn-primary {
  background-color: #007bff;
  color: white;
}

.btn-primary:hover {
  background-color: #0056b3;
}

.btn-secondary {
  background-color: #6c757d;
  color: white;
}

.btn-secondary:hover {
  background-color: #495057;
}

.btn-danger {
  background-color: #e74c3c;
  color: white;
}

.btn-danger:hover {
  background-color: #c0392b;
}

.toast {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: #2c3e50;
  color: white;
  padding: 15px 25px;
  border-radius: 8px;
  display: none;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  z-index: 2000;
}

.toast.show {
  display: block;
  animation: slideIn 0.5s ease forwards;
}

@keyframes slideIn {
  from { transform: translateX(100%); opacity: 0; }
  to { transform: translateX(0); opacity: 1; }
}

@media (max-width: 600px) {
  .product-form .form-row {
    flex-direction: column;
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
