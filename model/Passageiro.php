<?php

class Passageiro {
    private string $nome;
    private int $idade;
    private string $tipo;
    
    public function __construct(string $nome, int $idade, string $tipo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->tipo = $tipo;
    }
    
    public function getNome(): string {
        return $this->nome;
    }
    
    public function getIdade(): int {
        return $this->idade;
    }
    
    public function getTipo(): string {
        return $this->tipo;
    }
}
