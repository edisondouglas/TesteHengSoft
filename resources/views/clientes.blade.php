@extends('layouts.app')
@section('content')
    <div class="container">
        @include('mensagem')
        <a href="adicionar" role="button" class="btn btn-success mb-4 float-right">Adicionar Cliente</a>
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">Lista de clientes</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-responsive-sm">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Município</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Cep</th>
                        <th scope="col">Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <th style="width: 5%"  scope="row">{{$cliente->id}}</th>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->municipio}}</td>
                            <td>{{$cliente->estado}}</td>
                            <td>{{$cliente->telefone}}</td>
                            <td>{{$cliente->cep}}</td>
                            <td style="width: 12%" >
                                <a href="editar/{{$cliente->id}}" role="button" class="btn btn-sm btn-secondary">Editar</a>
                                <a href="deletar/{{$cliente->id}}" role="button" class="btn btn-sm btn-danger">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{ $clientes->links()}}
                </div>
            </div>
        </div>

@endsection
