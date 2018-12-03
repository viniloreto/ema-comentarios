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
</style>
<main style="margin-top:80px">
<form id="" method="POST" action="{{ action('ComentarioController@store') }}">
@csrf

<fieldset>

<!-- Form Name -->
<legend>Adicionar Comentário</legend>

<!-- Text input-->

<div id="my-row" class="row">


  <label class="control-label" for="textinput">Titulo</label>  

  <input  id="textinput" name="titulo" type="text" placeholder="Titulo"  class="form-control input-sm">
    

<!-- Text input-->

  <label class="control-label" for="Descricao">Descrição</label>  

  <input  id="Descricao" name="descricao" type="text" class="form-control input-sm">
    


<!-- Textarea -->

  <label class="control-label" for="Comentarios">Comentario</label>
                     
    <textarea  class="form-control" id="Comentarios" name="corpo"></textarea><br>
    <input type="submit" class="btn btn-primary" value="Adicionar">
    <button class="btn btn-danger" value="Voltar"><a href="{{url('comentarios')}}">Voltar</a></button>
</div>
</fieldset>
</div>
</form>
</main>