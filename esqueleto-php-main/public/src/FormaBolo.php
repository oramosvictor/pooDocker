<?php
namespace Unialfa\Poo;

class FormaBolo

{
        public array $ingredientes;
        public int $tempoForno;

    public function boloPronto (): void {
        $this->mistura();
    }

    public function mistura (): void {

    if (count( $this->ingredientes)===0){
        return;
    }

    echo "Misturando os ingredientes" . json_encode($this->ingredientes);
    
    }

    public function colocarNoForno( int $tempoForno = 1): void  
    {
        $this->tempoForno = $tempoForno;
        echo "Colocando no forno o bolo, tempo para ficar pronto é de $this->$tempoForno horas";
    }
}

?>