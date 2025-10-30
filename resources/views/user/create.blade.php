@extends('layouts.admin')

@section('content')
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

        <div class="content">
            <div class="content-title">
                <h1 class="page-title">Cadastrar Usuários</h1>
                <a href="#" class="btn-primary">Listar</a>
            </div>

            @if (session('success'))
                <div class="alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert-erro">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('user.store') }}" method="POST" class="form-container">
                @csrf

                <div class="mb-4">
                    <label for="name" class="form-label">Nome:</label>
                    <input type="text" name="name" id="name" placeholder="Nome Completo"
                        value="{{ old('name') }}" required class="form-input"><br><br>
                </div>

                <div class="mb-4">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Seu melhor email"
                        value="{{ old('email') }}" required class="form-input"><br><br>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Senha:</label>
                    <input type="password" name="password" id="password" placeholder="Senha com no minimo 6 caracters"
                        value="{{ old('password') }}" required class="form-input"><br><br>
                </div>
                <button type="submit" class="btn-success">Cadastrar</button>
            </form>
        </div>
    </div>
@endsection
