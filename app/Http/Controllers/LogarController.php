<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Auth;

class LogarController extends Controller
{
    public function index() {
        return view('logar');
    }

    public function store(Request $request) {
        $user = new User;
        $user->email = $request->email;
        $user->usuario = $request->usuario;
        $user->password =  $request->password;
        if ( Auth::attempt( ['email' =>  $user->email, 'password' => $user->password] )) {
            $request->session()->put('Usuario', Auth::user());
            return redirect()->intended('comentarios');
        }else {
            $error = "Email ou senha incorretos"; 
            return view('logar', compact('error'));
        }
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $comentario = Comentario::findOrFail($id);
        return view('edit-produto', compact('comentario'));
    }

    public function update(Request $request, $id) {
        $comentario = Produto::findOrFail($id); 
        $comentario->titulo = $request->titulo;
        $comentario->descricao = $request->descricao;
        $comentario->corpo = $request->corpo;
        $comentario->save();
        return redirect()->route('comentario.index')->with('message', 'Produto alterado com sucesso!');
    }

    public function destroy($id) {
        $comentario = Comentario::findOrFail($id);
        $comentario->delete();
        return redirect()->route('comentario.index')->with('message', 'Produto excluído com sucesso!');
    }

    public function deslogar(Request $request)
    {
        $request->session()->flush();
        return redirect()->intended('/');
    }
}
