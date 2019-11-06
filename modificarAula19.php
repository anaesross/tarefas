<?php

/*b. arquivo modificar.php deve ter 2 botões:
→ O primeiro será o botão “Reiniciar”, que quando for ‘cliclado’ deve
colocar $_SESSION[“contador”] em 0 (zero).
→ O segundo será “Aumentar”, e deve aumentar o valor em 1.
Testar as modificações.*/

/* ($reiniciar){
    $_SESSION["contador"]
} */
//$aumentar = $reiniciar;

if(!empty($_GET)) {
    
    session_start();
    
    if(isset($_GET['reiniciar'])) {
        $_SESSION['contador'] = 0;
    }
    if(isset($_GET['aumentar'])) {
        
        if(!empty($_SESSION['contador'])) {
            $_SESSION['contador']++;
        }
        else {
            $_SESSION['contador'] = 1;
        }
    }
}

/*$_SESSION["contador"] = $contador;
   for($contador = $reinicar; $contador < $aumentar; $contador++){
       echo $contador;
   }
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tarefa</title>
</head>
<body>     
    <form action='' method='get'>
        <button type="submit" name="reiniciar" class="btn btn-outline-primary">Reiniciar</button> 
        <button type="submit" name="aumentar" class="btn btn-outline-success">Aumentar</button>
    </form>
</body>
</html>