<?php

require_once 'classes/AnimalInterface.php';

class Leao implements AnimalInterface{
    public function EmitirSom(): void{
        echo "O Leão ruge!";
    }
}
