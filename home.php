<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>Home</title>
</head>
<body>
    <header>
        <p>FTP - UPLOAD/DOWNLOAD</p>
    </header>
    <main>
        <form method="POST" enctype="multipart/form-data">
            <h1>Upload</h1>
            <label for="file">Escolha o arquivo para realizar upload:</label>
            <input type="file" name="file" id="file" class="mg">
            <button name="upload" class="mg">Enviar</button>
            <hr>
            <h1>Download</h1>
            <?php
                $query = 'SELECT * FROM tb_file';
                $res = $GLOBALS['conn']->query($query);
                foreach($res as $row){
                    echo '
                    <div class="arquivos">
                        Nome: '.$row['nm_file'].' 
                        <a href="FilesSave/'.$row['nm_file'].'" download>Download</a>
                    </div>
                    ';
                }
            ?>
        </form>
    </main>
</body>
</html>
<?php
    if(isset($_POST['upload'])){
        UpFile($_FILES['file']);
    }
?>