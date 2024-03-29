<html>
<?php include('conexao.php'); ?>

<head>
    <link href="../css.css" rel="stylesheet">
</head>
<header>
</header>
<body>
<div class="container"> 

    <h2>Despesas</h2>

    <ul> <a class="btn btn-primary" href="despesas/cadastra_despesa.php">Nova Despesa</a></ul>

    <table class="table table-bordered table table-striped">
        <thead>
            <th>ID</th>
            <th>Despesa</th>
            <th>Valor da despesa</th>
            <th>comentario adiconal</th>
            <th>Ação</th>

        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM despesas";
            $rs = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($rs)) {
            ?>

            <tr>
                <td><?php echo $linha['ID']?></td>
                <td><?php echo $linha['despesa' ] ?></td>
                <td>R$<?php echo $linha['valordespesa'] ?></td>
                <td><?php echo $linha['obs'] ?></td>

                <td>
                    <a class="btn btn-success" href="despesas/verDespesa.php?ID=<?php echo $linha['ID']?>"> Ver</a> 
                    <a class="btn btn-danger" href='#' onclick='confirmar()'> Excluir</a>                
                </td>

            </tr>
            
        </tbody>
    </table>
</div>
<script>
    function confirmar (){
        if (confirm('Você realmente deseja excluir esta linha?'))
        location.href = "despesas/excluir_despesa.php?ID=<?php echo $linha['ID']?>";       }
</script> 
</body>
<?php } ?>
</html>
