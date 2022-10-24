<html>
<head>
      <link href="../css.css" rel="stylesheet">
  
</head>
<?php
include("..\conexao.php");
$ID= $_GET["ID"];
$sql = "SELECT * FROM produtor where ID= {$ID}" ;
        $rs = mysqli_query($conn, $sql) or die ("Não foi possivel conectat com o banco de dados  :( ");
                $linha = mysqli_fetch_assoc($rs);
        ?>
<body>


        <header><?php include('menuLista.php'); ?></header>

        <h2>Editar</h2>
        <form action="AtualizaProdutor.php" method="POST">
        <div class='container'>           
                <div class="form-group">
                Nome : <input class='form-control' type="text" name="nomeProdutor" value= <?php echo $linha['nomeProdutor']?>>
                </div>
                <div class='form-group'>
                Sobrenome : <input class='form-control' type="text" name="sobrenomeProdutor" value= <?php echo $linha['sobrenomeProdutor']?>>
                </div>
                <div class='form-group'>                
                Telefone: <input class='form-control' type="text" name="Telefone" value= <?php echo $linha['Telefone']?>>
                </div>
                <div class='form-group'>                
                CPF <input class='form-control' type="text" name="CPFProdutor" value= <?php echo $linha['CPFProdutor']?>>
                </div>
                <div class='form-group'>
                Endereço <input class='form-control' type="text" name="enderecoProdutor"value= <?php echo $linha['enderecoProdutor']?>>
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