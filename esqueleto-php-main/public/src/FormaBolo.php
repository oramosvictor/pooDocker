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

}

?>