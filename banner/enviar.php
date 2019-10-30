<?php
    include_once('includes/connection.php');

    /* CADASTRO DO FORMULÁRIO INDEX */
    $nomeAluno = $_POST['nome'];
    $raAluno = $_POST['ra'];
    $cursoId = $_POST['curso'];

    /*faz ele preparar a query apenas, nao pega os valores ainda, questão de segurança*/
    $query = $db->prepare('INSERT INTO alunos (nome, ra, curso_id) 
    VALUES(
        ?,
        ?,
        ?
    )');

    $resultado = $query->execute([$nomeAluno, $raAluno, $cursoId]);

    /* OOOOOUUU muda apenas a syntaxe, faz a mesma coisa e tem o mesmo nível de segurança  */

    $query = $db->prepare('INSERT INTO alunos (nome, ra, curso_id)
    VALUES(:nome, :ra, :curso_id) ');
    
    $resultado = $query->execute([
        "nome"=> $nomeAluno,
        "ra"=> $raAluno,
        "curso_id"=>$cursoId
    ]);
    

    echo "<pre>";
    var_dump($resultado);

