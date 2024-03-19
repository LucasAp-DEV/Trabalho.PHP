<?php

class Bagagem {
    private string $tipo;
    private float $peso;

    public function __construct(string $tipo, float $peso) {
        $this->tipo = $tipo;
        $this->peso = $peso;
    }

    public function getTipo(): string {
        return $this->tipo;
    }

    public function getPeso(): float {
        return $this->peso;
    }
}
