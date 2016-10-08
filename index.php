<?php

/*
require_once "Pessoa.php";

$pessoa1 = new Pessoa("Alisson", 30);
$pessoa2 = new Pessoa("Maria", 20);

$pessoa1->correr(50);
*/
require_once "Produto.php";
require_once "Tenis.php";

$produto = new Produto();

$produto->setNome("Tênis Exemplo")
        ->setDescricao("Essa é a descrição do produto")
        ->setEstoque(10)
        ->setValor(1000);