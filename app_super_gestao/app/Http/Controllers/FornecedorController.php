<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => [
            'nome'=> 'Fornecedor 1',
            'status'=>'N',
            'cnpj' => '00.000.000/000-00',
            'ddd' => '62',
            'telefone'=> '00000-0000'
            ],
            1 => [
            'nome'=> 'Fornecedor 2',
            'status'=>'N',
            'cnpj' => '11.011.010/110-00',
            'ddd' => '61',
            'telefone'=> '00432-4200'
            ],
            2 => [
            'nome'=> 'Fornecedor 3',
            'status'=>'N',
            'cnpj' => '22.022.020/220-00',
            'ddd' => '11',
            'telefone'=> '12043-2042'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
