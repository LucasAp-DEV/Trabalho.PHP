<?php

class Comissario extends Funcionario{
    private string $nome;
    
    public function __construct(string $nome) {
        $this->nome = $nome;
    }
    
    public function getNome(): string {
        return $this->nome;
    }

    public function realizarFuncao() {
        return "Atendendo os passageiros.";
    }
}
