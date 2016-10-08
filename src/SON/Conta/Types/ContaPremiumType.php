<?php

namespace SON\Conta\Types;

class ContaPremiumType extends \SON\Conta\ContaAbstract
{
    public function __construct()
    {
        $this->saldo += 10;
    }

    protected function calculoDeposito($valor)
    {
        return $valor += 20;
    }
}