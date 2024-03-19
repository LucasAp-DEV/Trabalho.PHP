<?php

class Aeroporto {
    private string $codigo;
    private string $cidade;
    
    public function __construct(string $codigo, string $cidade) {
        $this->codigo = $codigo;
        $this->cidade = $cidade;
    }
    
    public function getCodigo(): string {
        return $this->codigo;
    }
    
    public function getCidade(): string {
        return $this->cidade;
    }
}
