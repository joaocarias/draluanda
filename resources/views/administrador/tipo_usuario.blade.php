@extends('layouts.template-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Tipo Usuário</h4>
                    <p class="card-description"> Tipos de Usuários Cadastrados</p>

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($tipoUsuarios as $tipo)
                            <tr>
                                <th scope="row">{{ $tipo->id }}</th>
                                <td>{{ $tipo->tipo_usuario }}</td>
                                <td>{{ $tipo->descricao }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection