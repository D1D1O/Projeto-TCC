<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">


	<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<<<<<<< HEAD
	<link href="{{ asset('css/Login_aluno.css') }}" rel="stylesheet">
	<title>Login Aluno</title>

	<style>
body{
	margin: 0;
	background-image: url(imagens/azul.jpg);
	width: 100%;
	height: 100%;
}
.centertext{
	margin: 0 auto 0 auto;
}
#fonte{
	font-family: FreeMono, monospace;
	font-size: 20px;
	color: white; 
	text-align: center;
}
#fonte2{
	font-family: FreeMono, monospace;
	font-size: 20px;
	color: white; 
	margin-left: 15px;
}
.nav{
	background-color:;
	width:100%;
	height: 120px;
}
.divform{
	align-items: center;
	background-image: url(imagens/azul2.jpg); 
	width:400px;
	height: 300px;
	margin: 0 auto 0 auto;
	border-radius: 25px;

}
.divuni{
	margin: 0 auto 0 auto;
}
.Ctext{
	margin-left:15px;
	margin-right: 15px; 
}
#btn1{
	 
}
div.alert.alert-succes{
	text-align: center;
}
.central{
	text-align: center;
}

=======

	<title>Login Aluno</title>

	<style>
		body {
			margin: 0;
			background-image: url(imagens/azul.jpg);
			width: 100%;
			height: 100%;
		}

		.centertext {
			margin: 0 auto 0 auto;
		}

		#fonte {
			font-family: FreeMono, monospace;
			font-size: 20px;
			color: white;
			text-align: center;
		}

		#fonte2 {
			font-family: FreeMono, monospace;
			font-size: 20px;
			color: white;
			margin-left: 15px;
		}

		.nav {
			background-color: ;
			width: 100%;
			height: 120px;
		}

		.divform {
			align-items: center;
			background-image: url(imagens/azul2.jpg);
			width: 400px;
			height: 300px;
			margin: 0 auto 0 auto;
			border-radius: 25px;

		}

		.divuni {
			margin: 0 auto 0 auto;
		}

		.Ctext {
			margin-left: 15px;
			margin-right: 15px;
		}

		#btn1 {}
			.alert{
			text-align: center;
		}
>>>>>>> desenvolvimento
	</style>

</head>

<body>

<<<<<<< HEAD
@if(empty($matricula))
  <div id="central" class="alert alert-success central">
                           Bem Vindo
  </div>
  
@else
  <div id="central2" class="alert alert-success central">
    Sua matricula para acesso ao sistema é :  {{$matricula}}.
  </div>
@endif
=======
	@if(empty($matricula))
	<div class="alert alert-success">
		Bem Vindo
	</div>

	@else
	<div class="alert alert-success">
		Sua matricula para acesso ao sistema é : {{$matricula}}.
	</div>
	@endif
>>>>>>> desenvolvimento


	<div class="conteiner-fluid">

		<div class="nav">
			<div class="divuni"><img src="imagens/Uninorte.jpg"></div>
		</div>
		<br>
		<div class="divform"><br>
			<form method="POST" action="{{ route('login') }}">
				{{ csrf_field() }}


				<div class="form-group">
					<p id="fonte">Aluno</p>
					<br>

					<div class="Ctext">
						<input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

						@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>

					<!--<div class="Ctext">
	    				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Matricula">
	    				<small id="emailHelp" class="form-text text-muted"></small>
	    				</div>-->


				</div>

				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<!--<label for="password" class="col-md-4 control-label">Password</label>-->

					<div class="Ctext">
						<input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>

						@if ($errors->has('password'))
						<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>
				</div>
				<INPUT TYPE="hidden" NAME="tipo" VALUE="aluno">

				<!--<div class="form-group">
						
						
	    				<div class="Ctext">

	    				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">

	    				</div>

	  				</div>-->

				<div id="fonte">

					<button type="submit" class="btn btn-primary">
					Fazer Login
					</button>

					<a href="{{route('Cadastro_aluno')}}" class="btn btn-primary">
<<<<<<< HEAD
						Cadastre-se
<<<<<<< HEAD
					   </a>
					   <INPUT TYPE="hidden" NAME="tipo" VALUE="aluno">
				    </div>
=======
=======
						Realizar Cadastro
>>>>>>> desenvolvimento
					</a>
				</div>
>>>>>>> desenvolvimento
			</form>

			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			
		</div>
	</div>


</body>

</html>