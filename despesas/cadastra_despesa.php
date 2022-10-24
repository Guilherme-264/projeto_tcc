<html>
<head>
<link href="../css.css" rel="stylesheet">
</head>
<body>
<header>
    <?php include ('menuDespesa.php'); ?>
</header>
    <form action="recebeDespesa.php" method="POST">
        <div class="container">    
        <h2>Cadastrar Despesa</h2>


        <div class="form-group">
            despesas : <input class="form-control" type="text" name="despesa">
        </div>
        <div class="form-group">
         valor : <input class="form-control" type="number" name="valordespesa">
        </div>
        <div class="form-group">
            Observação: <input class="form-control" type="text" name="observacao">
        </div>

        <input class="btn btn-primary" type="submit" value="Cadastrar" name="btnEnviar">
        </div>    
    </form>
</body>
</html>