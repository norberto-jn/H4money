@extends('layout/layout')

@section('conteudo')
<link rel='stylesheet' href="css/FolhaEstiloCliente.css">
<!--Campo para editar dados-->
@foreach ($dados as $cliente)

@endforeach

    <hr>
    <form id="formulario" method="POST" action="Atualizar_ID={{$cliente->id}}">
        @csrf
            <div class="form-group">
            <label for="inputAddress">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" value="{{$cliente->nome}}">
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value={{$cliente->email}}>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" class="form-control" id="cpf" onkeyup="mascara_cpf('cpf')" value={{$cliente->cpf}}>
                </div>
                <div class="form-group col-md-6">
                <label for="cep">CEP</label>
                <input type="text" name="cep" class="form-control" id="cep" onkeyup="mascara_cep('cep')" value="{{$cliente->cep}}">
                </div>
            </div>

            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" class="form-control" id="endereco" value="{{$cliente->endereco}}" >
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="numero">Numero</label>
                    <input type="number" name="numero" class="form-control" id="numero" value="{{$cliente->numero}}">
                </div>
                <div class="form-group col-md-6">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" class="form-control" id="bairro" value="{{$cliente->bairro}}">
                </div>
                <div class="form-group col-md-4">
                <label for="uf">Estado</label>
                <select id="uf" name="uf" class="form-control">
                    <option selected  value="{{$cliente->uf}}">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
                </div>
            </div>

            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" class="form-control" id="cidade" value="{{$cliente->cidade}}">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="text" class="btn btn-danger b" onclick="esconde('barra')">voltar</button>

    </form>
    <script src="js/javascriptCadastro.js"></script>

<!--fim de campo para editar dados-->
@stop
