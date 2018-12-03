<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <style>
.container-login {
	background: url(https://www.andersenbowe.com.au/wp-content/uploads/2017/06/49be22bf2ec3516003010c06e2ec3545.jpg) no-repeat center fixed;
	background-size: cover;
	margin: 0;
	display: flex;
	justify-content: center;
	font-family: sans-serif, serif;
	font-size: 18px;
}

.container {
  margin-top:-65px;
}

form {
	background-color: rgba(0,0,0,0.5);
	border-radius: 10px;
	width: 100%;
	margin: 50% auto;
	padding: 1.5em;
	color: #fff;
	display: flex;
	flex-direction: column;
	justify-content: center;

}

.hide {
	display: none;
}

.row {
	margin: 0.5em auto;
}

.row-input {
	display: inline-flex;
	background: rgba(0, 0, 0, 0.5);
	border-radius: 5px;
	padding: 0.25em;
}

.icon {
	width: 1.5em;
	line-height: 18px;
}

img {
	width: 26%;
	margin: auto 0;
}

.input {
	background: none;
	border: none;
	color: #fff;
	padding: 0.25em;
	font-size: 18px;
}

.input:focus {
	outline: none;
}

input[type=checkbox] {
	cursor: pointer;
}

.row-text {
	margin: 0.15em;
	font-size: 14px;
}

.submit {
	margin: 2em auto 1.5em auto;
	padding: 0.8em 1.5em;
	cursor: pointer;
	width: 60%;
	border: none;
	border-radius: 5px;
	background-color: rgb(38, 124, 181);
	box-shadow: 2px 2px 0px 0px rgb(28, 94, 138);
	color: #fff;
	font-size: 18px;
	outline: none;
}

.submit:active {
	transform: translate(0px, 2px);
  	-webkit-transform: translate(0px, 2px);
}

.pointer {
	cursor: pointer;
	margin: 0 auto;
}

p {
	margin: 0;
}
a{
	text-decoration:none;
	color:white;
}
.img-login{
		width:100%;
}
</style>

<script>
function verificador() {
	if (document.querySelectorAll('.input')[0].value == '' || document.querySelectorAll('.input')[1].value == '' || document.querySelectorAll('.input')[2].value == '' ){
		document.querySelectorAll('#error-message')[0].style = "display:block;color:red";
		event.preventDefault();
    	return false;
	}
}
</script>


</head>
    <body class="container-login">
    <div>
      <div class="container">
      <form id="registro" method="POST" action="{{ action('RegistroController@store') }}">
      @csrf
        <div class="row row-input">
          <label htmlFor="email" class="icon"><img class="img-login" src="https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Mail-512.png" width="50" alt="Email"/></label>
          <input class="input" id="email" type="text" name="email" placeholder="Email" autofocus/>
        </div>
        <div class="row row-input">
          <label htmlFor="email" class="icon"><img class="img-login" src="https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Mail-512.png" width="50" alt="Usuario"/></label>
          <input class="input" id="usuario" type="text" name="usuario" placeholder="Usuario" autofocus/>
        </div>
        <div class="row row-input">
          <label htmlFor="password" class="icon"><img class="img-login" src="https://cdn4.iconfinder.com/data/icons/web-ui-color/128/Lock-512.png" width="50" alt="Senha"/></label>
          <input class="input" id="password" type="password" name="password" placeholder="Senha"/>
        </div><br>
		<p id="error-message" style="display:none">OS CAMPOS NÃO PODEM SER NULOS</p>
			@if (isset($error))
			<p style="color:red">{{$error}}</p>
			@endif
        <input type="submit" name="submit" onclick="verificador()" value="Cadastrar" class="submit"/>
      </form>
    </div>
    </div>

    </body>
</html>
