<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$ps1 = $_POST['sev1'];
$ps2 = $_POST['sev2'];
$ps3 = $_POST['sev3'];
$ps4 = $_POST['sev4'];
$ps5 = $_POST['sev5'];
$ps6 = $_POST['sev6'];
$ps7 = $_POST['sev7'];
$ps1antiga=$_GET["SEV0"];
$ps2antiga=$_GET["SEV1"];
$ps3antiga=$_GET["SEV2"];
$ps4antiga=$_GET["SEV3"];
$ps5antiga=$_GET["SEV4"];
$ps6antiga=$_GET["SEV5"];
$ps7antiga=$_GET["SEV6"];



// Attempt insert query execution
$sql = "UPDATE preprojeto SET idcriterio='$ps1' where Nutilizador=$id and idcriterio=$ps1antiga and faze='Sumario_Executivo_Video'";
$sql1= "UPDATE preprojeto SET idcriterio='$ps2'  where Nutilizador=$id and idcriterio=$ps2antiga and faze='Sumario_Executivo_Video'";
$sql2= "UPDATE preprojeto SET idcriterio='$ps3'  where Nutilizador=$id and idcriterio=$ps3antiga and faze='Sumario_Executivo_Video'";
$sql3= "UPDATE preprojeto SET idcriterio='$ps4'  where Nutilizador=$id and idcriterio=$ps4antiga and faze='Sumario_Executivo_Video'";
$sql4= "UPDATE preprojeto SET idcriterio='$ps5'   where Nutilizador=$id and idcriterio=$ps5antiga and faze='Sumario_Executivo_Video'";
$sql5= "UPDATE preprojeto SET idcriterio='$ps6'  where Nutilizador=$id and idcriterio=$ps6antiga and faze='Sumario_Executivo_Video'";
$sql6= "UPDATE preprojeto SET idcriterio='$ps7'  where Nutilizador=$id and idcriterio=$ps7antiga and faze='Sumario_Executivo_Video'";
echo $sql;

if(($conn->query($sql) === true) && ($conn->query($sql1) === true) && ($conn->query($sql2) === true) && ($conn->query($sql3) === true) && ($conn->query($sql4) === true) && ($conn->query($sql5) === true) && ($conn->query($sql6) === true)){
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