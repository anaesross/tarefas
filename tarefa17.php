<?php 
/*
1. Criar uma variável $a contendo um array ( 'a'=>1, 'b'=>2, 'c'=>'Eu <3 JSON'):
a. Fazer echo da variável $a.
b. Utilizando json_encode, transformar o array em um json e atribuí-lo
a $a.
c. Fazer echo da variável $a.
d. Criar uma nova variável $b contendo o json_decode da variável $a.
e. Fazer echo de $b.
f. Imprimir a frase “Eu <3 JSON | 1 | 2 |” utilizando os dados da variável
$b.
*/

$a = ['a'=>1, 'b'=> 2, 'c'=> 'Eu <3 JSON'];

//letra a
//echo $a;
//letra b
$a = json_encode($a);
//letra c
echo $a;
//letra d
$b = json_decode($a, true);
//letra e
echo $b;
//letra f
echo $b['c']; echo $b['a']; echo $b [ 'b'];



/*
2. Criar um arquivo categorias.json com os seguintes dados:
{“categorias” : [
{“id”: 1, “nome”: “Esportes”},
{“id”: 2, “nome”: “História”},
{“id”: 3, “nome”: “Entretenimento”},
{“id”: 4, “nome”: “Geografia”},
{“id”: 5, “nome”: “Arte”}
]}
Ler o arquivo e imprimir uma checkbox para cada categoria.
Tarefas - ARQUIVOS
*/

/*
3. Criar um arquivo novo chamado arquivos.php.
a. Criar uma função que verifique se existe um arquivo chamado
texto.txt no mesmo diretório (pasta) de arquivos.php. Se o arquivo
existir, deve ser aberto com direitos de leitura e escrita, para que
seja possível adicionar informações. Se ele não existir, deve ser
criado com direitos de leitura e escrita.
b. A frase “Olá mundo! testando.” deve ser escrita 50 vezes no arquivo,
1 vez por linha. Depois disso, o arquivo deve ser fechado.
c. Mostrar o conteúdo do arquivo texto.txt, lendo todo o arquivo de
uma vez.
d. Mostrar o conteúdo do arquivo texto.txt, lendo e imprimindo linha
por linha.
e. Excluir o arquivo texto.txt
f. Criar um novo arquivo chamado texto2.txt contendo o texto: “Olá
novamente, mundo!”.
g. Escrever no arquivo texto2.txt “Este texto sobrescreve o anterior?”.
E verificar se ele realmente sobrescreve o texto que estava no
arquivo.
h. Escrever no arquivo texto2.txt: “NÃO!” depois do texto existente em
texto2.txt.. */

?>