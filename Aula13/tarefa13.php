<?php
    /* 1. Definir duas variáveis com números (à seu critério), comparar usando if para
    decidir qual deles é maior e imprimir a frase “O maior número é ___”, sendo
    que ___ recebe o valor da maior variável que você criou.
    a. Adicionar um else ao código anterior para cobrir o caso inverso. */

    $a = 10;
    $b = 20;
    if($b > $a){
        echo "O maior número é : $b ";
    }else{
        echo "O maior número é : $a ";
    }
    echo"<br><hr>";
    
    /* 2. Usando a função mt_rand(x,y) -onde x é o número mínimo e y é o número
    máximo- você irá gerar um número aleatório entre 1 e 5 (isso é o que a função
    faz).
    Atribua esse número (resultado da função) à uma variável e imprima essa
    variável apenas se o número gerado for 3 ou 5. */
    $resultado = mt_rand(1,5);
    //echo mt_rand(1,5);
    if($resultado == 3 || $resultado == 5){
        echo $resultado;
    }else{
        echo "resultado não foi igual a 3 ou a 5";
    }
    echo "<br>";
    /*3. Utilizando a variável do exercício anterior, imprima “O número NÃO é 3” caso
    essa frase seja verdadeira.
    Caso o número seja 3, imprimir simplesmente o número 3. */

    if($resultado == 3){
        echo "O número é 3";
    }else{
        echo "O número não é 3";
    }

    echo"<br><hr>";

    /* 4. Gerar um número entre 1 e 100 (usar a função math_rand() ), verificar se é
    maior que 50.
    Caso seja verdadeiro, retornar “O número é maior que 50” e, caso seja falso: “O
    número é menor que 50”. */
    echo"Lição QUATRO<BR>";
    $maior = mt_rand(1,100);
    if($maior > 50){
        echo "O número é maior que 50";
    }else{
        echo "O número é menor que 50";
    }

    echo"<br><hr>";

   /*  5. Gerar um número aleatório entre 0 e 100 (lembra qual função podemos
    utilizar?). Se ele for maior que 50 e par, imprimir “O número cumpre a
    condição”. Caso contrário, imprimir “O número NÃO cumpre a condição” */

    $maiorPar = mt_rand(1,100);

    if($maiorPar > 50 && $maiorPar % 2==0){

        echo"O número cumpre os requisistos";
    }else{
        echo"O número não cumpre os resquisitos";
    }

    echo"<hr>";

    /* 6. Aqui criaremos 3 variáveis: idade (onde o dado recebido será um número),
    casado (onde o dado será um booleano) e sexo (dado será uma string que
    pode ser “Masculino”, “Feminino” ou “Outro”).
    Agora sua condição será: se a pessoa tiver mais de 18 anos e não for casada,
    será impressa a mensagem “Boas-vindas”.
    a. Desafio 2: Modificar o exercício para também imprimir “Boas-vindas” se o
    sexo for “Outro”. */
    $idade = 31;
    $casado = true;
    $sexo = "Feminino";

    if($idade > 18 && $casado == true){
        echo "Boas-Vindas";
    }else{
        echo"Não pode entrar";
    }
    echo "<br>";
    //letra a
    $idade = 31;
    $casado = true;
    $sexo = "Outro";

    if($idade > 18 && $casado == true && $sexo == 'Outro'){
        echo "Boas-Vindas";
    }else{
        echo"Não pode entrar";
    }

    echo "<hr>";

    /* 7. Definir uma variável chamada quantidadeDeAlunos, contendo um número. Em
    seguida, escrever o seguinte código: (sem copiar e colar!!)
    if ($quantidadeDeAlunos) {
    echo “true”;
    } else {
    echo “false”;
    }
    a. O que é impresso?
    b. Teste o código agora apagando a declaração da variável quantidadeDeAlunos
    c. Testar com os valores -100, -1, 0, 1 e 100 para quantidadeDeAlunos
    Testar o seguinte código:
    if ($i == 1 ) {
    echo “true”;
    } else {
    echo “false”;
    }
    O que é impresso? */

    $quantidadeDeAlunos = 40;
    if($quantidadeDeAlunos){
        echo "true";
    } else {
        echo "false";
    } 
    echo"<br>";
    //letra a  = true
    //letra b = variável não declarada
    //letra c = false false false true false
    $i = 100;
    if($i == 1){
        echo "true";
    } else {
        echo "false";
    }

    echo"<hr>";

    /* 8. Definir uma variável $numero com um número. Imprimir “O número é par” ou
    “O número é impar”, de acordo com a situação.
    Este exercício deve ser resolvido com um IF Ternário */

    $numero = 5;
    
    echo !($numero % 2) ? 'par' : 'ímpar';

    echo "<hr>";

    /*9. Utilizando mt_rand(), gerar um número aleatório entre 1 e 5 na variável $i.
    Utilizando SWITCH, imprimir “i é igual a X”.
    No lugar de X precisa colocar o valor da variável $i. */
    $i = mt_rand(1,5);
    switch($i){
        case 1: 
            echo "i é igual a $i";
            break;
        case 2: 
            echo "i é igual a $i";
            break;
        case 3: 
            echo "i é igual a $i";
            break;
        case 4: 
            echo "i é igual a $i";
            break;
        case 5: 
            echo "i é igual a $i";
            break;
    }

    echo "<hr>";

    /* 10. Utilizando o mesmo switch, deixar apenas os casos do número 1 e 2. Se o
    número for outro, imprimir “NÃO é igual a 1 ou 2”. */

    $i = mt_rand(1,5);
    switch($i){
        case 1: 
            echo "i é igual a $i";
            break;
        case 2: 
            echo "i é igual a $i";
            break;
        case 3: 
            echo "Não i é igual a $i";
            break;
        case 4: 
            echo "Não i é igual a $i";
            break;
        case 5: 
            echo "Não i é igual a $i";
            break;
    }

    echo "<hr>";

    /* 11. Utilizando mt_rand(), gerar dois números aleatórios entre 1 e 100 na
    variável $x e a variável $y. Imprimir qual é o maior entre os dois ou se são
    iguais. */

    $x = mt_rand(1,100);
    $y = mt_rand(1,100);

    echo $x ." ". $y;

    echo "<br>";

   /*  if(x > y){
        echo "O maior número é $x";
    }elseif(x < y){
        echo "O maior número é $y";
    } else {
        echo "Os números são iguais";
    } */

    //ou utilizando max() = function do math

    echo max($x, $y);

?>