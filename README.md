# SuperMercado

Sistema de gestão de produtos para supermercados, desenvolvido em **PHP** com **PostgreSQL**. Permite cadastrar, editar, listar e deletar produtos, além de filtrar por categorias.

## Funcionalidades

- CRUD completo de produtos (Create, Read, Update, Delete)
- Filtro por categoria e busca por nome/código de barras
- Interface responsiva e moderna
- Uso de PDO para interação segura com o banco de dados
- Estrutura organizada em `public/`, `src/` e `config/`

## Tecnologias

- PHP
- PostgreSQL
- HTML5 & CSS3
- JavaScript (básico para interações no front-end)

## Estrutura do Projeto
```bash
├─ public/ 
│ ├─ index.php
│ ├─ create.php
│ ├─ edit.php
│ ├─ delete.php
│ ├─ assets/ 
│ └─ images/
├─ src/ 
│ ├─ Product.php
│ └─ Database.php
├─ config/
│ └─ config.php
└─ README.md
```

---

## Como Usar
1. **Clone o repositório**:
   ```bash
   git clone https://github.com/SEU-USERNAME/SuperMercado.git
   ```
2. Configure o banco de dados no arquivo `config/config.php`.
3. Inicie o servidor PHP:
   ```bash
   php -S localhost:8000 -t public
   ```
4. Acesse `http://localhost:8000` no navegador.

---

## Conclusão
O **SuperMercado** é um sistema completo de gestão de produtos, com CRUD, filtro por categoria e interface amigável. Desenvolvido com boas práticas em PHP e PostgreSQL, ele demonstra uma estrutura organizada e preparada para manutenção e expansão, servindo como excelente referência para projetos web profissionais.
