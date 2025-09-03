<?php

require_once 'PessoaInterface.php';

abstract class PessoaAbs implements PessoaInterface {
    private string $nome;
    private string $documento;

    public function __construct(string $nome, string $documento) {
        $this->nome = $nome;
        $this->documento = $documento;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setDocumento(string $documento): void {
        $this->documento = $documento;
    }

    public function getDocumento(): string {
        return $this->documento;
    }
}