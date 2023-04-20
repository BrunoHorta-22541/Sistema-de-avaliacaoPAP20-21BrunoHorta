<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$aplicacao = $_POST['r1'];
$crono = $_POST['r2'];
$prazo = $_POST['r3'];
$CV = $_POST['r4'];
$aplicacaoantiga=$_GET["R0"];
$cronoantiga=$_GET["R1"];
$prazoantiga=$_GET["R2"];
$CVantiga=$_GET["R3"];


// Attempt insert query execution
$sql = "UPDATE preprojeto SET idcriterio='$aplicacao' where Nutilizador=$id and idcriterio=$aplicacaoantiga and faze='RelatorioFinal' ";
$sql1= "UPDATE preprojeto SET idcriterio='$crono'  where Nutilizador=$id and idcriterio=$cronoantiga and faze='RelatorioFinal'";
$sql2= "UPDATE preprojeto SET idcriterio='$prazo' where Nutilizador=$id and idcriterio=$prazoantiga and faze='RelatorioFinal'";
$sql3= "UPDATE preprojeto SET idcriterio='$CV'  where Nutilizador=$id and idcriterio=$CVantiga and faze='RelatorioFinal'";
echo $sql;

if(($conn->query($sql) === true) && ($conn->query($sql1) === true) && ($conn->query($sql2) === true) && ($conn->query($sql3) === true) ){
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
        window.location.href="index.php?pap=avaliacoespreprojeto"
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