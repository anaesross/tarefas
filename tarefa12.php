<?php
/*
1.Criar as seguintes variáveis e mostrá-las usando echo e var_dump:
a. Uma variável com um número inteiro.
b. Uma variável com um número decimal.
c. Uma variável com um caractere, usando aspas duplas.
d. Uma variável com um caractere, usando aspas simples.
e. Uma variável com uma string, usando aspas simples. CADEIA DE CARACTERES
f. Uma variável com uma string, usando aspas duplas.
g. Atribuir uma string de caracteres à variável do ponto a.
h. Atribuir um número decimal à variável do ponto e.
i. O que acontece com o tipo de dado das variáveis do ponto g e do ponto h?
j. O que acontece se atribuirmos outro valor numérico à variável do ponto a,
mas entre aspas?
*/

$inteiro = 1;
$decimal = 10.5;
$caracsimples = 'a';
$caracduplas = 'b';
$stringduplas = "duplas";
$stringsimples = 'simples';

//letra g e h
$inteiro = 'caracter';
$stringsimples = "10";

//letra i
// Resposta : A $inteiro não é reconhecida $stringsimples fica como uma string, mesmo sendo número estão dentro de "" = string/char

//letra j
// vira uma string
echo $inteiro;
var_dump($inteiro) . "<br>";

echo $decimal;
var_dump($decimal) . "<br>";

echo $caracsimples;
var_dump($caracsimples) . "<br>";

echo $caracduplas;
var_dump($caracduplas) . "<br>";

echo $stringsimples;
var_dump($stringsimples) . "<br>";

echo $stringduplas;
var_dump($stringduplas) . "<br>";

echo "<hr>";

/*
2. Com base na frase “Três pratos de trigo para três tigres tristes”, criar uma variável
para cada palavra, de forma que o nome de cada variável indique a posição da
palavra na frase.
a. É possível atribuir um número ($1, $2, $3) como nome da variável?
b. Atribuir a cada variável sua posição numérica escrita como texto ($um,
$dois, $tres).
c. Imprimir a frase usando todas as variáveis declaradas.
d. Imprimir uma frase (diferente da feita acima) usando pelo menos duas
variáveis já declaradas no ponto anterior. 
*/

//letra a  = não, pois nome de varável nao pode contar números de início.
//letra b 

$zero = 'três';
$um = 'pratos';
$dois = 'de';
$tres = 'trigo';
$quatro = 'para';
$cinco = 'três';
$seis = 'tigres';
$sete = 'tristes';

echo $zero . " " . $um . " " . $dois . " " . $tres . " " . $quatro . " " . $cinco . " " . $seis . " " . $sete . "<br>";

echo "Eu tenho $zero $seis";

echo "<hr>";

/* 
3.Declarar as variáveis a seguir e executar o seguinte código. Substituir a variável
$meuDado pelas variáveis declaradas no neste exercício.
Por último, executar o arquivo e observar se o tipo de dado retorna true ou false.
 */
$variable01 = true; //verdadeiro
$variable02 = false; //false
$variable03 = 0; //falso
$variable04 = 1; //verdadeiro
$variable05 = 6; //verdadeiro
$variable06 = ''; //falso
$variable07 = "3"; //verdadeiro
$variable08 = "true"; //verdadeiro
$variable09 = 'false'; //verdadeiro
$variable10 = null; //falso

function tipoDado($varN)
{
    if ($varN == true) {
        echo 'o valor ' . $varN . ' é verdadeiro.';
    } else {
        echo 'o valor ' . $varN . ' é falso.';
    }
}
tipoDado($variable10);

echo "<hr>";

/*
4. Criar um array numérico com 5 strings de animais diferentes. Em seguida, executar
um var_dump para ver os resultados.
a. Adicionar mais 2 animais ao final do array e executar outro var_dump para
ver os resultados.
b. Imprimir a seguinte oração “Eu gosto de animais: animal1, animal2, ...” com
os 7 animais que declaramos.
c. Substituir o primeiro animal por outro novo e imprimir o resultado (desafio).
d. Adicionar um animal novo na posição 100 e imprimir o resultado (desafio).
e. Adicionar um animal novo na posição 16 e imprimir o resultado (desafio). 
*/

$array = ['leão', 'macaco', 'rato', 'cachorro', 'gato'];
echo "<pre>";
var_dump($array);

array_push($array, 'peixe adicionado', 'coelho adicionado');
echo "<pre>";
var_dump($array);

//letra c
array_splice($array,0,1,"chinchila"); // 0 = a partir da posição do array que vai tirar
                                      // 1 = quantidade de valores que gostaria de retirar
                                      // "chinchila" = valor que gostaria de adicionar no array 

echo 'Eu gosto de animais: ' . $array[0] . "," . $array[1] . "," . $array[2] . "," . $array[3] . "," . $array[4] . "," . $array[5] . "," . $array[6];

//letra d
$array[100] = "peixe";

//letra e
$array[16] = "tartaruga";

var_dump($array);
echo "<hr>";
/* 
5.Criar um array associativo que contenha as seguintes propriedades de um carro:
Marca, Modelo, Cor, Ano e Placa.
Em seguida, executar um var_dump para ver os resultados.
a. Adicionar o nome do dono na posição 0 (zero) do array e imprimir o
resultado.
b. Adicionar nome da empresa seguradora na posição 14 e imprimir o
resultado. 
*/
$arrssociativo = ['marca' => 'fiat', 'modelo' => '500', 'cor' => 'prata', 'ano' => '2019', 'placa' => 'efw1212'];
echo "<pre>";
var_dump($arrssociativo);

$arrssociativo = ["nome" => "Anaê"] + $arrssociativo; //adiciona um novo array associativo no array ja existente
//na primeira posição;


echo "<pre>";
var_dump($arrssociativo);

echo "<hr>";

/*
6. Declarar a variável $inteiro e $decimal, dê valores à elas. Com base nisso:
a. Executar um echo com a soma dos dois valores.
b. Executar um echo com a subtração dos dois valores.
c. Executar um echo com a divisão dos dois valores.
d. Executar um echo com a multiplicação dos dois valores.
e. Atribuir a uma nova variável o resto da divisão dos valores e mostrar a nova
variável.
f. Adicionar 1 a $inteiro e $decimal.
g. Adicionar 5 a $inteiro e subtrair 0,6 de $decimal.
h. Na mesma linha, criar a variável $resultado, cujo valor seja o resultado da
multiplicação $inteiro * 2, adicionar $decimal e dividir tudo pela metade de
$inteiro. 
*/
$inteiro = 5;
$decimal = 10;

//letra a
$soma = $inteiro + $decimal;
echo $soma."<br>";

//letra b
$sub = $inteiro - $decimal;
echo $sub."<br>";

//letra c
$div = $inteiro / $decimal;
echo $div."<br>";

//letra d
$multi = $inteiro * $decimal;
echo $multi."<br>";

//letra e
$resto = $inteiro % $decimal;
echo $resto."<br>";

//letra f
$inteiroUm = $inteiro + 1;
$decimalUm = $decimal + 1;

//letra g
$inteiros = $inteiroUm + 5;
$decimais = $decimalUm - 0.6;

//letra H
$resultadoConta  = ($inteiros * 2) + $decimal / ($inteiros / 2);

echo $resultadoConta;

echo '<hr>';

/* 
7. Declarar uma variável com a string ‘Olá’ e outra com a string ‘mundo!’.
a. Em uma nova variável, concatenar as variáveis criadas recentemente para
formar “Olá mundo!”.
b. Criar uma nova variável que concatene a variável criada no ponto a, e
concatenar à ela a string ‘PHP é o máximo’. 
*/
$variable = "Olá";
$variable001 = "mundo!";

//letra a
$nova = $variable . " " . $variable001;
echo $nova . "<br>";
//letra b
$resultado = $nova . " PHP é o máximo";
echo $resultado . "<br><hr>";
