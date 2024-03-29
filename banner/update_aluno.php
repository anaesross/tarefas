<?php include_once("includes/connection.php");
    $db = conectarBanco();

    $query = $db->query('SELECT * FROM cursos');
    $cursos = $query->fetchAll(PDO::FETCH_ASSOC);//aqui a variavel query nao existe mais e sim a cursos

    if(isset($_GET['id'] )){
        $id = $_GET['id']; //recuperando id do aluno na url
    }else if(isset($_POST['id'])){
        $id = $_POST['id']; //recuperando id do aluno pelo formulario
    }    
    else{
        echo "Você deve passar um id";
        exit; // se não tiver o id ele para o código, sem id essa página não tem função
    }

    $query = $db->prepare('SELECT * FROM alunos WHERE id_alunos=?');

    $query->execute([$id]); //o banco envia a informação de um jeito que o php nao consegue ler
    //precisa fazer um fetch_assoc para tornar um array associativo

    $aluno = $query->fetch(PDO::FETCH_ASSOC);

    /* echo"<pre>";
    var_dump($aluno); */    

    /* echo "<pre>";
    var_dump($cursos); */


/*atualizar as informações */
/* var_dump($_POST); */
if($_POST != []){ //questionando se o post é diferente de vazio (os dados vindos do form)
    $nomeAluno = $_POST['nome'];
    $raAluno = $_POST['ra'];
    $cursoId = $_POST['curso'];
    $id = $_POST['id'];
try{
    $query = $db->prepare('UPDATE alunos SET nome=:nome, ra=:ra, curso_id=:curso  WHERE
    id_alunos=:id'); //valores da esquerda sempre serão o do banco o da direito o valor q ele vai 
    //receber do form
    $query->execute([
        "id"=>$id,
        "curso"=>$cursoId,
        "ra"=>$raAluno,
        "nome"=>$nomeAluno
        ]);
         echo "<script>alert('Aluno atualizado com sucesso!')
                location = 'update_aluno.php?id=$id';
                </script>";
    } catch( PDOException $Exception ) {
        echo $Exception->getMessage();
    }
} 
?>
<DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Banner</title>
</head>
<body class="container">
    <h1 class="text-center text-primary mt-5">Atualizar Aluno:</h1>
    <form method="POST" action="update_aluno.php" accept-charset="utf-8">

    <input type="text" hidden name="id" value="<?php echo $id;?>"> <!--puxando o id do aluno-->
    
        <div class="row m-5 bg-light p-5">
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-info">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="<?= $aluno['nome']?>"/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-info">R.A:</label>
                    <input type="text" class="form-control" name="ra" value="<?= $aluno['ra']?>" readonly/>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-info">Curso:</label>
                    <select class="form-control" name="curso">
                        <?php foreach($cursos as $curso): ?>

                        <?php if ($curso['id_cursos'] == $aluno['curso_id']):?> <!--verifica se o curso que está selecionado 
                        eh o curso referente ao aluno citado  -->                         
                            <option selected value="<?= $curso['id_cursos'];?>"><?= $curso['descricao']; ?></option>
                        <?php else: ?>                        
                        <option value="<?= $curso['id_cursos'];?>"><?= $curso['descricao'];?></option>                 
                        <?php endif;?>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-12 m-2 d-flex justify-content-end align-items-center">
            <button type="submit" class="btn btn-success ">Atualizar</button>
            </div>
        </div>
    </form>    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>