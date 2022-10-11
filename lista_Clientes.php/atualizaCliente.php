<?php
include("..\conexao.php"); // inclui o arquivo de conexão com BD
$cliente = $_POST['cliente'];
$CNPJcliente = $_POST['CNPJcliente'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$chavepix = $_POST['chavepix'];
$ID =   $_POST ['ID'];
$sql = "UPDATE produtor SET

cliente = '{$cliente}',
CNPJcliente = '{$CNPJcliente}',
numero = '{$numero}',
email = '{$email}',
endereco = '{$endereco}',
chavepix = '{$chavepix}'
where ID ={$ID} 
";

mysqli_query($conn, $sql);

mysqli_close($conn);
echo "Usuário atualizado com sucesso.";
?>
<div>
        <ul>
                <li><a href="../inicio.php">voltar</a></li>
                <li><a href="cadastrocliente.php">Cadastrar novo usuário</a></li>
        </ul>
</div>