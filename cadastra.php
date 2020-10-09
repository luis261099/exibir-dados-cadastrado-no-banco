<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<body>
	<style type="text/css">
  
  body{
 background: url("https://img.freepik.com/vetores-gratis/ilustracao-do-conceito-de-entrevista_114360-1501.jpg?size=626&ext=jpg") no-repeat center center fixed;
 background-size: cover; /*Css padrao*/
  -webkit-background-size: cover; /*Css safari e chrome*/
 -moz-background-size: cover; /*Css firefox*/
  -ms-background-size: cover; /*Css IE nao use Me$@#$/
 -o-background-size: cover; /*Css Opera*/
  }
 img {
   max-width: 100%;
   height: auto;
  }
 
    </style>
	<style>

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.9;
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
</style>
  <div class="transbox">
  <center>
		<h1>Cadastrar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		
		<form method="POST" action="processa.php">
		
			<label>Nome: </label>
			<input class="form-control" placeholder="Nome" type="text" style="min-width:100px;" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>E-mail: </label>
			<input class="form-control" placeholder="email"type="email" style="min-width:300px;" name="email" size="15" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>Telefone: </label>
			<input class="form-control" placeholder="telefone"type="text" style="min-width:300px;" name="telefone" placeholder="Digite o nome completo"><br><br>
			
		
				<label>Graduação: </label>
			<input class="form-control" placeholder="Graduação"type="text" style="min-width:300px;" name="gradu" placeholder="Digite o nome completo"><br><br>
			
				<label>Experiencia: </label>
			<input class="form-control" placeholder="Experiencia"type="text" style="min-width:300px;" name="experi" placeholder="Digite o nome completo"><br><br>
			
			
			<button type="submit" value="Cadastrar" class="btn btn-success">Success</button>
			<button type="submit"  href="INDEX.php" class="btn btn-dark">lista</button>
	</div>
	</center>
		</form>
	</body>
</html>