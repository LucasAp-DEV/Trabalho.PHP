// Comissario.php
<?php

class Comissario {
    private string $nome;
    
    public function __construct(string $nome) {
        $this->nome = $nome;
    }
    
    public function getNome(): string {
        return $this->nome;
    }
}
