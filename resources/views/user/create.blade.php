@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Cadastrar Usuários</h1>
            <a href="{{ route('users.index') }}" class="btn-primary">Listar</a>
        </div>

        <x-alert />
        <form action="{{ route('user.store') }}" method="POST" class="form-container">
            @csrf

            <div class="mb-4">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" name="name" id="name" placeholder="Nome Completo" value="{{ old('name') }}"
                    class="form-input"><br><br>
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" placeholder="Seu melhor email"
                    value="{{ old('email') }}" class="form-input"><br><br>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" name="password" id="password" placeholder="Senha com no minimo 6 caracters"
                    value="{{ old('password') }}" class="form-input"><br><br>
            </div>
            <button type="submit" class="btn-success">Cadastrar</button>
        </form>
    </div>
@endsection
