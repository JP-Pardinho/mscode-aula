<?php

require_once 'PessoaAbstrata.php';

class PessoaFisica extends PessoaAbs {
    private string $dataNascimento;

    public function __construct(string $nome, string $cpf, string $dataNascimento)
    {
        parent::__construct($nome, $cpf);
        $this->dataNascimento = $dataNascimento;
    }

    public function getCpf(): string
    {
        return $this->getDocumento();
    }
    
    public function getDataNascimento(): string
    {
        return $this->dataNascimento;
    }
}