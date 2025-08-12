<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Aula laravel</title>
    <style>
        body {
            background: #f8fafc;
        }
        .formulario {
            background: #fff;
            padding: 2rem 2.5rem;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            max-width: 500px;
        }
        .form-label {
            font-weight: 500;
        }
        .form-control {
            border-radius: 8px;
            font-size: 1.05rem;
        }
        .btn-primary {
            min-width: 120px;
        }
        .btn-secondary {
            min-width: 100px;
        }
        h1 {
            margin-bottom: 1.5rem;
            font-weight: 700;
            color: #2d3748;
        }
    </style>
</head>
<body class="container d-flex flex-column align-items-center justify-content-center vh-100">
    
    
    <form action="{{ route('users.store') }}" method="POST" class="container mt-5 d-flex flex-column align-items-center justify-content-center formulario">
        <h1>Cadastrar Usuarios</h1>
        @csrf
        <div class="mb-3 w-100">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3 w-100">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Digite seu email" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3 w-100">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Digite seu Password" value="{{ old('Password') }}" required>
        </div>

        <div class="mb-3 d-flex gap-2 justify-content-end">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a href="{{ route ('welcome')}}" class="btn btn-secondary">Voltar</a>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
