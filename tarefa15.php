<?php 

include_once('imprimirAula15.php');
/* 1. Criar um arquivo imprimir.php que imprima a variável $_GET através de
um var_dump na tela..*/
var_dump($_GET);


/*2. Com base no seguinte código:
<!DOCTYPE HTML>
<html>
<body>
<form action="imprimir.php" method="get">
Nome: <input type="text" name="nome"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
</body>
</html>
a. O que acontece agora em imprimir.php?
b. Modificar imprimir.php para que imprima algum valor específico
de $_GET.
c. Modificar imprimir.php para que imprima todos os valores
utilizando um foreach.*/

//letra a = aparece um formulário
//letra b 

echo $_GET(name);

//letra c

foreach($_GET as $get){
    echo $get;
}

/*3. Modificar o HTML para que ele envie os dados através de POST. Como
deveríamos modificar imprimir.php para que continue funcionando?*/

echo "Inserir method =POST";

/*4. Adicionar ao formulário os seguintes inputs:
a. Adicionar uma checkbox com opções, que responda à pergunta
“Como você ficou sabendo deste site?”.
b. Adicionar um radio button para selecionar o gênero .
c. Adicionar um select de 1 a 10 que responda à pergunta “Dormiu
bem ontem? Dê uma nota:”.
d. Adicionar uma checkbox para aceitar “Termos e Condições”.
e. Completar o formulário, selecionando várias opções das
checkboxes, e enviá-lo através do método POST. O resultado
mudou como você esperava?*/

/*5. Testar a função de php getAllHeaders() e imprimir o resultado. O que
encontramos? Imprimir todos os valores usando foreach.*/

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}

/*6. Assim como imprimimos $_POST e $_GET, existem outras variáveis
globais vamos imprimir. Testar cada variável em um pedido vazio ou
vindo de um formulário (utilizando o var_dump() ): */
echo $_SERVER;
echo $_FILES;
echo $_REQUEST;
echo $_SESSION;
echo $_ENV;
echo $_COOKIE;
echo $GLOBALS;


?>