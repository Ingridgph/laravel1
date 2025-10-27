<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @vite(['resources/css/app.css'])
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoCurso</title>
</head>

<body>
    <div class="main-container">
        <header class="header">
            <div class="content-header">
                <h2 class="title-logo"><a href="{{ route('dashboard') }}">Projeto</a></h2>
                <ul class="list-nav-link">
                    <li><a href="#" class="nav-link">Usuários</a></li>
                    <li><a href="{{ route('dashboard') }}" class="nav-link">Sair</a></li>
                </ul>
            </div>
        </header>


        <h1>Cadastrar novo usuário</h1>
        @if (session('success'))
            <p style="color: #086">
                {{ session('success') }}
            </p>
        @endif

        @if (session('error'))
            <p style="color: rgba(200, 23, 13, 1)">
                {{ session('error') }}
            </p>
        @endif
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" placeholder="Nome Completo" value="{{ old('name') }}"
                required><br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Seu melhor email"
                value="{{ old('email') }}" required><br><br>

            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" placeholder="Senha com no minimo 6 caracters"
                value="{{ old('password') }}" required><br><br>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>

</html>
