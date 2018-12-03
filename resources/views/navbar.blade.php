@extends('imports')
<style>
.navbar-inverse .navbar-nav>li>a{
    color:white!important;
}
.navbar-inverse{
    background-color:#3f51b5!important;
}
.avatar{
    width:48px;
    border: 1px solid;
    border-radius: 54%;
    margin-top: -44px;
    margin-left: -60px;
}
.avatar2{
    width:48px;
    border: 1px solid;
    border-radius: 54%;
    margin-top: -12px;
    margin-left: -60px;
}
#logo{
    width:40px;
    border-radius:2em;
}
</style>
<nav class="navbar navbar-inverse navbar-fixed-top">       
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('/')}}" 
                   title="Página Inicial" style="margin-top: -3px">
                    <img id="logo" src="{{url('storage/logo-ema.jpg')}}"></a>
                <button type="button" class="navbar-toggle" 
                        data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>               
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="link-white">
                    <li>
                    @if (session()->get('Usuario'))
                        <a href="{{url('comentarios')}}" style="text-decoration: none">
                            <span class="glyphicon glyphicon-home"></span> 
                            <span id="underline">Olá, {{session()->get('Usuario')->usuario}}</span>
                        </a>
                        @endif
                        @if (!session()->get('Usuario'))
                        <a href="{{url('comentarios')}}" style="text-decoration: none">
                            <span class="glyphicon glyphicon-home"></span> 
                            <span id="underline">Olá, Visitante</span>
                        </a>
                        @endif
                    </li>
                   <!-- <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-pencil"></span>
                            <span id="underline">Cadastros</span> 
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                           
                            <li><a href="#">Usuários</a></li>                                                                                              
                            <li><a href="#">Computadores</a></li>
                            <li><a href="#">Administradores</a></li>
                        </ul>
                    </li> 
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" 
                           href="#" style="text-decoration: none">
                            <span class="glyphicon glyphicon-th"></span> 
                            <span id="underline">Utilitários</span>
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">                           
                            <li>
                                <a href="#">Backup BD</a>
                            </li>                             
                        </ul>
                    </li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right" id="link-white">
                    <li style="cursor:pointer;" class="dropdown">
                        @if(session()->get('Usuario'))
                        <a href="{{ url('configurar') }}" style="text-decoration: none">
                        <img class="avatar2" src="{{ session()->get('Usuario')->avatar }}"></img>
                        @endif
                        @if(!session()->get('Usuario'))
                        <a class="btn btn-primary" href="{{ url('registrar') }}"><span>Cadastre-se</span></a>
                        <img class="avatar" src="{{ url('storage/guest.jpg') }}"></img>
                        @endif
                            <span id="underline"></span> 
                        </a>                      
                    </li>
                    <li>@if (session()->get('Usuario'))<a href="{{ url('deslogar') }}" 
                           style="text-decoration: none">
                            <span class="glyphicon glyphicon-log-in"></span> 
                            <span id="underline">Sair</span></a>@endif</li>  
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </div>       
        </nav>
