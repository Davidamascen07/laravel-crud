
# 📦 CRUD de Produtos com Laravel

Este projeto demonstra como criar um sistema **CRUD (Create, Read, Update, Delete)** completo no Laravel para gerenciar produtos. É ideal para quem está aprendendo Laravel e deseja entender o funcionamento de migrations, models, controllers, rotas e views.

---

## 🚀 Funcionalidades

- ✅ Listar produtos
- ➕ Cadastrar novo produto
- 📝 Editar produto existente
- ❌ Excluir produto
- 🔍 Visualizar detalhes de um produto

---

## ⚙️ Tecnologias

- Laravel 12.x
- PHP 8.x
- SQLite (ou MySQL)
- Blade (sistema de templates do Laravel)

---

## 🛠️ Etapas de Desenvolvimento

### 1. Migration: Criação da tabela `produtos`

Uma migration foi criada para definir a estrutura da tabela `produtos`, com campos como:

- `id`
- `nome`
- `preco`
- `quantidade`
- `timestamps`

```bash
php artisan make:model Produto -m
```

Após editar a migration, execute:

```bash
php artisan migrate
```

---

### 2. Model: `Produto.php`

O model representa a tabela `produtos` no banco de dados e permite interações usando o Eloquent ORM.

---

### 3. Controller: `ProdutoController`

Controlador criado com todos os métodos do CRUD:

- `index` – Lista os produtos
- `create` – Exibe formulário de criação
- `store` – Salva novo produto
- `edit` – Exibe formulário de edição
- `update` – Atualiza o produto
- `destroy` – Exclui o produto
- `show` – Detalhes do produto

```bash
php artisan make:controller ProdutoController --resource
```

---

### 4. Rotas

As rotas foram adicionadas em `routes/web.php`:

```php
use App\Http\Controllers\ProdutoController;

Route::resource('/produtos', ProdutoController::class);
```

---

### 5. Views Blade

Views criadas para exibir e interagir com os dados:

- `index.blade.php` – Lista de produtos
- `create.blade.php` – Formulário de criação
- `edit.blade.php` – Formulário de edição
- `show.blade.php` – Detalhes do produto
- `app.blade.php` – Layout base

---

## ▶️ Como rodar o projeto

1. Clone ou copie o projeto para seu servidor local (ex: `htdocs` do XAMPP)
2. Navegue até a pasta do projeto pelo terminal
3. Instale as dependências do Laravel:

```bash
composer install
```

4. Copie o arquivo `.env` e gere a chave da aplicação:

```bash
cp .env.example .env
php artisan key:generate
```

5. Configure o banco no `.env` (SQLite ou MySQL)
6. Execute as migrations:

```bash
php artisan migrate
```

7. Inicie o servidor:

```bash
php artisan serve
```

8. Acesse no navegador:

```
http://localhost:8000/produtos
```

---

## ✨ Resultado

Você poderá:

- Criar, visualizar, editar e excluir produtos via interface web
- Expandir esse CRUD para gerenciar outros recursos do sistema

---

## 📝 Licença

Este projeto é open-source e pode ser adaptado livremente para fins de estudo e desenvolvimento pessoal.

---


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


