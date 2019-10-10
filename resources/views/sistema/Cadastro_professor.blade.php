<!DOCTYPE html>
<html lang="pt-br">
<head>
	
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="Cadastro_professor.css">
	<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	
	<title>Cadastro_professor</title>
	<style type="text/css">
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
	height: 450px;
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
			    <form method="POST" action="{{ route('store.professor') }} ">
				    {{ csrf_field() }}
	  				<div class="form-group">
	  					<p id="fonte">Cadastro de Professor</p>
  						<br>
	    				<div class="Ctext">
	    				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome" name="name">
	    				<small id="emailHelp" class="form-text text-muted"></small>
	    				</div>

	 				</div>
					<div class="form-group">
						
						
	    				<div class="Ctext">
	    				<input type="text" class="form-control" id="exampleInputPassword1" name="matricula" placeholder="Matricula">
	    				</div>

	  				</div>
	  				<div class="form-group">
	    				<div class="Ctext">
	    				<input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="senha" placeholder="Senha">
	    				<small id="emailHelp" class="form-text text-muted"></small>
	    				</div>

	 				</div>
					<div class="form-group">
						
						
	    				<div class="Ctext">
	    				<div id="fonte">Informações</div>
	    				<textarea class="msg" cols="49" name="descricao" rows="3"></textarea>
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