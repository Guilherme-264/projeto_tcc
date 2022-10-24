<html>
<?php include('conexao.php'); ?>
<head>
    <link href="css.css" rel="stylesheet">
</head>
<body>
    <h2>Vendas</h2>
    <div class="container">
        <ul> <a class="btn btn-primary" href="vendas/cadastrarVenda.php">Cadastrar Venda</a></ul>
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
                $sql = "SELECT * FROM vendas";
                $rs = mysqli_query($conn, $sql);
                while ($linha = mysqli_fetch_array($rs)) {
                    $totalCaixa=0;    
                    $totalCaixa += ($linha['quantidadeCaixa'] * $linha['valorporCaixa']);
                ?>
                        <tr>
                            <td><?php echo $linha['ID'] ?></td>
                            <td><?php echo $linha['cliente'] ?></td>
                            <td>R$<?php echo $totalCaixa?></td>
                            <td><?php echo $linha['quantidadeCaixa'] ?></td>
                            <td><a class="btn btn-success" href='vendas/editaVendas.php?ID=<?php echo $linha['ID'] ?>'> ver</a>

                            <a class="btn btn-danger" href='#' onclick='confirmar()'> Excluir</a>                
                            </td>
                        </tr>
                    <script>
                        function confirmar (){
                        if (confirm('Você realmente deseja excluir esta linha?'))
                        location.href = "vendas/excluir_venda.php?ID=<?php echo $linha['ID']?>";       }
                    </script>     
                <?php }
                 ?>
            </tbody>
        </table>
    </div>

</body>

</html>