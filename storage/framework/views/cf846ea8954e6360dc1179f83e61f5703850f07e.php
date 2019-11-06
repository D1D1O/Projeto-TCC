<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="Cadastro_professor.css">
	<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">

	<title>Cadastro_professor</title>
	<style type="text/css">
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
			height: 556px;
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
		.msg{
			width: 100%;
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
			<form method="POST" action="<?php echo e(route('register')); ?> ">
				<?php echo e(csrf_field()); ?>

				<div class="form-group">

					<p id="fonte">Cadastro de Professor</p>
					<br>
					<div class="Ctext">
						<input type="text" class="form-control" id="Inputnome" aria-describedby="nomeHelp" placeholder="Nome" name="name">

					</div>

				</div>
			<!-- 	Matricula <div class="form-group">

					<div class="Ctext">
						<input type="text" class="form-control" id="InputMatricula" name="matricula" placeholder="Matricula">
					</div>

				</div> -->

				<div class="form-group">

					<div class="Ctext">

						<input id="email" type="email" placeholder="Email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

					

					</div>

				</div>

				<div class="form-group">

					<div class="Ctext">

						<input type="password" class="form-control" id="InputPassword" aria-describedby="passwordHelp" name="password" placeholder="Senha">
				
					</div>

				</div>
				
				<div class="form-group">
					
					<div class="Ctext">
						<input id="password-confirm" placeholder="Confirmar Senha" type="password" class="form-control" name="password_confirmation" required>
						<small id="emailHelp" class="form-text text-muted"></small>
					</div>

				</div>
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<label class="input-group-text" for="inputGroupSelect01">Sexo :</label>
					</div>
					<select name="id_sexo" class="custom-select ori" id="inputGroupSelect01">

						<option selected>Escolher...</option>
						<?php $__currentLoopData = $sexos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sexo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option name="id_sexo" value="<?php echo e($sexo->id); ?>"> <?php echo e($sexo->sexo); ?> </option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					</select>
				</div>

				<div class="form-group">


					<div class="Ctext">
						<div id="fonte">Informações</div>

						<textarea class="msg" cols="49" name="descricao" rows="3"></textarea>

					</div>

				</div>
				<div id="fonte">
					<INPUT TYPE="hidden" NAME="tipo" VALUE="professor">
					
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