  <?php
include("../conexao.php");
$ID= $_GET["ID"];
$sql = "DELETE * FROM produtor where ID= {$ID}" ;
$rs = mysqli_query($conn, $sql) or die ("Não foi possivel conectat com o banco de dados  :( ");

mysqli_query($conn, $sql);

mysqli_close($conn);
echo "Usuário excluido com sucesso.";
?> 

