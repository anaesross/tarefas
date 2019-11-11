<?php 

class Conta 
{
    private $id;
    private $cliente;
    private $saldo;

    public function __construct()
    {
        $this->saldo = 0;
    }

    public function sacar($valor)
    { 
        if(($this->saldo - $valor) >= 0) {
            $this->saldo -= $valor;
        }
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }

    public function consultar()
    {
        return $this->saldo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

}