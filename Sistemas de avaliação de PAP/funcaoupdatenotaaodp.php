<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$aplicacao = $_POST['a1'];
$crono = $_POST['a2'];
$prazo = $_POST['a3'];
$CV = $_POST['a4'];

$aplicacaoantiga=$_GET["A0"];
$cronoantiga=$_GET["A1"];
$prazoantiga=$_GET["A2"];
$CVantiga=$_GET["A3"];




// Attempt insert query execution
$sql = "UPDATE preprojeto SET idcriterio='$aplicacao' where Nutilizador=$id and idcriterio=$aplicacaoantiga and faze='Apr_Oral_Defesa_Projeto'";
$sql1= "UPDATE preprojeto SET idcriterio='$crono'  where Nutilizador=$id and idcriterio=$cronoantiga and faze='Apr_Oral_Defesa_Projeto'";
$sql2= "UPDATE preprojeto SET idcriterio='$prazo'  where Nutilizador=$id and idcriterio=$prazoantiga and faze='Apr_Oral_Defesa_Projeto'";
$sql3= "UPDATE preprojeto SET idcriterio='$CV'  where Nutilizador=$id and idcriterio=$CVantiga and faze='Apr_Oral_Defesa_Projeto'";
echo $sql;

if(($conn->query($sql) === true) && ($conn->query($sql1) === true) && ($conn->query($sql2) === true) && ($conn->query($sql3) === true)){
    ?>
    <script>
        alert("Avaliação Atualizada com sucesso!");
        window.location.href="index.php?pap=avaliacoespreprojeto"
        </script>
        <?php
   
} 
else
{
    ?>
    <script>
        alert("Erro ao Atualizar a Avaliação!");
        //window.location.href="index.php?pap=avaliacoespreprojeto    "
        </script>
        <?php
    echo "Erro ao inserir $sql. " . $mysqli->error;
}
 

?>
<?php
}else{
    header("Location: login.php");
    exit();
}?>