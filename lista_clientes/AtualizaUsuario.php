<?php
include("..\conexao.php"); // inclui o arquivo de conexão com BD
$nomecliente = $_POST['nomecliente'];
$sobrenomecliente = $_POST['sobrenomecliente'];
$Telefone = $_POST['Telefone'];
$CPFcliente = $_POST['CPFcliente'];
$enderecocliente = $_POST['enderecocliente'];
$chavepix = $_POST['chavepix'];
$ID =   $_POST ['ID'];
$sql = "UPDATE cliente SET

nomecliente = '{$nomecliente}',
sobrenomecliente = '{$sobrenomecliente}',
Telefone = '{$Telefone}',
CPFcliente = '{$CPFcliente}',
enderecocliente = '{$enderecocliente}',
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