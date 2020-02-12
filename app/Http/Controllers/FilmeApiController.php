<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Filme;

class FilmeApiController extends Controller
{

    public function listar() {

        return response()->json(Filme::all(), 200, [], JSON_UNESCAPED_UNICODE);

    }

    public function retornarFilme($id) {

        return response()->json(Filme::find($id), 200, [], JSON_UNESCAPED_UNICODE);

    }

    public function criarFilme(Request $request) {

        return response()->json(Filme::create($request->all()));

    }

    public function apagarFilme($id) {

        Filme::find($id)->delete();

        return response()->json(['deleted' => true]);

    }

    public function atualizarFilme(Request $request, $id) {

        $filme = Filme::find($id);
        $filme->nome = $request->input('nome');
        $filme->ano = $request->input('ano');
        $filme->id = $request->input('id');
        $filme->save();

        return response()->json($filme);

    }
        

}