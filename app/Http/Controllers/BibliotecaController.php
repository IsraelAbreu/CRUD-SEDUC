<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use Illuminate\Http\Request;

class BibliotecaController extends Controller
{
    public function index(){
        $dados = Biblioteca::get();

        return view('index', compact('dados'));
    }

    public function create(){

        return view('create');
    }

    public function store(Request $request){
        Biblioteca::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'isbn' => $request->isbn,
            'lancamento' => $request->lancamento,
        ]);

        return redirect()->route('index')->with('message', 'Livro registrado na sua biblioteca');
    }

    public function destroy($id){
        $dados = Biblioteca::find($id);
        $dados->delete();

        return redirect()->route('index')->with('message', 'Livro deletado');
    }

    public function editar($id){
        $dados = Biblioteca::find($id);

        return view('update', compact('dados'));
    }

    public function update(Request $request, $id){
        $dados = Biblioteca::find($id);
        $dados->update([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'isbn' => $request->isbn,
            'lancamento' => $request->lancamento,
        ]);

        return redirect()->route('index')->with('message', 'Livro atualizado com sucesso');
    }

}
