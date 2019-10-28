<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">



	<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<title>Login_aluno</title>

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
			height: 529px;
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

		.drop {
			left: 15px;
			margin-bottom: 10px;
			width: 366px;
		}
		
		.input-group{
			width: 92%;
    		margin-left: 15px;
		}
	</style>

</head>

<body>

	<div class="conteiner-fluid">

		<div class="nav">
			<div class="divuni"><img src="imagens/Uninorte.jpg"></div>
		</div>
		<br>
		<div class="divform"><br>


			<form method="POST" action="<?php echo e(route('register')); ?>">
				<?php echo e(csrf_field()); ?>



				<div class="form-group">
					<p id="fonte">Cadastro de Aluno</p>

					<br>


					<div class="Ctext">

						<input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome" value="<?php echo e(old('name')); ?>">
						<small id="emailHelp" class="form-text text-muted"></small>

					</div>
				</div>

				<div class="form-group">

					<div class="Ctext">

						<input type="text" class="form-control" name="matricula" id="exampleInputPassword1" placeholder="Matricula" value="<?php echo e(old('matricula')); ?>">
					</div>

				</div>
				<div class="form-group">

					<div class="Ctext">

						<input id="email" type="email" placeholder="Email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>



					</div>

				</div>


				<div class="form-group">
					<div class="Ctext">
						<input type="text" class="form-control" name="turma" id=""  placeholder="Turma" value="<?php echo e(old('turma')); ?>">
					</div>

				</div>

				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">orientador :</label>
					</div>
					<select name="id_professor" class="custom-select ori" id="inputGroupSelect01">

						<option selected>Escolher...</option>
						<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option name="id_professor" value="<?php echo e($user->id); ?>"> <?php echo e($user->name); ?> <?php echo e($user->id); ?> </option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</select>
				</div>


				<div class="form-group">


					<div class="Ctext">
						<input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Senha">

					</div>
					<INPUT TYPE="hidden" NAME="tipo" VALUE="aluno">
				</div>

				<div class="form-group">
					<div class="Ctext">
						<input id="password-confirm" placeholder="Confirmar Senha" type="password" class="form-control" name="password_confirmation" required>
						<small id="emailHelp" class="form-text text-muted"></small>
					</div>

				</div>


				<div id="fonte">
					<button type="submit" class="btn btn-primary">Cadastrar</button>
				</div>

			</form>
			<?php if($errors->any()): ?>
			<div class="alert alert-danger">
				<ul>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<?php endif; ?>
		</div>
	</div>


</body>

</html>