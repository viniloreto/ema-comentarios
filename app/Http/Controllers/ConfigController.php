<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class ConfigController extends Controller
{
    public function index(){
        $user = new User;
        $user = User::findorfail(Auth::User()->id);
        return view('config-user',compact('user'));
    }

    public function update(Request $request) {
        $usuario = User::findOrFail(Auth::User()->id);
        $usuario->usuario = $request->usuario;
        $usuario->email = $request->email;
        if ($request->hasFile('avatar') && $request->file('avatar')->isValid()){

            // Recupera a extensão do arquivo
            $extension = $request->avatar->extension();
     
            $data = file_get_contents($request->avatar);
            $usuario->avatar =  'data:image/' . $extension . ';base64,' . base64_encode($data);
           /* if ( !$upload )
            return redirect()
                        ->back()
                        ->with('error', 'Falha ao fazer upload')
                        ->withInput();*/
 
        }
        $request->session()->put('Usuario', $usuario);
        $usuario->save();
        return redirect()->intended('comentarios');
    }
}
