<?php 

require_once "./PessoaFisica.php";
require_once "./PessoaJuridica.php";

$PF = new PessoaFisica("João", "12312312312", "18112002");

$PJ = new PessoaJuridica("Lojas Simonetti", "123123/0001-1", "Simonetti");

var_dump($PF);
var_dump($PJ);

