<html>
<head>
<link href="../css.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include ('menuCliente.php'); ?>
</header>
    <form action="recebeCliente.php" method="POST">
    <div class="container">    
        <h2>Cadastro de Empresa</h2>


        <div class="form-group">
            Nome da Empresa : <input class="form-control" type="text" name="cliente">
        </div>
        <div class="form-group">
          CNPJ: <input class="form-control" type="text" name="CNPJcliente">
        </div>
        <div class="form-group">
            Telefone: <input class="form-control" type="number" name="numero">
        </div>
        <div class="form-group">
            Email: <input class="form-control" type="text" name="email">
        </div>
        <div class="form-group">
            Endereço <input class="form-control" type="text" name="endereco">
        </div>
        <div class="form-group">
            Chave do PIX <input class="form-control" type="text" name="chavepix">
        </div>


        <input class="btn btn-primary" type="submit" value="Cadastrar" name="btnEnviar">
    </div>    
    </form>
</body>
</html>