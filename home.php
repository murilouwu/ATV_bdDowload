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
        <p>UPLOAD/DOWNLOAD</p>
    </header>
    <main>
        <form method="POST" enctype="multipart/form-data">
            <h1>-Upload-</h1>
            <label for="file">Enviar Arquivo</label>
            <input type="file" name="file" id="file">
            <button name="upload">Confimar</button>
        </form>
        <hr>
        <h1 class="dow">-Downloads-</h1>
        <?php
            $query = 'SELECT * FROM tb_file';
            $res = $GLOBALS['conn']->query($query);

            if($res){
                echo '<div class="files">';
                foreach($res as $row){
                    $urlNm = ''; //link do site já que é o localhost no momento não é necessário
                    echo '
                        <div class"file">
                            '.$row['nm_file'].' 
                            <a href="'.$urlNm.'FilesSave/'.$row['nm_file'].'" download>Download</a>
                        </div>
                   ';
                }
                echo '</div>';
            }else{
                echo '<h2>Sem Arquivos Para Download</h2>';
            }
        ?>
    </main>
</body>
</html>
<?php
    if(isset($_POST['upload'])){
        UpFile($_FILES['file']);
    }
?>
