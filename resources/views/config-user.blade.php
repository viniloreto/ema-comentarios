@extends('navbar')
<style>
input[type="text"]{
color: white;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid!important;
    background: #3f51b5!important;
}
input[type="submit"]{
    background: #3f51b5!important;
    margin-left: 266px;
}
textarea{
color: white!important;
    border-top: none!important;
    border-left: none!important;
    border-right: none!important;
    border-bottom: 1px solid!important;
    background: #3f51b5!important;
}
#my-row{
    margin-left: auto;
    width: 50%;
    margin-right: auto;
}
legend{
    text-align:center;
}
button a{
        text-decoration:none!important;
        color:white!important;
}
.avatar{
    border: 1px solid;
    border-radius: 54%;
}
</style>
<main style="margin-top:80px">
<form method="POST" enctype="multipart/form-data" action="{{ url('editarUsuario') }}">
@csrf

<fieldset>

<!-- Form Name -->
<legend>Configurar Usuario</legend>

<!-- Text input-->

<div id="my-row" class="row">


  <label class="control-label" for="textinput">Usuario</label>  

  <input  id="textinput" value="{{$user->usuario}}" name="usuario" type="text" placeholder="Titulo"  class="form-control input-sm">
    
  <label class="control-label" for="textinput">Email</label>  

<input  id="textinput" value="{{$user->email}}" name="email" type="text" placeholder="Titulo"  class="form-control input-sm">
  
<!-- Textarea -->

  <label class="control-label" for="Comentarios">Upload Avatar</label>
  <input type="file" value="{{$user->avatar}}" name="avatar">
    <input type="submit" class="btn btn-primary" value="Salvar">
    <button class="btn btn-danger" value="Voltar"><a href="{{url('comentarios')}}">Voltar</a></button>
</div>
</fieldset>
</div>
</form>
</main>