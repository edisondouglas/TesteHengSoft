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
                            <th style="width: 5%" scope="row">{{$cliente->id}}</th>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->municipio}}</td>
                            <td>{{$cliente->estado}}</td>
                            <td>{{$cliente->telefone}}</td>
                            <td>{{$cliente->cep}}</td>
                            <td style="width: 12%">
                                <a href="editar/{{$cliente->id}}" role="button"
                                   class="btn btn-sm btn-secondary">Editar</a>
                                <button class="excluir btn btn-danger btn-sm ml-1" data-toggle="modal" data-id="{{$cliente->id}}" data-target="#exampleModal2">Excluir</button>
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
    </div>
    <script>
        $(function () {
            $('.excluir').on('click', function(){
                var id = $(this).data('id'); // vamos buscar o valor do atributo data-id
                $('a.concluir-yes').attr('href', '/deletar/' +id); // mudar dinamicamente o link, href do botão confirmar da modal
                $('h5.texto').text('Realmente deseja excluir o cliente '+id+' ?');
                $('#mymodal2').modal('show'); // modal aparece
            });
        });
    </script>

    <div class="modal fade" id="mymodal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Concluir</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="texto"> </h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <a href="#"
                       class="btn btn-success ml-1 concluir-yes">Confirmar</a>
                </div>
            </div>
        </div>
    </div>

@endsection
