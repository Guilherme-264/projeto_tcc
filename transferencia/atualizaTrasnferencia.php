<html>
<?php
include("..\conexao.php");
$ID= $_GET["ID"];
$sql = "SELECT * FROM compra where ID= {$ID}" ;
        $rs = mysqli_query($conn, $sql) or die ("F");
                $linha = mysqli_fetch_assoc($rs);
        ?>
<body>


<header><?php include('menuTransferencia.php'); ?></header>
<h3>Editar</h3>
<form action="AtualizaUsuario.php" method="POST">
        <h2>Cadastro de cliente</h2>
        <p>Nome : <input type="text" name="nomecliente" value= <?php echo $linha['nomecliente']?>></p>
        <p>Sobrenome : <input type="text" name="sobrenomecliente" value= <?php echo $linha['sobrenomecliente']?>></p>
        <p>Telefone: <input type="text" name="Telefone" value= <?php echo $linha['Telefone']?>></p>
        <p>CPF <input type="text" name="CPFcliente" value= <?php echo $linha['CPFcliente']?>> </p>
        <p>Endereço <input type="text" name="enderecocliente"value= <?php echo $linha['enderecocliente']?>></p>
        <p>Chave do PIX <input type="text" name="chavepix"value= <?php echo $linha['chavepix']?>></p>
        <p>ID <input type="text" name="ID"value= <?php echo $linha['ID']?>></p>



        <input type="submit" value="Atualizar">
    </form>
        

</body>

</html>