<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello_default(Request $request) {

        if($request->has('nome')) {
            
        } else {
            return view('perguntarNome');
        }
    }

    public function hello($name) {

        return view("hello", ['name' => $name]);
    }

    public function salvarNomeSessao(Request $request) {

        $nome = $request->input('nome');

        return view('hello', ['name' => $nome]);
    }


}
