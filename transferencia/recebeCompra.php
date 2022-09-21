<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <link href="../titulo.css" rel="stylesheet">
</head>

<?php  
include("../conexao.php"); // inclui o arquivo de conexão com BD


$codfornecedor = $_POST['codfornecedor'];
$pesoCaixa = $_POST['pesoCaixa'];
$quantidadeCaixa1 = $_POST['quantidadeCaixa1'];
$valorporcaixa1 = $_POST['valorporcaixa1'];
$quantidadeCaixa2 = $_POST['quantidadeCaixa2'];
$valorporcaixa2 = $_POST['valorporcaixa2'];
$dataPagamento = $_POST['dataPagamento'];





$sql = "INSERT INTO compra (codfornecedor, pesoCaixa, quantidadeCaixa1, valorporcaixa1, quantidadeCaixa2, valorporcaixa2, dataPagamento) 
        VALUES ('$codfornecedor', '$pesoCaixa', '$quantidadeCaixa1', '$valorporcaixa1', '$quantidadeCaixa2','$valorporcaixa2','$dataPagamento')";



mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<div class='container'>
<h2>usuário inserido com </h2>
        <ul>
                <a class="btn btn-primary" href="../inicio.php">voltar</a>
                <a class="btn btn-primary" href="cadastrocliente.php">Cadastrar novo usuário</a>
        </ul>
</div>

</html>