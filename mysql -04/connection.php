
<?php   
    /* conexão com banco de dados via pdo */
    /*criar uma variavel para conexão , informar qual o tipo de banco de dados que está utilizando, 
    depois informar o servidor, informar o banco de dados e informar a porta do servidor */
    $host = 'mysql:host=localhost;dbname=escola;port=3306';
    /*Informar o usuário e senha do banco de dados*/
    $user = 'root';
    $password = '';
    /* a variável db vai armazenar as informações do banco de dados informados acima
    Cria uma nova conexão em PDO */
    $db = new PDO($host, $user, $password);
    /*FETCHALL = todos os dados que ele receber do banco de dados ele TRANSFORMA a consulta em um array */
    /*FETCH_ASSOC = array associativo */


    /*criar uma query de consulta */

    /* criar uma variável query para armazenar os dados recebidos */
         
    $query = $db->query('SELECT * FROM alunos WHERE id='.$_GET['id']);
    /*Variável resultado armazena o valor gerado em $query, -> fetchall altera para array e o fetch assoc 
    para array associativo*/ 
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);

    /* echo"<pre>";
    var_dump($resultado); */
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Conexão PDO</title>
    </head>
        <body>
            <h1> Lista de Alunos </h1>
            <ul>    
                <?php foreach($resultado as $aluno){?> <!-- /*pega o resultado da queery e da 
                uma variavel de aluno para que cada linha de resultado seja UM aluno */ -->
                    <li><?php echo $aluno[ 'nome' ];?> </li>
                <?php } ?>
            </ul>
        </body>
  </html>