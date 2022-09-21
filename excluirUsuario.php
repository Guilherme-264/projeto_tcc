  <?php
include("../conexao.php");
$ID = mysqli_real_escape_string ($conn, $_GET["ID"]);
$sql = "DELETE FROM clientes WHERE ID= {$ID}";
mysqli_query($conn, $sql);

mysqli_close($conn);
echo "Usuário excluido com sucesso.";
?> 

