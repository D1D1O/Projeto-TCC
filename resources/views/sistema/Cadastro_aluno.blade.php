<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<meta charset="utf-8">

	

	<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	
	<title>Login_aluno</title>

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
	height: 400px;
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

	</style>

</head>
<body>

	<div class="conteiner-fluid">
		
		<div class="nav">
			<div class="divuni"><img src="imagens/Uninorte.jpg"></div>
		</div>
			<br>
			<div class="divform"><br>
				<form method="POST" action="{{ route('store.aluno') }}">
				{{ csrf_field() }}


	  				<div class="form-group">
	  					<p id="fonte">Cadastro de Aluno</p>
  						<br>
	    				<div class="Ctext">
	    				<input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
	    				<small id="emailHelp" class="form-text text-muted"></small>
	    				</div>

	 				</div>
					<div class="form-group">
						
						
	    				<div class="Ctext">
	    				<input type="text" class="form-control" name="matricula" id="exampleInputPassword1" placeholder="Matricula">
	    				</div>

	  				</div>
	  				<div class="form-group">
	    				<div class="Ctext">
	    				<input type="text" class="form-control" name="turma" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Turma">
	    				<small id="emailHelp" class="form-text text-muted"></small>
	    				</div>

	 				</div>
					<div class="form-group">
						
						
	    				<div class="Ctext">
	    				<input type="password" class="form-control" name="senha" id="exampleInputPassword1" placeholder="Senha">
	    				</div>

	  				</div>
	  				<div id="fonte">
					<button type="submit" class="btn btn-primary">Cadastrar</button>
					</div>
					
				</form>
			</div>
	</div>


</body>
</html>