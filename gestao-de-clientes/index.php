

<?php
require_once "ClienteServico.php";
?>
<html>
<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Lista de Clientes</h1>
    <hr>
    <table class="table table-bordered table-width">
        <thead>
        <tr>
            <th class="text-center">Nome</th>
            <th class="text-center">Tipo</th>
            <th class="text-center">Importancia</th>
            <th class="text-center">Detalhar</th>
        </tr>
        </thead>
        <tbody>
        <?php
            session_start();

            $ordem = "crescente";

            if(isset($_SESSION['decrescente'])){
                $lista = $_SESSION['decrescente'];
                $ordem = "decrescente";
            }else if(isset($_SESSION['crescente'])){
                $lista = $_SESSION['crescente'];
            }else {
                $clientes = new ClienteServico();
                $lista = $clientes->listarClientes();
            }

            foreach($lista as $key => $cliente){
        ?>
                <tr>
                    <td>
                        <?php echo $cliente->getNome(); ?>
                    </td>
                    <td>
                        <?php echo $cliente->getTipo(); ?>
                    </td>
                    <td>
                        <?php echo $cliente->getImportancia(); ?>
                    </td>
                    <td><a href="ControleCliente.php?operacao=buscarPorId&id=<?php echo $key; ?>&ordem=<?php echo $ordem; ?>">Detalhar</a></td>
                </tr>
        <?php
            }
        ?>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4">
                <a href="ControleCliente.php?operacao=crescente">Crescente</a> |
                <a href="ControleCliente.php?operacao=decrescente">Decrescente</a>
            </td>
        </tr>
        </tfoot>
    </table>
    <?php if(isset($_SESSION['cliente'])) { ?>
        <div class="mostra-cliente">
            <h4>Cliente:</h4>
            <?php
            foreach ($_SESSION['cliente'] as $key => $cliente) {
                echo "<strong>" . ucfirst($key) . "</strong>" . " - " . $cliente . "<br>";
            }
            ?>
        </div>
    <?php } ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php session_destroy(); ?>