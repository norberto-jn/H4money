@extends('layout/layout')
@section('conteudo')
    <link rel='stylesheet' href="css/FolhaEstiloCliente.css">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Cliente</h1>
    </div>
    <hr>
    <a href="Cadastrar" style="float:right;margin-bottom:11px;color:black">Cadastrar + </a>
    <!--Tabela de retorno de dados-->
    <div class="table-responsive tabela">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">CPF</th>
                    <th scope="col" class="Editar"></th>
                    <th scope="col" class="Excluir"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($dados as $cliente)
                <tr>
                    <th scope="row">{{ $cliente->id}}</th>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->endereco}}</td>
                    <td>{{$cliente->cpf}}</td>
                <td class="btn-editar"><a href="Atualiza_ID={{$cliente->id}}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                <td class="btn-excluir"><a href="Excluir_ID={{$cliente->id}}"><button type="button" class="btn btn-danger">Excluir</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!--Fim de tabela de retorno de dados-->
    <script src="js/javascriptCliente.js"></script>
@stop
