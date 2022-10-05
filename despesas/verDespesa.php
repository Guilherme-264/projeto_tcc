<html>
<?php
    include("..\conexao.php");
    
?>
<body>
    <header>
        <?php
             include("menuDespesa.php");
        ?>
    </header>
<div class="container">
    <table class="table table-bordered table table-striped">
        <thead>
        <th>ID</th>
            <th>Despesa</th>
            <th>Valor da despesa</th>
            <th>comentario adiconal</th>
        </thead>
        <tbody>
            <?php
           $ID= $_GET["ID"];

           $sql = "SELECT * FROM despesas where ID= {$ID}" ;
           $rs = mysqli_query($conn, $sql) or die ("Não foi possivel conectat com o banco de dados");
           $linha = mysqli_fetch_assoc($rs); {
               ?>

            
                
            <tr>
            <td><?php echo $linha['ID']?></td>
                <td><?php echo $linha['despesa' ] ?></td>
                <td>R$<?php echo $linha['valordespesa'] ?></td>
                <td><?php echo $linha['obs'] ?></td>
            </tr>
            

            <?php } ?>
        </tbody>
    </table>
</div>
</body>