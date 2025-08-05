<?php

require_once 'classesc/AnimalInterface.php';

class Cachorro implements AnimalInterface {
    
    public function EmitirSom(): void{
        echo "O cachorro late!";
    }
}
