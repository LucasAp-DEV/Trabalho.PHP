<?php

class Passageiro {
    private string $nome;
    private int $idade;
    private string $tipo;
    private array $bagagens;
    
    public function __construct(string $nome, int $idade, string $tipo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->tipo = $tipo;
        $this->bagagens = [];
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
    
    public function adicionarBagagem(Bagagem $bagagem): void {
        $this->bagagens[] = $bagagem;
    }
    
    public function getBagagens(): array {
        return $this->bagagens;
    }
}
