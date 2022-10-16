<html>
<head>
      <link href="../titulo.css" rel="stylesheet">
  
</head>
<?php
include("..\conexao.php");
$ID= $_GET["ID"];
$sql = "SELECT * FROM cliente where ID= {$ID}" ;
        $rs = mysqli_query($conn, $sql) or die ("Não foi possivel conectat com o banco de dados  :( ");
                $linha = mysqli_fetch_assoc($rs);
        ?>
<body>


        <header><?php include('menuCliente.php'); ?></header>

        <h2>Editar</h2>
        <form action="atualizaCliente.php" method="POST"    >
        <div class='container'>           
                <div class="form-group">
                Nome : <input class='form-control' type="text" name="cliente" value= <?php echo $linha['cliente']?>>
                </div>
                <div class='form-group'>
                Sobrenome : <input class='form-control' type="text" name="CNPJcliente" value= <?php echo $linha['CNPJcliente']?>>
                </div>
                <div class='form-group'>                
                Telefone: <input class='form-control' type="text" name="numero" value= <?php echo $linha['numero']?>>
                </div>
                <div class='form-group'>                
                CPF <input class='form-control' type="text" name="email" value= <?php echo $linha['email']?>>
                </div>
                <div class='form-group'>
                Endereço <input class='form-control' type="text" name="endereco"value= <?php echo $linha['endereco']?>>
                </div>
                <div class='form-group'>
                Chave do PIX <input class='form-control' type="text" name="chavepix"value= <?php echo $linha['chavepix']?>>
                </div>
                <div class='form-group'>
                ID <input class='form-control' type="text" name="ID"value= <?php echo $linha['ID']?>>
                </div>             

                <input class="btn btn-primary" type="submit" value="Atualizar">
        </div>

    </form>
        

</body>

</html>