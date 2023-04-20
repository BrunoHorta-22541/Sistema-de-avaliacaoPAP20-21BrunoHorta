<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$aplicacao = $_POST['p1'];
$crono = $_POST['p2'];
$prazo = $_POST['p3'];
$CV = $_POST['p4'];
$descrisao = $_POST['p5'];
$estrategias = $_POST['p6'];
$objetivos = $_POST['p7'];
$recursos = $_POST['p8'];
$aplicacaoantiga=$_GET["P0"];
$cronoantiga=$_GET["P1"];
$prazoantiga=$_GET["P2"];
$CVantiga=$_GET["P3"];
$descrisaoantiga=$_GET["P4"];
$estrategiasantiga=$_GET["P5"];
$objetivosantiga=$_GET["P6"];
$recursosantiga=$_GET["P7"];



// Attempt insert query execution
$sql = "UPDATE preprojeto SET idcriterio='$aplicacao' where Nutilizador=$id and idcriterio=$aplicacaoantiga and faze='PreProjeto'";
$sql1= "UPDATE preprojeto SET idcriterio='$crono'  where Nutilizador=$id and idcriterio=$cronoantiga and faze='PreProjeto'";
$sql2= "UPDATE preprojeto SET idcriterio='$prazo'  where Nutilizador=$id and idcriterio=$prazoantiga and faze='PreProjeto'";
$sql3= "UPDATE preprojeto SET idcriterio='$CV'  where Nutilizador=$id and idcriterio=$CVantiga and faze='PreProjeto'";
$sql4= "UPDATE preprojeto SET idcriterio='$descrisao'   where Nutilizador=$id and idcriterio=$descrisaoantiga and faze='PreProjeto'";
$sql5= "UPDATE preprojeto SET idcriterio='$estrategias'  where Nutilizador=$id and idcriterio=$estrategiasantiga and faze='PreProjeto'";
$sql6= "UPDATE preprojeto SET idcriterio='$objetivos'  where Nutilizador=$id and idcriterio=$objetivosantiga and faze='PreProjeto'";
$sql7= "UPDATE preprojeto SET idcriterio='$recursos'   where Nutilizador=$id and idcriterio=$recursosantiga and faze='PreProjeto'";
echo $sql;

if(($conn->query($sql) === true) && ($conn->query($sql1) === true) && ($conn->query($sql2) === true) && ($conn->query($sql3) === true) && ($conn->query($sql4) === true) && ($conn->query($sql5) === true) && ($conn->query($sql6) === true) && ($conn->query($sql7) === true) ){
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
        window.location.href="index.php?pap=avaliacoespreprojeto    "
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