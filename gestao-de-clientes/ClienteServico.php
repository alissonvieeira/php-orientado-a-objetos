<?php

require_once "Cliente.php";

class ClienteServico
{

    public function listarClientes(){
        $clientes = array();

        $clientes[] = new Cliente("Alisson", "12345678910", "Rua tal", "18/10/1988");
        $clientes[] = new Cliente("Pedro", "12345678910", "Rua tal 3", "25/09/1988");
        $clientes[] = new Cliente("Maria", "12345678910", "Rua sei la", "11/12/1993");
        $clientes[] = new Cliente("Lucas", "12345678910", "Rua sem saida", "05/01/1970");
        $clientes[] = new Cliente("Joao", "12345678910", "Rua buraco", "29/07/1980");
        $clientes[] = new Cliente("Jessica", "12345678910", "Rua fim", "28/08/1985");
        $clientes[] = new Cliente("Juliana", "12345678910", "Rua inicio", "18/03/1994");
        $clientes[] = new Cliente("Carol", "12345678910", "Rua tal 15", "27/04/1990");
        $clientes[] = new Cliente("Felipe", "12345678910", "Rua tal 25", "10/10/1991");
        $clientes[] = new Cliente("Fernanda", "12345678910", "Rua tal 1", "25/10/1995");

        return $clientes;
    }

    public function buscarClientePorId($id){
        $clientes = $this->listarClientes();
        return $clientes[$id];
    }

    public function buscarClientesPorOrdemDecrescente(){

        $clientes = $this->listarClientes();



            arsort($clientes);
            krsort($clientes);


        return $clientes;
    }

}