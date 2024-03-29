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
		div.alert.alert-succes {
			text-align: center;
		}
		.central {
			text-align: center;
		}
	</style>

	<title>Login Professor</title>

</head>

<body>

	<?php if(empty($matricula)): ?>

	<div id="central" class="alert alert-success central">
		Bem Vindo
	</div>

	<?php else: ?>
	<div id="central1" class="alert alert-success central">
		Sua matricula para acesso ao sistema é : <?php echo e($matricula); ?>.
	</div>
	<?php endif; ?>

	<div class="conteiner-fluid">

		<div class="nav">
			<div class="divuni"><img src="imagens/Uninorte.jpg"></div>
		</div>
		<br>

		<div class="divform"><br>

			<form method="POST" action="<?php echo e(route('login')); ?>">
				<?php echo e(csrf_field()); ?>


				<div class="form-group">
					<p id="fonte">Professor</p>

					<br>

                    <div class="Ctext">
                                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                    </div>

					<!--<div class="Ctext">
						<input type="text" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Login">
						
					</div>-->

				</div>

				<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <!--<label for="password" class="col-md-4 control-label">Password</label>-->

                            <div class="Ctext">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Senha" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                </div>

				<!--<div class="form-group">
					<div class="Ctext">
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
					</div>
				</div>-->
				<INPUT TYPE="hidden" NAME="tipo" VALUE="professor">

				<div id="fonte">

				      <button type="submit" class="btn btn-primary">
                                Fazer Login
                      </button>


					<a href="<?php echo e(route('Cadastro_professor')); ?>" class="btn btn-primary">
								Realizar Cadastro
					</a>
				</div>
			</form>
		</div>
	</div>


</body>

</html>