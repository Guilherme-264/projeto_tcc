<html>

<head>

<style>.error {color: #FF0000;}
</style>

<link href="../titulo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php
        include('../conexao.php');
        include('menuTransferencia.php');

        $sql = "SELECT * FROM produtor";
        $rs = mysqli_query($conn, $sql);
        ?>

    </header>



    <form action="recebeCompra.php" method="POST">
        <div class="container">
            <h2>Cadastro compra</h2>
            <div class="form-group">
                Nome do Cliente:
                <select class="form-control" id="codfornecedor" name="codfornecedor">
                    <option>Selecione</option>
                    <?php while ($linha = mysqli_fetch_array($rs)) {
                    ?>
                        <td>
                            <option value="<?php echo $linha['ID'] ?>"><?php echo $linha['nomeProdutor'] ?></option>
                        </td>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                Peso das caixas: <input class="form-control" type="number" name="pesoCaixa">
                

            </div>
            <div class="form-group">
                Quantidade de caixas1º: <input class="form-control" type="number" name="quantidadeCaixa1">
            </div>
            <div class="form-group">
                valor por caixa 1°:<input class="form-control" type="text" name="valorporcaixa1">
            </div>
            <div class= "form-group">
                Quantidade de caixas 2º: <input class="form-control" type="number" name="quantidadeCaixa2">
            </div>
            <div class= "form-group">
             valor por caixa 2°: <input class="form-control" type="text" name="valorporcaixa2">
            </div>
            <div class="form-group">
             Data do pagamento: <input class="form-control" type="date" name="dataPagamento">
            </div>
            <div>
             Situação:  <input type="radio" id="situacao" name="situacao" value="1">
  <label for="Pago">Pago</label><br> 
  <input type="radio" id="situacao" name="situacao" value="0">
  <label for="Nao pago">Não pago</label><br> 
            </div>
            <input type="submit" class="btn btn-primary" value="Cadastrar" name="btnEnviar">
        </div>
    </form>
</body>

</html>