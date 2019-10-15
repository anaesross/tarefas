<?php
//Criando um arquivo e abrindo ele
    $nomeArquivo = "dados.txt";
//     $aberturaAquivo = fopen($nomeArquivo, "r");

//     var_dump($aberturaAquivo);

// //Pegando o tamanho do arquivo
//    /*  $tamanho = filesize('dados.txt');
//     echo $tamanho; */

// //Inserindo conteúdo no arquivo aberto
//     //fwrite($aberturaAquivo,"beleza?");
// //armazenando o conteúdo do arquivo
// $tamanho = filesize($nomeArquivo);

// $conteudo = fread($aberturaAquivo, $tamanho);

// //Fechando o arquivo criado e editado
//     fclose($aberturaAquivo);
// //fim

//faz o fopen fwrite e fclose - get = puxa informações de um arquivo

// $conteudo = file_get_contents($nomeArquivo); 
// $conteudo = file_get_contents('https://www.uol.com.br/');

// echo $conteudo;
//FILE_APPEND =  nao sobescreve o conteúdo do arquivo ele soma o que já tem com o novo.
//FILE_APPEND = é uma constante, esse valor ele não muda "uma variavel que nao muda"
file_put_contents($nomeArquivo, "Olá Mundo", FILE_APPEND);

//Criando uma constante
define("Nome constante", "valor da constante");
