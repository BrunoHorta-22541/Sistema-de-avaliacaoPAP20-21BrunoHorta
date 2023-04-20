<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$aplicacao = $_POST['s1'];
$crono = $_POST['s2'];
$prazo = $_POST['s3'];
$CV = $_POST['s4'];
$descrisao = $_POST['s5'];
$estrategias = $_POST['s6'];
$objetivos = $_POST['s7'];
$aplicacaoantiga=$_GET["S0"];
$cronoantiga=$_GET["S1"];
$prazoantiga=$_GET["S2"];
$CVantiga=$_GET["S3"];
$descrisaoantiga=$_GET["S4"];
$estrategiasantiga=$_GET["S5"];
$objetivosantiga=$_GET["S6"];



// Attempt insert query execution
$sql = "UPDATE preprojeto SET idcriterio='$aplicacao' where Nutilizador=$id and idcriterio=$aplicacaoantiga and faze='SupEscFormInt'";
$sql1= "UPDATE preprojeto SET idcriterio='$crono'  where Nutilizador=$id and idcriterio=$cronoantiga and faze='SupEscFormInt'";
$sql2= "UPDATE preprojeto SET idcriterio='$prazo'  where Nutilizador=$id and idcriterio=$prazoantiga and faze='SupEscFormInt'";
$sql3= "UPDATE preprojeto SET idcriterio='$CV'  where Nutilizador=$id and idcriterio=$CVantiga and faze='SupEscFormInt'";
$sql4= "UPDATE preprojeto SET idcriterio='$descrisao'   where Nutilizador=$id and idcriterio=$descrisaoantiga and faze='SupEscFormInt'";
$sql5= "UPDATE preprojeto SET idcriterio='$estrategias'  where Nutilizador=$id and idcriterio=$estrategiasantiga and faze='SupEscFormInt'";
$sql6= "UPDATE preprojeto SET idcriterio='$objetivos'  where Nutilizador=$id and idcriterio=$objetivosantiga and faze='SupEscFormInt'";
echo $sql;

if(($conn->query($sql) === true) && ($conn->query($sql1) === true) && ($conn->query($sql2) === true) && ($conn->query($sql3) === true) && ($conn->query($sql4) === true) && ($conn->query($sql5) === true) && ($conn->query($sql6) === true) ){
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