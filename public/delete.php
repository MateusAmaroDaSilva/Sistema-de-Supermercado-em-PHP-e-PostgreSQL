<?php
require_once __DIR__ . '/../src/Product.php';
$product = new Product();

if (!isset($_GET['id'])) {
    die("ID não informado");
}

if ($product->delete($_GET['id'])) {
    header("Location: index.php");
    exit;
} else {
    echo "Erro ao excluir produto!";
}
