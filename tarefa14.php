<?php

//6-c , 7, 8, 9 - incompleto

/* 1. Utilizando um for, imprimir os números de 1 a 100. */

for($i=1; $i<101; $i++){
    echo $i."<br>";
}

echo "<hr>";
/* 2. Modificar o exercício anterior para que, em vez de parar no número 100, pare
em um número gerado aleatoriamente entre 0 e 100. */

$x = mt_rand(0,100);
for($i = 0; $i <= $x; $i++){
    echo $i. "<br>";
}
echo "<hr>";
/* 3. Mostrar a tabela de multiplicação do 2 utilizando um for. */
for($i = 0; $i <= 10; $i++){
    echo $i*2;
}
echo "<hr>";
/* 4. Utilizando while, faça um programa que lance uma moeda (que receberá um
número aleatório que pode ser 0 ou 1) até tirar 5 vezes cara (representado
pelo número 1).
O quando loop terminar, você precisará imprimir o número de lançamentos
que teve que acontecer até tirar 5 vezes cara. */
$tentativa = 1;
$quantidade = 0;
do{
    $moeda = mt_rand(0,1);
    $quantidade = $quantidade + $moeda;
        $tentativa++;
} while($quantidade < 5);
echo $tentativa;

echo "<hr>";
/* echo "Foram usadas $tentativa"; */

/* 5. Utilizando um do/while, realizar um programa que lance a moeda até tirar
cara (o número 1). No final do programa, imprimir quantos lançamentos da
moeda forem necessários. */

$lancamentos = 0;
do{
    $cara = rand(0,1);
    $lancamentos++;
} while ($cara != 1); 

echo "foram utilizadas $lancamentos lançamentos.";

echo "<hr>";
/* 6. Definir um array com 5 strings que sejam nomes. Percorrer esse array para
imprimir todos os nomes na tela.
a. Resolver este problema com um for.
b. Resolver este problema com um foreach.
c. Resolver este problema com while.
d. Resolver este problema com um do/while. */

$array = ['maria','tatiana', 'luisa', 'ana', 'lilian'];
//letra a
for($i = 0; $i < count($array); $i++){
    echo $array[$i]."<br>";
}
echo "<hr>";
//letra b
foreach($array as $nome){
    echo $nome."<br>";
}
echo "<hr>";
//letra c
$i = 0;
while($i > count($array) ){
    $resultado = $array[$i];
    echo $resultado."<br>";
    $i++;
}
echo "<hr>";
//letra d

/* do{
    $resultadoArray = $array[$i];
    $i++;
    echo $resultadoArray[$i];
}while($i > count($array); */

/* 7. Definir um array com 10 números aleatórios entre 0 e 10. Percorrer esse array
para imprimir todos os números. A execução deve terminar se algum dos
números encontrados for 5 (a mensagem impressa deve ser “Encontramos um
5!”).
a. Resolver este problema com um for.
b. Resolver este problema com um while.
c. Resolver este problema com um do/while. */

$numeros = [0 ,1 ,2 ,3 ,4 ,5, 6, 7, 8, 9];
//letra a

/*     for($i = 0 ; $i < count($numeros); $i++){
        echo "Encontramos o número 5";
    }
 */
//letra b


//letra c


/* 8. Utilizando a função “Range”(http://php.net/manual/en/function.range.php),
criar um intervalo de letras (de a até n), imprimir uma frase que diga “Na
posição [index], está o valor [value]”.
Onde [value] será substituído por cada valor do array e [index] representa o
índice. */

foreach( range('a' , 'n') as $letter){
    echo "Na posição , está o valor $letter";
}

echo "<hr>";


/* 9. Definir uma variável $mascote que seja um array associativo
a. No índice animal, deve dizer que animal é.
b. No índice idade, deve dizer a idade.
c. No índice altura, deve dizer a altura.
d. No índice nome, deve dizer o nome
e. Percorrer os valores do array com um foreach que imprima (por exemplo):
animal: cachorro
idade: 5
altura: 0,60
nome: Sonic */

$mascotes = ["animal"=>"cachorro", "idade"=> 3, "altura"=> 0.60, "nome"=>"Sonic"];

foreach($mascotes as $mascote){
    echo $mascote."<br>";
    
}
echo "<hr>";
/* 11. A partir de um arquivo com a seguinte variável definida:
$ceu = ["Itália"=>"Roma", "Luxemburgo"=>"Luxemburgo",
"Bélgica"=> "Bruxelas", "Dinamarca"=>"Copenhagen",
"Finlândia"=>"Helsinki", "França" => "Paris",
"Eslováquia"=>"Bratislava", "Eslovênia"=>"Liubliana",
"Alemanha" => "Berlim", "Grécia" => "Atenas",
"Irlanda"=>"Dublin", "Holanda"=>"Amsterdã",
"Portugal"=>"Lisboa", "Espanha"=>"Madri",
"Suécia"=>"Estocolmo", "Reino Unido"=>"Londres",
"Chipre"=>"Nicósia", "Lituânia"=>"Vilnius", "República
Tcheca"=>"Praga", "Estônia"=>"Tallinn",
"Hungria"=>"Budapeste","Letônia"=>"Riga", "Malta"=>"Valletta",
"Áustria" => "Viena", "Polônia"=>"Varsóvia"];
Criar um script que mostre o nome da capital e o país a partir da variável $ceu.
Opcional: Organizar a lista por nome de país.
Exemplo de output:
A capital da Holanda é Amsterdã.
A capital da Grécia é Atenas.
A capital da Alemanha é Berlim. */

/* 12. A partir de um arquivo com a seguinte variável definida:
$ceu = [
"Argentina" => ["Buenos Aires", "Córdoba", "Santa Fé"],
"Brasil" => ["Brasília", "Rio de Janeiro", "São Paulo"],
"Colômbia" => ["Cartagena", "Bogotá", "Barranquilla"],
"França" => ["Paris", "Nantes", "Lyon"],
"Itália" => ["Roma", "Milão", "Veneza"],
"Alemanha" => ["Munique", "Berlim", "Frankfurt"]
];
Criar um script que mostre o nome de cada país e suas cidades a partir da
variável $ceu com o seguinte formato:
As cidades da Argentina são:
● Buenos Aires
● Córdoba
● Santa Fé
As cidades do Brasil são:
● Brasília
● Rio de Janeiro
● São Paulo */


/* 13. A partir do exercício anterior:
● Adicionar a cada país um dado extra, além das cidades, chamado
naAmerica. Esse dado deve receber o valor true ou false (caso exista na
américa ou não).
● Imprimir assim como no exercício 12 porém apenas deverão aparecer na
tela os países que estejam na américa.
IMPORTANTE: Para que isso funcione bem, os alunos devem criar um array
associativo para cada país, de forma que cada país tenha os dados de suas
cidades e naAmerica (se estão ou não). */

?>