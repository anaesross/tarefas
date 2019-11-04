<?php

/*1. Criar dois arquivos: mostrar.php e modificar.php
a. arquivo mostrar.php só deve imprimir $_SESSION[“contador”] (se existir).
Neste arquivo, é necessário imprimir o valor do contador.*/

if(isset($_SESSION["contador"])){
    echo $_SESSION["contador"];
} else {
    echo "Não existe sessão";
}

?>