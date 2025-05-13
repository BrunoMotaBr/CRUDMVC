# 📦 Projeto CRUD PHP com MVC

Este projeto é um sistema de cadastro simples desenvolvido em **PHP puro**, implementando as operações **CRUD** (Create, Read, Update e Delete) e estruturado no padrão **MVC (Model-View-Controller)**.

## 📌 Tecnologias Utilizadas

- PHP 8.x
- MySQL
- HTML5
- CSS3
- Bootstrap 5 (opcional)
- XAMPP (para ambiente local)

## 🎯 Funcionalidades

✔️ Cadastrar novos registros  
✔️ Listar registros cadastrados  
✔️ Editar informações de registros existentes  
✔️ Excluir registros  

## 🗂️ Estrutura de Diretórios

/meu-projeto/
├── /factory/ # Configurações do banco de dados
├── /control/ # Controladores responsáveis pela lógica
├── /model/ # Modelos responsáveis pela comunicação com o banco
├── /view/ # Telas do sistema (HTML)
├── index.php # Arquivo inicial do projeto

markdown
Copiar
Editar

## 📖 Como Funciona o Padrão MVC no Projeto

- **Model:** responsável pela conexão com o banco e execução das consultas SQL.  
- **View:** arquivos responsáveis pela exibição da interface para o usuário.  
- **Controller:** responsável por receber as ações do usuário, tratar os dados e chamar os Models e as Views necessárias.

## 📥 Como Instalar e Rodar o Projeto

1. Clone este repositório:
   ```bash
   git clone https://github.com/BrunoMotaBr/CRUDMVC.git
Copie a pasta para o diretório htdocs do XAMPP.

Crie um banco de dados no phpMyAdmin e importe o arquivo banco.sql disponível no projeto.

Altere as informações de conexão no arquivo /config/Database.php:

php
Copiar
Editar
private $host = 'localhost';
private $dbname = 'nome_do_banco';
private $username = 'root';
private $password = '';
Inicie o Apache e o MySQL pelo painel do XAMPP.

Acesse o projeto no navegador:

perl
Copiar
Editar
http://localhost/nome-do-projeto/


💻 Feito por Seu Nome

yaml
Copiar
Editar

---
