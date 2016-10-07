<?php

session_start();

require_once "ClienteServico.php";

$operacao = filter_input(INPUT_GET, 'operacao', FILTER_SANITIZE_NUMBER_INT);
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

switch ($_GET['operacao']) {

    case 'buscarPorId':
        $clientesServico = new ClienteServico();
        $cliente = $clientesServico->buscarClientePorId($id);

        $ordem = filter_input(INPUT_GET, 'ordem', FILTER_SANITIZE_STRING);

        $_SESSION['cliente'] = $cliente;

        if($ordem == "crescente"){
            $_SESSION['crescente'] = $clientesServico->listarClientes();
        }else{
            $_SESSION['decrescente'] = $clientesServico->buscarClientesPorOrdemDecrescente();
        }

        header("location: index.php");
        break;

    case 'crescente':
        $clientesServico = new ClienteServico();
        $cliente = $clientesServico->listarClientes();

        $_SESSION['crescente'] = $cliente;

        header("location: index.php");
        break;


    case 'decrescente':
        $clientesServico = new ClienteServico();
        $cliente = $clientesServico->buscarClientesPorOrdemDecrescente();

        $_SESSION['decrescente'] = $cliente;

        header("location: index.php");
        break;

    defaut:
        die('aqui');
        break;
}



