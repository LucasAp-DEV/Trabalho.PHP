<?php

require_once 'model/Aeroporto.php';
require_once 'model/Aeronave.php';
require_once 'model/Passageiro.php';
require_once 'model/Piloto.php';
require_once 'model/Comissario.php';
require_once 'model/Voo.php';

//criando aeroportos
$aeroportoOrigem = new Aeroporto('GRU', 'São Paulo');
$aeroportoDestino = new Aeroporto('JFK', 'Nova York');

//criando aeronave
$aeronave = new Aeronave('Boeing 737', 150);

//criando piloto
$piloto = new Piloto('João Silva');

//criando comissários
$comissarios = [
    new Comissario('Maria Souza'),
    new Comissario('Carlos Oliveira')
];

//criando voo
$voo = new Voo($aeroportoOrigem, $aeroportoDestino, $aeronave, $piloto, $comissarios);

//adicionando escalas
$escala1 = new Aeroporto('GIG', 'Rio de Janeiro');
$escala2 = new Aeroporto('MIA', 'Miami');

$voo->adicionarEscala($escala1);
$voo->adicionarEscala($escala2);

//adicionando passageiros
$passageiro1 = new Passageiro('Lucas Silva', 24, 'Econômica');
$passageiro2 = new Passageiro('Pedro Oliveira', 35, 'Executiva');
$passageiro3 = new Passageiro('Eloisi Carolini', 19, 'Executiva');

$voo->adicionarPassageiro($passageiro1);
$voo->adicionarPassageiro($passageiro2);
$voo->adicionarPassageiro($passageiro3);

// exibindo informaoçes do voo
echo "Informações do voo:<br>";
echo "Origem: {$voo->getOrigem()->getCidade()} ({$voo->getOrigem()->getCodigo()})<br>";
echo "Destino: {$voo->getDestino()->getCidade()} ({$voo->getDestino()->getCodigo()})<br>";
echo "Escala(s):<br>";
foreach ($voo->getEscalas() as $escala) {
    echo "- {$escala->getCidade()} ({$escala->getCodigo()})<br>";
}
echo "Aeronave: {$voo->getAeronave()->getModelo()} (Capacidade: {$voo->getAeronave()->getCapacidade()})<br>";
echo "Piloto: {$voo->getPiloto()->getNome()}<br>";
echo "Comissários:<br>";
foreach ($voo->getComissarios() as $comissario) {
    echo "- {$comissario->getNome()}<br>";
}
echo "Passageiros:<br>";
foreach ($voo->getPassageiros() as $passageiro) {
    echo "- {$passageiro->getNome()} ({$passageiro->getIdade()} anos, {$passageiro->getTipo()})<br>";
}

