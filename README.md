# API RESTful com PHP Laravel e MySQL

Este projeto é uma API RESTful desenvolvida com PHP e Laravel para fornecer e receber informações de um banco de dados MySQL. A API inclui autenticação JWT para segurança e está documentada usando o Swagger.

### Ferramentas
* PHP 8.0
* Composer
* Laravel 11
  
### Instalação
Siga os passos abaixo para configurar e executar o projeto em sua máquina local.
### 1. Clonar o Repositório
```
git clone https://github.com/am-matheusoliveira/desafio-api-restful.git
cd desafio-api-restful
```
### 2. Instalar Dependências
```
composer install
```
### 3. Configurar o Arquivo `.env`
Crie um arquivo `.env` a partir do `.env.example` e configure as variáveis de ambiente.</br>
```
cp .env.example .env
```
Edite o arquivo `.env` para incluir suas configurações de banco de dados, use este exemplo:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seu_banco_de_dados - para este aplicativo o nome é: database_vagas
DB_USERNAME=seu_usuario - para este aplicativo o usuário é: root
DB_PASSWORD=sua_senha - para este aplicativo a senha é: 
```
### 4. Gerar a Chave da Aplicação
```
php artisan key:generate
```

### 5. Executar o Servidor de Desenvolvimento
Caso não esteja usando um Servidor Web como o Apache ou Nginx, execute o comando:
```
php artisan serve
```
A aplicação estará disponível em `http://localhost:8000`.<br>
Ou `http://localhost/desafio-api-restful/`, caso esteja em um servidor web apache ou nginx.
