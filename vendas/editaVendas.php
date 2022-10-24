<html>
<?php
    include("..\conexao.php");
    
?>
<body>
    <header>
        <?php
             include("menuVenda.php");
        ?>
    </header>
    <div class="container">
    <table class="table table-bordered table table-striped">
        <thead>
            <th>ID</th>
            <th>Nome do cliente</th>
            <th>Quantidade de Caixas</th>
            <th>Valor por Caixas</th>
            <th>Valor da Venda</th>
            <th>Data da Venda</th>
        </thead>
        <tbody>
            <?php
           $ID= $_GET["ID"];

           $sql = "SELECT * FROM vendas where ID= {$ID}" ;
           $rs = mysqli_query($conn, $sql) or die ("Não foi possivel conectat com o banco de dados");
           $linha = mysqli_fetch_assoc($rs); {
           
                $totalCaixa = 0;
                $totalCaixa += ($linha['quantidadeCaixa'] * $linha['valorporCaixa']);
                $codCliente = 0;
                $codCliente += ($linha ['cliente']);

                $sql = "SELECT *  FROM cliente where ID = $codCliente ";
                        $rs = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_array($rs)){
                         $nome =($row['cliente']);
                        }
            ?>

            <?php if ($ID >0){echo 
            "<script> alert('Natã sexo')</script>";
        }
                ?>
            <tr>
                <td><?php echo $linha['ID']?></td>
                <td><?php echo $nome?></td>
                <td><?php echo $linha['quantidadeCaixa'] ?>kg</td>
                <td><?php echo $linha['valorporCaixa'] ?></td>
                <td>R$<?php echo $totalCaixa ?></td>
                <td><?php echo $linha['datavenda'] ?></td>
            </tr>
            
            <?php } ?>
        </tbody>
    </table>
</div>
</body>