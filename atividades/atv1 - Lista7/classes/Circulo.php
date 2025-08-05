<?php 

require_once '../interface/Forma2d.php';

public class Circulo implements Forma2d {
    private double $raio;

    public function __construct($raio){
        $this->$raio = $raio;
    }

    public function getRaio(){
        return $raio;
    }

    public function setRaio($raio):float {
        $this->$raio = $raio;
    }

    public function calcularArea(): float {
        return M_PI * ($raio * $raio);
    }

    public function imprimirDados(): void {
        echo "O raio é $raio";
        echo PHP_EOL;
        echo "A area é " . calcularArea();
    }

}
