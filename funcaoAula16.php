<?php
//Exemplo de função com parâmetro
    function tabuada($numero){
        for($i = 0 ; $i<=10; $i++){
            $total = $numero * $i;
            echo $numero."X".$i." = ".$total."<br>";
        }
    }

    tabuada(2);

    echo "<hr>";
//Exemplo de função sem parâmetro
    function logado(){
        echo "Seja Bem Vindo";
    }
    logado();

    echo "<hr>";

//Função Void  = não da retorno(não imprime nada na tela)
    function filmes($assistidos, $naoassistidos){
        $total = $assistidos + $naoassistidos;
    }
    filmes(4, 55);

    echo "<hr>";
// exemplo return - nao retorna o resultado na tela apenas armazena (return e echo são diferentes)
   /*  $a = 10;
    $b = 15;
    function soma(){
        global $a, $b; // a variável não precisa estar dentro da função para chamar a mesma,  nao precisa declarar duas vezes, onde as variáveis estiverem no código ele puxa por causa do comando global.
        $a = $a + 1; //altera no codigo inteiro
        return $a + $b;
    }
    echo soma()."<br>";

    echo $a;
    echo "<hr>"; */

//exemplo echo - sempre mostra os resultados na tela (return e echo são diferentes)
    $a = 10;
    $b = 15;
    function soma(){
        global $a, $b; // a variável não precisa estar dentro da função para chamar a mesma,  nao precisa declarar duas vezes, onde as variáveis estiverem no código ele puxa por causa do comando global.
        $a = $a + 1; //altera no codigo inteiro
        echo $a."<br>";
    }
    soma();
    soma();
    soma();
    soma();
    echo soma();
?>