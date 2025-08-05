<?php 

require_once 'classes/AnimalInterface.php';

class Pessoa implements AnimalInterface {

    public function EmitirSom(): void{
        echo "A pessoa fala!";
    }
}

?>