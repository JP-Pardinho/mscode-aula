<?php 

require_once '/interface/Forma.php';

interface Forma3d extends Forma{
    
    function calcularVolume(): float;
}
