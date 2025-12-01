@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Listar Usuários</h1>
            <a href="{{ route('user.create') }}" class="btn-success">Cadastrar</a>
        </div>

        <x-alert />
        <div class='table-container'>
            <table class="table">
                <thead>
                    <tr class="table-thead">
                        <th class="table-thead">ID</th>
                        <th class="table-thead">NAME</th>
                        <th class="table-thead">EMAIL</th>
                        <th class="table-thead center">AÇÕES</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @forelse ($users as $user)
                        <tr class="table-row">
                            <td class="table-cell">{{ $user->id }}</td>
                            <td class="table-cell">{{ $user->name }}</td>
                            <td class="table-cell">{{ $user->email }}</td>
                            <td class="table-actions">
                                <a href="#" class= "btn-info">Vizualizar</a>
                                <a href="#" class= "btn-warning">Editar</a>
                                <a href="#" class= "btn-danger">Apagar</a>
                            </td>
                        </tr>
                    @empty
                        <div class="alert-erro">
                            Nenhum usuário foi encontrado!
                        </div>
                    @endforelse
                </tbody>
            </table>

        </div>
        <div class="pagination">
            {{ $users->links() }}
        </div>
    </div>
@endsection
