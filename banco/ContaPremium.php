<?php

class ContaPremium extends Conta
{
    public function __construct()
    {
        $this->saldo += 10;
    }

    protected function calculoDeposito($valor)
    {
        $valorNormal = parent::calculoDeposito($valor) ;
        return $valor += 20;
    }
}