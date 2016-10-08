<?php

namespace SON\Conta\Types;

class ContaType extends \SON\Conta\ContaAbstract
{
    protected function calculoDeposito($valor)
    {
        return $valor += 10;
    }
}