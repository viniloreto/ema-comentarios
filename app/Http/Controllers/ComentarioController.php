<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use Illuminate\Support\Facades\DB;
use Storage;
use Response;

class ComentarioController extends Controller
{

    public function index() {
        $comentarios = DB::table('comentario')->join('users','comentario.usuario_ID', '=' ,'users.id')->select('users.*', 'comentario.*')->paginate(3);
        $total = comentario::all()->count();
        return view('list-comentarios', ['comentarios' => $comentarios] ,compact('total'));
    }

    public function add() {
        return view('include-comentarios');
    }

    public function store(Request $request) {
        $comentario = new Comentario;
        $comentario->titulo = $request->titulo;
        $comentario->descricao = $request->descricao;
        $comentario->corpo = $request->corpo;
        $comentario->usuario_ID = $request->session()->get('Usuario')->id;
        $comentario->save();
        return redirect()->intended('comentarios');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $comentario = Comentario::findOrFail($id);
        return view('edit-comentario', compact('comentario'));
    }

    public function update(Request $request, $id) {
        $comentario = Comentario::findOrFail($id); 
        $comentario->titulo = $request->titulo;
        $comentario->descricao = $request->descricao;
        $comentario->corpo = $request->corpo;
        $comentario->save();
        return redirect()->intended('comentarios');
    }

    public function destroy($id) {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();
        return redirect()->route('comentario.index')->with('message', 'Produto excluído com sucesso!');
    }

}
