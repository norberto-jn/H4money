<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class RetonarNumeroClientes extends Controller
{
    //funçao para retorna total de clientes cadastrados da view dashboard
    public function retorna(){
        $registro=DB::table('clientes')->get();
        $total=count($registro);
        return view("dashboard",compact("total"));
    }
}
