<?php

namespace SON\Banco;

use SON\Conta\Types\ContaType;

class Santander
{
    private $nome;
    public $conta;

    public function __construct()
    {
        $this->conta = new ContaType();
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return ContaType
     */
    public function getConta()
    {
        return $this->conta;
    }
}