<?php
	include('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="css/login.css">
	    <title>Login</title>
	</head>
	<body>
	    <main>
	        <form method="POST">
	            <p>Login</p>
	            <input type="name" name="name" placeholder="Nome" class="input">
	            <input type="password" name="pass" placeholder="Senha" class="input">
	            <button name="entrar">Entrar</button>
	            <a href="cadastro.php">Não possui conta? Cadastre-se!</a>
	        </form>
	    </main>
	</body>
</html>
<?php
	if(isset($_POST['entrar'])){
	    Login($_POST['name'], $_POST['pass']);
	}
?>