<?php

class Cliente
{
    public $nome;
    public $cpf;
    public $endereco;
    public $nascimento;

    public function __construct($nome, $cpf, $endereco, $nascimento)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->nascimento = $nascimento;
    }
}