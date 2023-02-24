<?php 
session_start();
$db = array(
            'host'=>'localhost',
            'user'=>'root',
            'pass'=> '',
            'nm'=>'db_file'
        );

//$conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['nm']) or die ('Sem Conecção ao database');

function mensage($txt){
    echo '<script>alert("'.$txt.'");</script>';
}

function CadUser($nm, $mail, $pass){
    $query = 'SELECT * FROM tb_user WHERE nm_user = "'.$nm.'" OR mail_user = "'.$mail.'"';
    $res = $GLOBALS['conn']->query($query);
    
    $rows = mysqli_num_rows($res);
    if($rows > 0){
        mensage('Nome de usuário e/ou email já utilizados!');
    }else if($rows == 0){
        $query = 'INSERT INTO tb_user (nm_user, mail_user, pass_user) VALUES ("'.$nm.'", "'.$mail.'", "'.$pass.'")';
        $res = $GLOBALS['conn']->query($query);
        if($res){
            mensage('Cadastro realizado com sucesso! :), Faça login para entrar!');
        }else{
            mensage('Erro ao realizar cadastro ;-;, tente novamente!');
        }
    }
}

function Login($nm, $pass){
    $query = 'SELECT * FROM tb_user WHERE nm_user = "'.$nm.'" AND pass_user = "'.$pass.'"';
    $res = $GLOBALS['conn']->query($query);
    
    $rows = mysqli_num_rows($res);
    if($rows > 0){
        header('Location: home.php');
    }else{
        mensage('Nome de usuário e/ou senha inválidos!! Tente novamente.');
    }
}

function UpFile($file){
    $dir = 'FilesSave/';
    if(move_uploaded_file($file['tmp_name'], $dir.'/'.$file['name'])){
        $query = 'INSERT INTO tb_file (nm_file) VALUES ("'.$file['name'].'")';
        $res = $GLOBALS['conn']->query($query);
        
        if($res){
            mensage('Upload realizado com sucesso!:)');
        }
    }else{
        mensage('Erro ao realizar upload ;-;');
    }
}