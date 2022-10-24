<html>

<head>

<style>
</style>

<link href="../titulo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php
        include('../conexao.php');
        include('menuVenda.php');

        $sql = "SELECT * FROM cliente";
        $rs = mysqli_query($conn, $sql);
        ?>
        
    </header>
    <form action="recebeVenda.php" method="POST">
        <div class="container">
            <h2>Cadastro Venda</h2>
            <div class="form-group">
                Comprador:
                <select class="form-control" id="cliente" name="cliente">
                    <option>Selecione</option>
                    <?php while ($linha = mysqli_fetch_array($rs)) {
                    ?>
                        <td>
                            <option value="<?php echo $linha['ID'] ?>"><?php echo $linha['cliente'] ?></option>
                        </td>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                Quantidade de Caixas: <input class="form-control" type="number" name="quantidadeCaixa">
            </div>
            <div class="form-group">
                valor por Caixa: <input class="form-control" type="text" name="valorporCaixa">
            </div>
            <div class="form-group">
                Data da Venda: <input class="form-control" type="date" name="datavenda">
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar" name="btnEnviar">
        </div>
    </form>
</body>

</html>