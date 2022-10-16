<html>
        <head>
                <link href='../titulo.css real' real='stylesheet'>;
                <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        <?php  
        include("../conexao.php"); // inclui o arquivo de conexão com BD
        $cliente = $_POST['cliente'];
        $CNPJcliente = $_POST['CNPJcliente'];
        $numero = $_POST['numero'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $chavepix = $_POST['chavepix'];

        $sql = "INSERT INTO cliente (cliente, CNPJcliente, numero, email, endereco, chavepix) 
                VALUES ('$cliente', '$CNPJcliente', '$numero', '$email', '$endereco','$chavepix')";

        mysqli_query($conn, $sql);

        mysqli_close($conn);
        ?> 
        <h2>Usuário inserido com sucesso.</h2>

        <nav class="navbar navbar-expand-sm navbar-dark bg-primary justify-content-center">

                <ul class='navbar-nav'>
                        <li class='nav-item'><a class='nav-link' href="../inicio.php">voltar</a></li>
                        <li class='nav-item'><a class='nav-link' href="cadastrocliente.php">Cadastrar novo usuário</a></li>
                </ul>
</html>