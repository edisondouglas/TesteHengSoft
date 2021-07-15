@extends('layouts.app')
@section('content')
    <div class="container col-md-6">
        @include('mensagem')
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">Cadastro de cliente</h5>
            </div>
            <div class="card-body">
                <form class="form-row" method="POST" action="/update/{{$cliente->id}}">
                    @csrf
                    <div class="mb-2 row">
                        <div class="col-md-8">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome"
                                   class="form-control @error('nome') is-invalid @enderror"
                                   id="nome" placeholder="Nome" required value="{{$cliente->nome}}">
                            @error('nome')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="phone" name="telefone"
                                   class="form-control @error('telefone') is-invalid @enderror"
                                   id="telefone" placeholder="Telefone" required value="{{$cliente->telefone}}">
                            @error('telefone')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <div class="col-md-4 select_input">
                            <label for="estado" class="form-label">Estado</label>
                            <select name="estado" class="form-control @error('estado') is-invalid @enderror"
                                    id="estado"
                                    size="1"
                                    required>
                                <option @if($cliente->estado=="AC") selected @endif value="AC">Acre</option>
                                <option @if($cliente->estado=="AL") selected @endif value="AL" >Alagoas</option>
                                <option @if($cliente->estado=="AP") selected @endif value="AP">Amapá</option>
                                <option @if($cliente->estado=="AM") selected @endif value="AM">Amazonas</option>
                                <option @if($cliente->estado=="BA") selected @endif value="BA">Bahia</option>
                                <option @if($cliente->estado=="CE") selected @endif value="CE">Ceará</option>
                                <option @if($cliente->estado=="DF") selected @endif value="DF">Distrito Federal</option>
                                <option @if($cliente->estado=="ES") selected @endif value="ES">Espírito Santo</option>
                                <option @if($cliente->estado=="GO") selected @endif value="GO">Goiás</option>
                                <option @if($cliente->estado=="MA") selected @endif value="MA">Maranhão</option>
                                <option @if($cliente->estado=="MT") selected @endif value="MT">Mato Grosso</option>
                                <option @if($cliente->estado=="MS") selected @endif value="MS">Mato Grosso do Sul</option>
                                <option @if($cliente->estado=="MG") selected @endif value="MG">Minas Gerais</option>
                                <option @if($cliente->estado=="PA") selected @endif value="PA">Pará</option>
                                <option @if($cliente->estado=="PB") selected @endif value="PB">Paraíba</option>
                                <option @if($cliente->estado=="PR") selected @endif value="PR">Paraná</option>
                                <option @if($cliente->estado=="PE") selected @endif value="PE">Pernambuco</option>
                                <option @if($cliente->estado=="PI") selected @endif value="PI">Piauí</option>
                                <option @if($cliente->estado=="RJ") selected @endif value="RJ">Rio de Janeiro</option>
                                <option @if($cliente->estado=="RN") selected @endif value="RN">Rio Grande do Norte</option>
                                <option @if($cliente->estado=="RS") selected @endif value="RS">Rio Grande do Sul</option>
                                <option @if($cliente->estado=="RO") selected @endif value="RO">Rondônia</option>
                                <option @if($cliente->estado=="RR") selected @endif value="RR">Roraima</option>
                                <option @if($cliente->estado=="SC") selected @endif value="SC">Santa Catarina</option>
                                <option @if($cliente->estado=="SP") selected @endif value="SP">São Paulo</option>
                                <option @if($cliente->estado=="SE") selected @endif value="SE">Sergipe</option>
                                <option @if($cliente->estado=="TO") selected @endif value="TO">Tocantins</option>
                            </select>
                            @error('estado')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="municipio" class="form-label">Município</label>
                            <input type="text" name="municipio"
                                   class="form-control @error('municipio') is-invalid @enderror"
                                   id="municipio" placeholder="Município" required value="{{$cliente->municipio}}">
                            @error('municipio')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" name="bairro"
                                   class="form-control @error('bairro') is-invalid @enderror"
                                   id="bairro" placeholder="Bairro" required value="{{$cliente->bairro}}">
                            @error('bairro')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <div class="col-md-8">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" name="endereco"
                                   class="form-control @error('endereco') is-invalid @enderror"
                                   id="endereco" placeholder="Endereço" required value="{{$cliente->endereco}}">
                            @error('endereco')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="cep" class="form-label">Cep</label>
                            <input type="number" name="cep"
                                   class="form-control @error('cep') is-invalid @enderror"
                                   id="cep" placeholder="Cep" required value="{{$cliente->cep}}">
                            @error('cep')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-success m-2" style="float: right" type="submit">Salvar</button>
                    </div>

                </form>
            </div>
        </div>

@endsection
