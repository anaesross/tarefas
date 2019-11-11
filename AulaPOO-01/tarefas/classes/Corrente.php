<?php 
require_once 'Conta.php';

class Corrente extends Conta
{
    private $chqueEspecial;

    public function __construct()
    {
        parent::__construct(); // chama metdo da classe pai        
        $this->chqueEspecial = 100;
    }

    public function depositarCheque($valor)
    {        

    }

    public function sacar($valor)
    {
        if(($this->getSaldo() - $valor) < ($this->chqueEspecial * - 1 )) {
            $this->setSaldo($this->saldo - $valor);
        }
    }

    public function sacar2($valor) 
    {
        parent::sacar($valor);
    }
}