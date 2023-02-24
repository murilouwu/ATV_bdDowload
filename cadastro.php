<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cad.css">
    <title>Cadastro</title>
</head>
<body>
    <header>

    </header>
    <main>
        <form method="POST">
            <p>Cadastro</p>
            <input type="name" id="name" name="name" placeholder="Nome" class="input">
            <input type="email" id="email" name="mail" placeholder="Email" class="input">
            <input type="password" id="password" name="pass" placeholder="Senha" class="input">
            <button id="cadastrar" name="cad">Cadastrar</button>
            <a href="index.php">Já possui conta? Realizar login!</a>
        </form>
    </main>
</body>
</html>
<?php
    if(isset($_POST['cad'])){
        CadUser($_POST['name'], $_POST['mail'], $_POST['pass']);
    }
?>