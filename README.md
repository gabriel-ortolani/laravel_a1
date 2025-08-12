## Requisitos
*PHP 8.2 ou seperior

*Composer

*Node.js 22 ou superior

## Sequência para criar o projeto

Criar o projeto com laraval
```
composer create-project laravel/laravel .
```
Iniciar o projeto com laravel
```
php artisan serve
```

Criar a controller
```
php artisan make:controller Usercontroller
```

Criar a View
```
php artisan make:view user/create
```

Criar tabelas mo banco de dados
```
php artisan migrate
```