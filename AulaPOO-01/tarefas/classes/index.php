<?php 
require_once 'Cliente.php';

$cliente = new Cliente('Anaê');
echo $cliente->getNome();
echo '<br>';
echo 'Saldo Corrente: ' . $cliente->getCorrente()->consultar();
echo '<br>';

$cliente->getCorrente()->depositar(5000);
echo 'Saldo Corrente: ' . $cliente->getCorrente()->consultar();
echo '<br>';

$cliente->getCorrente()->sacar2(5010);
echo 'Saldo Corrente: ' . $cliente->getCorrente()->consultar();
echo '<br>';

$cliente->getCorrente()->sacar(1);
echo 'Saldo Corrente: ' . $cliente->getCorrente()->consultar();
echo '<br>';