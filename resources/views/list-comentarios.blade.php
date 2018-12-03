
@extends('navbar')
<style>
input[type="text"]{
color: white;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid!important;
    width: 50%;
    background: #3f51b5!important;
}
textarea{
color: white!important;
    border-top: none!important;
    border-left: none!important;
    border-right: none!important;
    border-bottom: 1px solid!important;
    width: 50%!important;
    background: #3f51b5!important;
}
.btn-my{
color: #fff;
    background-color: #3f51b5!important;
    border-color: #3f51b5!important;
}
#tcc{
    margin-top: 73px;
    margin-left: auto;
    margin-right: auto;
    width:800px;
}
h3:first-of-type{
    margin-left: auto;
    margin-right: auto;
    width: 365px;
    }
</style>
        <div id="tcc">
        <h3> Trabalho de Conclusão de Curso</h3>
        <embed src="{{ url('storage/TG-Ema.pdf') }}" style="width:800px; height:750px;" frameborder="0">
        </div>
        <div style="margin-top:60px" class="main">
        <div id="line-one">   
            <div class="container">
                <div class="row">
                    <div class="col-md-12" id="center"> 
                        <h1><b>Comentarios</b></h1>
                        <br> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        @if (session()->get('Usuario'))
                       <a href="{{ url('comentarios/incluir-comentarios') }}" 
                           class="btn btn-my">
                            <span class="glyphicon glyphicon-plus"></span> Adicionar Comentario</a>
                        @endif
                    </div>           
                </div>

                <div class="row"> 

                        <h4 id="center"><b>Comentarios realizados ({{$total}})</b></h4>

                                
                                    @foreach($comentarios as $comentario)

<fieldset>

<!-- Form Name -->
<legend>Comentário {{$comentario->id}}</legend>

<!-- Text input-->

<div class="row">
Usuario : {{$comentario->usuario}}
<img class="img-comment" src="{{ $comentario->avatar }}"></img><br>

  <label class="control-label" for="textinput">Titulo</label>  

  <input disabled id="textinput" name="textinput" type="text" placeholder="Titulo" value="{{$comentario->titulo}}" class="form-control input-sm">
    

<!-- Text input-->

  <label class="control-label" for="Descricao">Descrição</label>  

  <input disabled id="Descricao" name="Descricao" type="text" placeholder="" value="{{$comentario->descricao}}" class="form-control input-sm">
    


<!-- Textarea -->

  <label class="control-label" for="Comentarios">Comentario</label>
                     
    <textarea disabled class="form-control" id="Comentarios" name="Comentarios">{{$comentario->corpo}}</textarea><br>
    @if (session()->get('Usuario'))
    @if ($comentario->usuario_ID === session()->get('Usuario')->id)
    <a class="btn btn-my" style="color:white;" href="{{url('comentarios/editar-comentario/'.$comentario->id.'') }}">Editar Comentario</a><br><br>
@endif
@endif
</div>
</fieldset>

                                    @endforeach
                                    {!! $comentarios->render() !!}

                    </div>
                </div>
            </div>
            <img src="{{URL::asset('img/subir.png')}}" 
                 id="up" 
                 style="display: none;" 
                 alt="Ícone Subir ao Topo" 
                 title="Subir ao topo?">

</div>
