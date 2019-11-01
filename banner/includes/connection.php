<?php
    function conectarBanco(){
    header("Content-type: text/html; charset=utf-8"); 
    $host = 'mysql:host=localhost;dbname=escola;port=3307';
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
    $user = 'root';
    $pass = '';
    return $db = new PDO($host, $user, $pass);    
    }
/*a  conexão com o banco dentro da function, faz com que nós escolhermos o momento de abrir a conexão
com o banco de dados, apenas deixar o include e chamar ela na outra página a conexão do banco ja abre
automaticamente. Resumindo : 
Com function = abre o banco de dados quando charmamos a função de conectar
Sem function = assim ele já abre a conexão assim que abrir a página.
*/
?>

