<?php
require_once 'Database.php';

class Product {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM produtos ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM produtos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO produtos (nome, descricao, preco, estoque, categoria) VALUES (:nome, :descricao, :preco, :estoque, :categoria)");
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $data['id'] = $id;
        $stmt = $this->db->prepare("UPDATE produtos SET nome=:nome, descricao=:descricao, preco=:preco, estoque=:estoque, categoria=:categoria WHERE id=:id");
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM produtos WHERE id=:id");
        return $stmt->execute(['id' => $id]);
    }
}
