<?php 
require_once 'Conta.php';

class Poupanca extends Conta 
{     
    private $percertJuros;

    public function __construct()
    {
        $this->percertJuros = 0.5;
    }

    public function recolherJuros()
    {          
        $juros = $this->saldo * $this->percertJuros;
        $this->saldo += $juros;
    }


}