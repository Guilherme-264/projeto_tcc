<?php
include("..\conexao.php"); // inclui o arquivo de conexão com BD
$nomeProdutor = $_POST['nomeProdutor'];
$sobrenomeProdutor = $_POST['sobrenomeProdutor'];
$Telefone = $_POST['Telefone'];
$CPFProdutor = $_POST['CPFProdutor'];
$enderecoProdutor = $_POST['enderecoProdutor'];
$chavepix = $_POST['chavepix'];
$ID =   $_POST ['ID'];
$sql = "UPDATE produtor SET

nomeProdutor = '{$nomeProdutor}',
sobrenomeProdutor = '{$sobrenomeProdutor}',
Telefone = '{$Telefone}',
CPFProdutor = '{$CPFProdutor}',
enderecoProdutor = '{$enderecoProdutor}',
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