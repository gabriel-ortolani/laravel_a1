<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aula de laravel</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="d-flex flex-column align-items-center justify-content-center vh-100 bg-light">
        <h1 class="mb-4">BEM-VINDO</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary btn-lg">Cadastrar Usuário</a>
    </body>
</html>
</html>
