<?php

interface PessoaInterface {
    public function setNome(string $nome): void;
    public function getNome(): string;
    public function setDocumento(string $documento): void;
    public function getDocumento(): string;
}