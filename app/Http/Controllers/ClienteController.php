<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{

    public function index()
    {
        $dados=cliente::all();
        return view('cliente',compact('dados'));
    }


    public function create()
    {
       return view('cadastra');
    }


    public function store(Request $request)
    {

       $nome=$request->nome;
       $email=$request->email;
       $cpf=$request->cpf;
       $cep=$request->cep;
       $endereco=$request->endereco;
       $numero=$request->numero;
       $bairro=$request->bairro;
       $estado=$request->uf;
       $cidade=$request->cidade;

       $dados=[
           'nome'=>$nome,
           'endereco'=>$endereco,
           'numero'=>$numero,
           'bairro'=>$bairro,
           'cidade'=>$cidade,
           'uf'=>$estado,
           'cep'=>$cep,
           'email'=>$email,
           'cpf'=>$cpf
       ];

       DB::table('clientes')->insert($dados);

       return view('cadastra');

    }


    public function show(cliente $cliente)
    {
        //
    }


    public function edit($id)
    {

        $dados=DB::table('clientes')->where('id','=',$id)->get();
        return view('EditarDados',compact('dados'));
    }


    public function update(Request $request,$id)
    {
        $nome=$request->nome;
        $email=$request->email;
        $cpf=$request->cpf;
        $cep=$request->cep;
        $endereco=$request->endereco;
        $numero=$request->numero;
        $bairro=$request->bairro;
        $estado=$request->uf;
        $cidade=$request->cidade;

       $dados=[
           'nome'=>$nome,
           'endereco'=>$endereco,
           'numero'=>$numero,
           'bairro'=>$bairro,
           'cidade'=>$cidade,
           'uf'=>$estado,
           'cep'=>$cep,
           'email'=>$email,
           'cpf'=>$cpf
       ];

        DB::table('clientes')
        ->where('id', $id)
        ->update($dados);

        return $this->index();
    }

    public function destroy($id)
    {
        DB::table('clientes')->where('id', '=',$id)->delete();
        return $this->index();

    }
}
