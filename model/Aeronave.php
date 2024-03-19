<?php

class Aeronave {
    private string $modelo;
    private int $capacidade;
    
    public function __construct(string $modelo, int $capacidade) {
        $this->modelo = $modelo;
        $this->capacidade = $capacidade;
    }
    
    public function getModelo(): string {
        return $this->modelo;
    }
    
    public function getCapacidade(): int {
        return $this->capacidade;
    }
}
