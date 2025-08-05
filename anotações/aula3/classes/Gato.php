<?php

require_once 'classes/AnimalInterface.php';

class Gato implements AnimalInterface{
    public function EmitirSom(): void{
        echo "O gato mia!";
    }
}
