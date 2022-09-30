<?php
include("..\conexao.php"); // inclui o arquivo de conexão com BD
$ID= $_GET["ID"];
$sql = "SELECT * FROM compra where ID= {$ID}" ;
        $rs = mysqli_query($conn, $sql) or die ("Não foi possivel conectat com o banco de dados  :( ");
                $linha = mysqli_fetch_assoc($rs);

$situacao = 1;

$sql = "UPDATE compra SET

situacao= '{$situacao}'
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