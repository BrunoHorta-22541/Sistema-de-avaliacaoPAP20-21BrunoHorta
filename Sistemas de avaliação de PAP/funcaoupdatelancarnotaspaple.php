<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$ps1 = $_POST['pl1'];
$ps2 = $_POST['pl2'];
$ps3 = $_POST['pl3'];
$ps4 = $_POST['pl4'];
$ps5 = $_POST['pl5'];
$ps1antiga=$_GET["PL0"];
$ps2antiga=$_GET["PL1"];
$ps3antiga=$_GET["PL2"];
$ps4antiga=$_GET["PL3"];
$ps5antiga=$_GET["PL4"];


// Attempt insert query execution
$sql = "UPDATE preprojeto SET idcriterio='$ps1' where Nutilizador=$id and idcriterio=$ps1antiga and faze='PAPLinguaEstrangeira'";
$sql1= "UPDATE preprojeto SET idcriterio='$ps2'  where Nutilizador=$id and idcriterio=$ps2antiga and faze='PAPLinguaEstrangeira'";
$sql2= "UPDATE preprojeto SET idcriterio='$ps3'  where Nutilizador=$id and idcriterio=$ps3antiga and faze='PAPLinguaEstrangeira'";
$sql3= "UPDATE preprojeto SET idcriterio='$ps4'  where Nutilizador=$id and idcriterio=$ps4antiga and faze='PAPLinguaEstrangeira'";
$sql4= "UPDATE preprojeto SET idcriterio='$ps5'   where Nutilizador=$id and idcriterio=$ps5antiga and faze='PAPLinguaEstrangeira'";
echo $sql;

if(($conn->query($sql) === true) && ($conn->query($sql1) === true) && ($conn->query($sql2) === true) && ($conn->query($sql3) === true) && ($conn->query($sql4) === true)){
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