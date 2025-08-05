<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'classes/Cachorro.php';
require_once 'classes/Gato.php';
require_once 'classes/Leao.php';

$animais = [
    new Cachorro(),
    new Gato(),
    new Leao(),
];

foreach ($animais as $animal) {
    $animal->EmitirSom();
    echo "<br>";
}