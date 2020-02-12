<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pessoa;

class PessoaController extends Controller
{
    public function cadastrar(Request $request) {

        // $this->validate($request, [
        //     'nome'  => 'required',
        //     'email' => 'required|email',
        //     'cpf'   => 'required'
        // ]);

        $nome = $request->input('nome');
        $email = $request->input('email');
        $cpf = $request->input('cpf');

        DB::table('pessoas')->insert([
            'nome' => $nome,
            'email' => $email,
            'cpf' => $cpf
        ]);

        $pessoa = Pessoa::create([
            'nome' => $nome,
            'email' => $email,
            'cpf' => $cpf
        ]);

        return view("verPessoa", [
            'nome'  => $request->input('nome'),
            'email' => $request->input('email'),
            'cpf'   => $request->input('cpf')
        ]);
    }

    public function cadastro() {
        
        return view("cadastroPessoa", []);
    }

    public function listar() {
        $results = Pessoa::all();

        return view("listarPessoas", ['pessoas' => $results]);
    }
}
