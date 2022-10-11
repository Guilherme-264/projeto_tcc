<html>
<?php include('..\conexao.php'); ?>

<head>  
<link href="../titulo.css" rel="stylesheet">
</head>

<header>
<?php include('menuCliente.php'); ?>
</header>
<body>
<br/>
    <h2>Listagem de Clientes</h2>
<br/>
<div class="container">
    <table class="table table-bordered table table-striped">
        <thead>
            <th>ID</th>
            <th>Nome do cliente</th>
            <th>CNPJ</th>
            <th>Número do cliente</th>
            <th>Email</th>
            <th>Endereço</th>
            <th>PIX</th>
            <th>Ação</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM cliente";
            $rs = mysqli_query($conn, $sql);
            while ($linha = mysqli_fetch_array($rs)) {
            ?>
            <tr>
                <td><?php echo $linha['ID']?></td>
                <td><?php echo $linha['cliente' ] ?></td>
                <td><?php echo $linha['CNPJcliente'] ?></td>
                <td><?php echo $linha['numero'] ?></td>
                <td><?php echo $linha['email'] ?></td>
                <td><?php echo $linha['endereco'] ?></td>
                <td><?php echo $linha['chavepix'] ?></td>

                <td><a class="btn btn-success" href="editaCliente.php?ID=<?php echo $linha['ID']?>"> Editar</a>
                    <a class="btn btn-danger" href="excluirProdutor.php?ID=<?php echo $linha['ID']?>">Excluir</a>
                </td>
            </tr>
</div>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>