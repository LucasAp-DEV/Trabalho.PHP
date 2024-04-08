<?php

class Piloto extends Funcionario{
    private string $nome;
    private int $idade;
    
    public function __construct(string $nome, int $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function realizarFuncao() {
        return "Pilotando a aeronave.";
    }
    
    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }
}
