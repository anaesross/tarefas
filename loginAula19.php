<?php
/*b. Em login.php, verificar a existência do e-mail, se a senha está correta e
se os seguintes casos são cumpridos:
1. Caso os dados não existam, mostrar uma mensagem avisando que os
dados estão incorretos e um link (botão) que volte para a página de
cadastro;
2. Se os dados existirem, fazer o login, salvá-los em session e
redirecionar para página de perfil do usuário (com suas informações
exibidas na tela) e que permita edição deles;*/

function doLogin($auth)
{
    //se o valor que eu recebi do form for igual a  vazio ou  igual diferente do banco
    if($_POST['email'] == null || $_POST['email'] != $auth['email']){
        echo "Dados não localizados, favor conferir!";
    }else{
        session_start($auth);
        $dados=
        [ 
            $_SESSION['nome'],
            $_SESSION['email'], 
            $_SESSION['senha']
        ];
        header('location:autenticadoAula19.php')
    }
}
?>