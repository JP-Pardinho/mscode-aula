<?php

require_once 'PessoaAbstrata.php';
class PessoaJuridica extends PessoaAbs {
    private string $razaoSocial;

    public function __construct(string $nomeFantasia, string $cnpj, string $razaoSocial) {
        parent::__construct($nomeFantasia, $cnpj);
        $this->razaoSocial = $razaoSocial;
    }

    public function getCnpj(): string {
        return $this->getDocumento();
    }

    public function getRazaoSocial(): string {
        return $this->razaoSocial;
    }
}