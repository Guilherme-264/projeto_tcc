<html>
<head>
<link href="../titulo.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include ('menuLista.php'); ?>
</header>
    <form action="recebeProdutor.php" method="POST">
    <div class="container">    
        <h2>Cadastro de cliente</h2>


        <div class="form-group">
            Nome : <input class="form-control" type="text" name="nomeProdutor">
        </div>
        <div class="form-group">
         sobrenome : <input class="form-control" type="text" name="sobrenomeProdutor">
        </div>
        <div class="form-group">
            Telefone: <input class="form-control" type="number" name="Telefone">
        </div>
        <div class="form-group">
            CPF <input class="form-control" type="number" name="CPFProdutor">
        </div>
        <div class="form-group">
            Endereço <input class="form-control" type="text" name="enderecoProdutor">
        </div>
        <div class="form-group">
            Chave do PIX <input class="form-control" type="text" name="chavepix">
        </div>


        <input class="btn btn-primary" type="submit" value="Cadastrar" name="btnEnviar">
    </div>    
    </form>
</body>
</html>