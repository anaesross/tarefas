<?php
/*
2. Crie um sistema de cadastro (página de registro que redireciona para
página que exibe todos os usuários cadastrados). No cadastro é
necessário que o usuário possa enviar imagem de perfil e que cada
usuário receba um id.
DICA: salvar cadastro de usuário em um arquivos .json para possibilitar
consultas à cadastros posteriores.
Recomendamos trocar o nome do arquivo enviado (nome quando é salvo) pelo
id do usuário.
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sistema Cadastro</title>
</head>
<body>
    <main class="container">
        <form method="posto" action="#">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Digite Seu nome">
            </div>
            <div class="form-group">
                <label>Registro(id)</label>
                <input type="text" class="form-control" id="registro" placeholder="Digite seu registro">
            </div>
            <div class="form-group">
                <label>Selecione sua imagem</label>
                <input type="file" class="form-control" id="imagem" placeholder="Selecione sua imagem">
            </div>
            <div class="form-group">
                <label>Selecione seu currículo</label>
                <input type="file" class="form-control" id="imagem" placeholder="Upload do CV">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </main>
</body>
</html>