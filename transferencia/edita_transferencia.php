<html>
<?php
    include("..\conexao.php");
    
?>
<body>
    <header>
        <?php
             include("menuTransferencia.php");
        ?>
    </header>
<div class="container">
    <table class="table table-bordered table table-striped">
        <thead>
            <th>ID</th>
            <th>Nome do cliente</th>
            <th>Peso da caixa</th>
            <th>Quantidade de caixa de 1°</th>
            <th>Valor por caixa de 1°</th>
            <th>Quantida de Caixa de 2°</th>
            <th>Valor por caixa de 2°</th>
            <th>Data do pagamento</th>
            <th>Total Pago</th>
        </thead>
        <tbody>
            <?php
           $ID= $_GET["ID"];

           $sql = "SELECT * FROM compra where ID= {$ID}" ;
           $rs = mysqli_query($conn, $sql) or die ("Não foi possivel conectat com o banco de dados");
           $linha = mysqli_fetch_assoc($rs); {
                $totalCaixa1 = 0;
                $totalCaixa2 = 0;
                $totalCaixa1 += ($linha['quantidadeCaixa1'] * $linha['valorporcaixa1']);
                $totalCaixa2 += ($linha['quantidadeCaixa2'] * $linha['valorporcaixa2']);
            ?>

            
                
            <tr>
                <td><?php echo $linha['ID']?></td>
                <td><?php echo $linha['codfornecedor' ] ?></td>
                <td><?php echo $linha['pesoCaixa'] ?>kg</td>
                <td><?php echo $linha['quantidadeCaixa1'] ?></td>
                <td>R$<?php echo $linha['valorporcaixa1'] ?></td>
                <td><?php echo $linha['quantidadeCaixa2'] ?></td>
                <td>R$<?php echo $linha['valorporcaixa2'] ?></td>
                <td><?php echo $linha['dataPagamento'] ?></td>
                <td>R$<?php echo $totalCaixa1+$totalCaixa2 ?></td>
            </tr>
            <td><a class="btn btn-success" href="atualizaPago.php?ID=<?php echo $linha['ID']?>"> ver</a>
            

            <?php } ?>
        </tbody>
    </table>
</div>
</body>