<?php   

    /* conexão com banco de dados via pdo */
    /*criar uma variavel para conexão , informar qual o tipo de banco de dados que está utilizando, 
    depois informar o servidor, informar o banco de dados e informar a porta do servidor */
    $host = 'mysql:host=localhost;dbname=loja;port=3307';
    /*Informar o usuário e senha do banco de dados*/
    $user = 'root';
    $password = '';
    /* a variável db vai armazenar as informações do banco de dados informados acima
    Cria uma nova conexão em PDO */
    $db = new PDO ($host, $db_user, $db_passs);
    /*FETCHALL = todos os dados que ele receber do banco de dados ele TRANSFORMA a consulta em um array */
    /*FETCH_ASSOC = array associativo */