<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">



	<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">


	<style>
		body {
			margin: 0;
			background-image: url(imagens/azul.jpg);
			width: 100%;
			height: 100%;
		}
<<<<<<< HEAD

		.centertext {
			margin: 0 auto 0 auto;
		}

=======
		.centertext {
			margin: 0 auto 0 auto;
		}
>>>>>>> desenvolvimento
		#fonte {
			font-family: FreeMono, monospace;
			font-size: 20px;
			color: white;
			text-align: center;
		}
<<<<<<< HEAD

=======
>>>>>>> desenvolvimento
		#fonte2 {
			font-family: FreeMono, monospace;
			font-size: 20px;
			color: white;
			margin-left: 15px;
		}
<<<<<<< HEAD

=======
>>>>>>> desenvolvimento
		.nav {
			background-color: ;
			width: 100%;
			height: 120px;
		}
<<<<<<< HEAD

=======
>>>>>>> desenvolvimento
		.divform {
			align-items: center;
			background-image: url(imagens/azul2.jpg);
			width: 400px;
			height: 300px;
			margin: 0 auto 0 auto;
			border-radius: 25px;
<<<<<<< HEAD

		}

		.divuni {
			margin: 0 auto 0 auto;
		}

=======
		}
		.divuni {
			margin: 0 auto 0 auto;
		}
>>>>>>> desenvolvimento
		.Ctext {
			margin-left: 15px;
			margin-right: 15px;
		}
<<<<<<< HEAD

		div.alert.alert-succes {
			text-align: center;
		}

=======
		div.alert.alert-succes {
			text-align: center;
		}
>>>>>>> desenvolvimento
		.central {
			text-align: center;
		}
	</style>

	<title>Login Professor</title>

</head>

<body>

	@if(empty($matricula))

	<div id="central" class="alert alert-success central">
		Bem Vindo
	</div>

	@else
	<div id="central1" class="alert alert-success central">
		Sua matricula para acesso ao sistema é : {{$matricula}}.
	</div>
	@endif

	<div class="conteiner-fluid">

		<div class="nav">
			<div class="divuni"><img src="imagens/Uninorte.jpg"></div>
		</div>
		<br>

		<div class="divform"><br>

			<form method="POST" action="{{ route('login') }}">
				{{ csrf_field() }}

				<div class="form-group">
					<p id="fonte">Professor</p>

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
						<input type="text" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Login">
						
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

				<!--<div class="form-group">
<<<<<<< HEAD

					<div class="Ctext">
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
					</div>

				</div>-->
=======
					<div class="Ctext">
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
					</div>
				</div>-->
				<INPUT TYPE="hidden" NAME="tipo" VALUE="professor">
>>>>>>> desenvolvimento

				<div id="fonte">

				      <button type="submit" class="btn btn-primary">
                                Fazer Login
                      </button>


					<a href="{{route('Cadastro_professor')}}" class="btn btn-primary">
								Realizar Cadastro
					</a>
				</div>
			</form>
		</div>
	</div>


</body>

</html>