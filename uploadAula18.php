<?php 

/*a. upload.php deve ter um botão para fazer upload de um arquivo no
servidor pelo método post e você precisa salvá-lo em uma pasta
chamada “uploads”.
OBS: caso já exista um arquivo com o mesmo nome do que você
está enviando, o usuário precisa ser avisado e não pode salvar o
arquivo.*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tarefa</title>
</head>
<body class="container">
    <form action="download.php" method="Post" enctype="multipart/form-data">
        <label>Selecione um arquivo:</label>
        <input class="form-control col-5" type="file" name="imagem"/>
        <button class="btn btn-outline-success mt-5" type="submit">Enviar</button>
    </form>    
</body>
</html>

<?php 
$arquivo= "imagem.jpg";
$abrindoArquivo = fopen($arquivo, 'w');
if(file_exists($arquivo)){
    echo "Já existe um arquivo com esse nome";
} else {
    echo $abrindoArquivo;
}
?>