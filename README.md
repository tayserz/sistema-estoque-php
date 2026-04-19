# Sistema de Estoque Web - PHP + MySQL

Sistema web desenvolvido em PHP com banco de dados MySQL, criado como projeto acadêmico na ETEC/FATEC.

## Funcionalidades
- Autenticação de usuários com controle de direitos de acesso
- Cadastro, listagem e exclusão de clientes (com endereço e telefone)
- Cadastro, listagem e exclusão de produtos com controle de estoque
- Registro e acompanhamento de pedidos com itens, descontos e valor total
- Cadastro e gerenciamento de usuários do sistema
- Busca de clientes e produtos
- Verificação de estoque
- Login e logout com sessão

## Tecnologias
- PHP (backend)
- MySQL (banco de dados relacional)
- HTML, CSS, JavaScript (frontend)
- XAMPP (ambiente de desenvolvimento)

## Arquitetura
O projeto segue uma separação entre frontend e backend:
- Pasta `backend/` — lógica de negócio e comunicação com o banco
- Arquivos PHP na raiz — telas e formulários do sistema
- Pasta `css/` — estilização das páginas
- Pasta `js/` — scripts do frontend (validações, snackbar, overlay)
- `banco.sql` — script completo para criação do banco de dados

## Banco de Dados
7 tabelas com relacionamentos via chave estrangeira:
- `clientes` → `enderecos`, `telefones`
- `usuarios` → `pedidos`
- `pedidos` → `itemspedido` → `produtos`

## Como executar
1. Clone o repositório
2. Instale o XAMPP
3. Coloque a pasta dentro de `C:/xampp/htdocs/`
4. Importe o arquivo `banco.sql` no phpMyAdmin
5. Acesse `http://localhost/TCC ETEC` no navegador
6. Login padrão: usuário `Sampaio` / senha `1234`