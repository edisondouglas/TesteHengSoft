@extends('layouts.app')
@section('content')
    <div class="container col-md-6">
        @include('mensagem')
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">Cadastro de cliente</h5>
            </div>
            <div class="card-body">
                <form class="form-row" method="POST" action="/store">
                    @csrf
                    <div class="mb-2 row">
                        <div class="col-md-8">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome"
                                   class="form-control @error('nome') is-invalid @enderror"
                                   id="nome" placeholder="Nome" required>
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
                                   id="telefone" placeholder="Telefone" required>
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
                                <option value="" selected disabled>Selecione</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amap??</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Cear??</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Esp??rito Santo</option>
                                <option value="GO">Goi??s</option>
                                <option value="MA">Maranh??o</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Par??</option>
                                <option value="PB">Para??ba</option>
                                <option value="PR">Paran??</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piau??</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rond??nia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">S??o Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                            @error('estado')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="municipio" class="form-label">Munic??pio</label>
                            <input type="text" name="municipio"
                                   class="form-control @error('municipio') is-invalid @enderror"
                                   id="municipio" placeholder="Munic??pio" required>
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
                                   id="bairro" placeholder="Bairro" required>
                            @error('bairro')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <div class="col-md-8">
                            <label for="endereco" class="form-label">Endere??o</label>
                            <input type="text" name="endereco"
                                   class="form-control @error('endereco') is-invalid @enderror"
                                   id="endereco" placeholder="Endere??o" required>
                            @error('endereco')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="cep" class="form-label">Cep</label>
                            <input type="text" name="cep"
                                   class="form-control @error('cep') is-invalid @enderror"
                                   id="cep" placeholder="Cep" required>
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
