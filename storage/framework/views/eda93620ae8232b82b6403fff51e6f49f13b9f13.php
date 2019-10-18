<!DOCTYPE html>

<html lang="pt-br">
	
	<head>
		<meta charset="utf-8">

		
		<link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
		<style type="text/css">
			body{
	background-image: url(imagens/azul.jpg);
}
.unip{

	font-family: 'Oswald', sans-serif;
	font-size: 30px;
	text-align: center;	
	width:180px;
	height:80px;
	padding: 10px;
	background-color: #dcd7d4;
	position: relative;
	border-left: solid 10px white;
	margin: 0px 10px 10px 0px;
}

.unip2{

	font-family: 'Oswald', sans-serif;
	font-size: 15px;
	text-align: center;	
	width:180px;
	height:80px;
	padding: 10px;
	background-color: #dcd7d4;
	position: relative;
	margin-bottom: 10px;
	border-left: solid 10px black;
		
}
.unip2:hover{

	transform:scale(1.1);
	transition: all 0.15s linear;

}

.nav{
	width: 800px;
	height:80px;
	background-color:#6692b3;
	position: relative;
	padding: 10px;
	left: 200px;


}
.nome{
	font-family: 'Oswald', sans-serif;
	font-size: 20px;
	color: white;
	text-align:left;
	padding: 10px;
	width: 480px;
	height:65px;
	margin-left: 10px;
	background-color: #42474a;
	position: relative;
	border-top: solid 10px white;
	 
}
.nome2{
	width: 280px;
	height:65px;
	background-color:#42474a;
	position: relative;
	border-top: solid 10px white;
		
}
.principal{
	max-width:1000px;
	height:1000px;
	margin: 0 auto 0 auto;
	background-color: yellow;
	position: relative; 
}
.left{
	background-color:#1670a7;
	width: 200px;
	height: 100%;
	padding: 10px;
	position: absolute;
	left: 0;  
}
.chat{
	background-color:#959a9c;	
	width:800px;
	height:721px; 
	float: right;	
}
.chat2{
	background-color: white;
	width:770px;
	height: 690px;
	position: relative;
	left:14px;
	top:14px;     

}
.text{
    background:#6692b3;   
    width: 800px;
    height: 199px;    
    position: relative;
    left: 200px;
    clear: both;

}
.mensagem{
	font-family: Andale Mono, monospace;
	font-size:20px;
	color:white;  
}

#sair{

	float:right;
}







		</style>

		<title>UniProjetos</title>
	</head>

	
	<body>
	<div class="principal">
	
	
	<div class="left">

		<div class="unip">UniProjetos</div>

			
			<div class="unip2">
			<a href="">Aluno 1 cadastrado</a>
			</div>
		
		
		<div class="unip2">
			<a href="">Aluno 2 cadastrado</a>
		</div>

	</div>
	
	<div class="nav">		
		<span class="nome">Professor:</span>
		
		
		<span class="nome2">
			<a href="index.html" class="btn btn-primary" id="sair">	
				Sair
			</a>
		</span>		
		
	</div>

	<div class="chat">
		<div class="chat2">
			
		</div>
					
	</div>

	<div class="text">
						
		<center class="mensagem">Mensagem:</center><center><textarea class="msg" cols="80" rows="3"></textarea></center>
		
		<center><input id="file" name="file" type="file" class="btn btn-light"/>&nbsp;&nbsp;<button class="btn btn-light">Enviar</button></center>
						
						
	</div>

	
		
	</div>
	









	</body>