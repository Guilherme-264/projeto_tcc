<html>
<?php include('conexao.php'); ?>

<head>
    <link href="titulo.css" rel="stylesheet">
</head>
<header>
</header>
<body>
    <h2>Transferencias pagas</h2>

<div class="container"> 
    
    <table class="table table-bordered table table-striped">
        <thead>
            <th>ID</th>
            <th>Nome do cliente</th>
            <th>Total Pago</th>
            <th>Data do pagamento</th>
            <th>Ação</th>

        </thead>
        <tbody>
            <?php



            $sql = "SELECT * FROM compra";
            $rs = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($rs)) {
                $totalCaixa1 = 0;
                $totalCaixa2 = 0;
                $totalCaixa1 += ($linha['quantidadeCaixa1'] * $linha['valorporcaixa1']);
                $totalCaixa2 += ($linha['quantidadeCaixa2'] * $linha['valorporcaixa2']);
            ?>

            <tr>
                <td><?php echo $linha['ID']?></td>
                <td><?php echo $linha['codfornecedor' ] ?></td>
                <td>R$<?php echo $totalCaixa1+$totalCaixa2 ?></td>
                <td><?php echo $linha['dataPagamento'] ?></td>

                <td><a class="btn btn-success" href="transferencia/edita_transferencia.php?ID=<?php echo $linha['ID']?>"> Ver</a>
                    <a class="btn btn-danger" href="excluirUsuario.php?ID=<?php echo $linha['ID']?>">Excluir</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
  
</body>

</html>