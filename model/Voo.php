<?php

class Voo {
    private Aeroporto $origem;
    private Aeroporto $destino;
    private array $escalas;
    private Aeronave $aeronave;
    private array $passageiros;
    private Piloto $piloto;
    private array $comissarios;
    
    public function __construct(Aeroporto $origem, Aeroporto $destino, Aeronave $aeronave, Piloto $piloto, array $comissarios) {
        $this->origem = $origem;
        $this->destino = $destino;
        $this->aeronave = $aeronave;
        $this->piloto = $piloto;
        $this->comissarios = $comissarios;
        $this->escalas = [];
        $this->passageiros = [];
    }
    
    public function adicionarEscala(Aeroporto $aeroporto): void { //verificar
        $this->escalas[] = $aeroporto;
    }
    
    public function adicionarPassageiro(Passageiro $passageiro): void { //verificar
        $this->passageiros[] = $passageiro;
    }

    public function getOrigem(): Aeroporto {
        return $this->origem;
    }

    public function getDestino(): Aeroporto {
        return $this->destino;
    }

    public function getEscalas(): array {
        return $this->escalas;
    }

    public function getAeronave(): Aeronave {
        return $this->aeronave;
    }

    public function getPiloto(): Piloto {
        return $this->piloto;
    }

    public function getComissarios(): array {
        return $this->comissarios;
    }

    public function getPassageiros(): array {
        return $this->passageiros;
    }
}
