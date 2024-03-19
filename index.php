<?php

require_once 'model/Aeroporto.php';
require_once 'model/Aeronave.php';
require_once 'model/Passageiro.php';
require_once 'model/Piloto.php';
require_once 'model/Comissario.php';
require_once 'model/Voo.php';

$aeroportoOrigem = new Aeroporto('GRU', 'São Paulo');
$aeroportoDestino = new Aeroporto('JFK', 'Nova York');

$aeronave = new Aeronave('Boeing 737', 150);

$piloto = new Piloto('João Silva', 42);

$comissarios = [
    new Comissario('Lucas Aparecido'),
    new Comissario('Jucelino Santos')
];

$distancia = 7672;
$velocidadeMedia = 900;


$voo = new Voo($aeroportoOrigem, $aeroportoDestino, $aeronave, $piloto, $comissarios, $distancia, $velocidadeMedia);

$escala1 = new Aeroporto('GIG', 'Rio de Janeiro');
$escala2 = new Aeroporto('MIA', 'Miami');

$voo->adicionarEscala($escala1);
$voo->adicionarEscala($escala2);

$passageiro1 = new Passageiro('Lucas Silva', 24, 'Econômica');
$passageiro2 = new Passageiro('Pedro Oliveira', 35, 'Executiva');
$passageiro3 = new Passageiro('Eloisi Carolini', 19, 'Executiva');

$voo->adicionarPassageiro($passageiro1);
$voo->adicionarPassageiro($passageiro2);
$voo->adicionarPassageiro($passageiro3);

echo "INFORMAÇÃO DE VOO:<br>";

echo "<br>"; //pulando linha

echo "ORIGEM: {$voo->getOrigem()->getCidade()} ({$voo->getOrigem()->getCodigo()})<br>";

echo "<br>"; //pulando linha

echo "DESTINO: {$voo->getDestino()->getCidade()} ({$voo->getDestino()->getCodigo()})<br>";

echo "<br>"; //pulando linha

echo "VELOCIDADE: {$velocidadeMedia} Km/h <br>";
echo "DISTANCIA: {$voo->getDistanciaMilhas()} milhas<br>";

echo "<br>"; //pulando linha

echo "ESCALA:<br>";
foreach ($voo->getEscalas() as $escala) {
    echo "* {$escala->getCidade()} ({$escala->getCodigo()})<br>";
}

echo "<br>"; //pulando linha

echo "AERONAVE: {$voo->getAeronave()->getModelo()} (Capacidade: {$voo->getAeronave()->getCapacidade()})<br>";

echo "<br>"; //pulando linha

echo "PILOTO: {$voo->getPiloto()->getNome()} ({$voo->getPiloto()->getIdade()} anos)<br>";


echo "<br>"; //pulando linha

echo "COMISSÁRIOS:<br>";
foreach ($voo->getComissarios() as $comissario) {
    echo "* {$comissario->getNome()}<br>";
}

echo "<br>"; //pulando linha

echo "PASSAGEIROS:<br>";
foreach ($voo->getPassageiros() as $passageiro) {
    echo "* {$passageiro->getNome()} ({$passageiro->getIdade()} anos, {$passageiro->getTipo()})<br>";
}

echo "<br>"; //pulando linha

$tempoDeVooEmHoras = $voo->calcularTempoDeVoo(); //testar
if ($tempoDeVooEmHoras >= 24) {
    $dias = floor($tempoDeVooEmHoras / 24);
    $horas = floor($tempoDeVooEmHoras % 24);
    $minutos = round(($tempoDeVooEmHoras * 60) % 60);
    echo "TEMPO DE VOO: {$dias} dias, {$horas} horas e {$minutos} minutos<br>";
} else {
    $horas = floor($tempoDeVooEmHoras);
    $minutos = round(($tempoDeVooEmHoras * 60) % 60);
    echo "TEMPO DE VOO: {$horas} horas e {$minutos} minutos<br>";
}
