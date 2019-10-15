<?php 
// 1-e ,2 , 4 -segunda parte ( $funcoesExecutadas++) , 6 = não esta pegando a posição correta 

/* 1. Criar um arquivo chamado funcoes.php:
a. Definir uma função maior() que receba 3 números e retorne o maior
deles.
b. Definir uma função tabela() que receba um parâmetro base
(número inicial), um parâmetro limite (número máximo), e retorne
um array com a sequência de números a partir do número base até
o número limite.
c. Definir uma variável chamada numeroMagico, que contenha um
número. Ela deverá estar na primeira linha do nosso código PHP.
d. Modificar maior() de forma que, se receber apenas 2 parâmetros, a
função compare esses dois números com o número da variável
numeroMagico.
e. Modificar função tabela() de forma que, se a receber apenas um
parâmetro, a função use numeroMagico como limite.*/

//letra a
function maior($a, $b, $c){
    if($a>$b && $a>$c){
        echo "O valor maior é: $a";
    }elseif($b>$a && $b>$c){
        echo "O maior valor é: $b";
    }else{
        echo "O maior valor é: $c";
    }
}
//letra b
function tabela($inicial, $limite){
    $inicial = 100;
    $limite = 200;
}
//letra c
    $numeroMagico = 10;

//letra d
    function maiorModificado($numeroA, $numeroB){
        global $numeroMagico;
        if($numeroA && $numeroB == $numeroMagico){
            echo "Os números são iguais";
        } else{
            echo "Os números são diferentes";
        }
    }
//letra e

/*2. Criar um arquivo chamado superficie.php:
a. Definir uma função triangulo() que retorne sua superfície.
b. Definir uma função retangulo() que retorne sua superfície.
c. Definir uma função quadrado() que retorne sua superfície.*/



/*3. Criar arquivo chamado incluir.php imprima na tela a seguinte string “Sou o
arquivo incluir”.
a. Incluir neste documento 0 arquivo boletos.php. O que acontece? 
b. Substituir include por require. O que acontece? (testar mensagens
de erros).
c. Agora sim, criar na mesma pasta um arquivo chamado boletos.php
que faça somente echo “Olá, Mundo”. O que acontece agora com
no arquivo incluir.php?
d. No arquivo incluir.php, substituir o require por include, e incluir 3
vezes o mesmo arquivo. O que acontece?
e. O arquivo incluir.php, substituir todos os include por include_once.
O que acontece?*/

//letra a
echo "Ele aparece o erro de que não encontrou o arquivo boletos.php para incluir, porém continua o código
e printa na tela a string";

//letra b
echo "Ele aparece o erro de que não encontrou o arquivo boletos.php para incluir, porém continua o código
e naão continua com o código";

//letra c
echo "Ele inclui o conteúdo de boletos.php no arquivo incluir.php";

//letra d
echo "Ele triplica o conteúdo de boletos.php, pois estamos chamando o mesmo 3x";

//letra e
echo "Ele não triplica mais o conteúdo, pois o include_once permite que seja incluido apenas uma vez";

/*4. Criar uma arquivo chamado tudoJunto.php. O conteúdo da primeira linha
deve ser $funcoesExecutadas = 0. Abaixo disso, deve ser incluído nele o
arquivo funcoes.php.
Em seguida, modifique cada função de funcoes.php para que, no início de
cada uma haja o código: $funcoesExecutadas++.
Teste executar cada função e observe o quanto a variável funções e ver
quanto vale $funcoesExecutadas. Isso funciona bem? O que acontece?*/

/*5. Caso após o exercício anterior tenha aparecido algum erro na tela,
modificar a variável em cada função com a palavra reservada global para
que funcione.*/


/*6. Utilizando a função strpos(), encontrar a posição da primeira aparição da
palavra "php" dentro da frase: "Adoro php! -Eu também adoro php!" */
    $frase = "Adoro php! -Eu também adoro php!";
    echo strpos($frase, "php");
?>