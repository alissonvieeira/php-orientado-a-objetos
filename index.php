<?php

/*
require_once "Pessoa.php";

$pessoa1 = new Pessoa("Alisson", 30);
$pessoa2 = new Pessoa("Maria", 20);

$pessoa1->correr(50);
*/
require_once "Produto.php";
require_once "Tenis.php";

$tenis = TenisAdidas();
$tenis->getCor();

$tenis2 = new SapaTenis();
$tenis2->getCor();
$tenis2->getTamanho();