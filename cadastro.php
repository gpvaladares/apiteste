//<?php 
	//include ("conexao.php");
 ?>


//<!DOCTYPE html>
//<html>
<head>
	//<meta charset="utf-8">
	//<title>Página de Cadastro</title>
</head>
<body>
		</body>/h1> Casatro de Clientes</h1>
		//<hr>
		//<form method="POST">
		<table>
		<tr>
		//	<td>Nome</td>
			<td><input type="text" name="nome"></td>
		</tr>
		<hr>
		<tr>
			<td>CPF</td>
			<td><input type="number" name="cpf"></td>
		</tr>
		<hr>

		<tr>
			<td>E-mail</td>
			<td><input type="text" name="email"></td>
		</tr>
		<hr>

		<tr>
			<td>Telefone</td>
			<td><input type="number" name="telefone"></td>

		</tr>
		<hr>

		</table>
		<input type="submit" value="Salvar">

		</form>
		<?php 
			//if (!empty($_POST['nome']) and ($_POST['cpf']) and ($_POST['email']) and ($_POST['telefone'])	){
			//	$nome = $_POST['nome'];
				//$cpf = $_POST['cpf'];
				//$email = $_POST ['email'];
//telefone = $_POST['telefone'];

				//$erro = 0;

				//$sql = mysqli("INSERT INTO clientes(nome,cpf,email,telefone) 
									//VALUES ('$nome', '$cpf', '$email', '$telefone')" );

				//$sql = mysql_query("INSERT INTO clientes (nome,cpf,email,telefone) VALUES ('" .  $_POST["$nome"] ."','" .
   				//$_POST ["$cpf"] . "'," . $_POST["$email"] . "," . $_POST["$telefone"] . ")"); 
   				//echo "<h1>Cadastro Realizado com Sucesso</h1>";


				}

				
			
		
		 ?>

		 <a href="index.php">Voltar</a>
</body>
</html>