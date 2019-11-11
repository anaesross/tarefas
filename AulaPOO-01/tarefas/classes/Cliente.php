<?php 
require_once 'Corrente.php';
require_once 'Poupanca.php';
class Cliente 
{
    
    private $id;
    private $nome;
    private $sobrenome;
    private $rg;
    private $cpf;
    private $contaCorrente;
    private $contaPoupanca;

    public function __construct($nome)
    {
        $this->nome = $nome;
        $this->contaCorrente = new Corrente();
        $this->contaPoupanca = new Poupanca();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCorrente()
    {
        return $this->contaCorrente;
    }

    public function getPoupanca()
    {
        return $this->contaPoupanca;
    }
}
