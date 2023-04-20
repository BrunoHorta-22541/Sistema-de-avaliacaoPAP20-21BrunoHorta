<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$ps1 = $_POST['fe1'];
$ps2 = $_POST['fe2'];
$ps3 = $_POST['fe3'];
$ps4 = $_POST['fe4'];
$ps5 = $_POST['fe5'];
$ps6 = $_POST['fe6'];
$ps7 = $_POST['fe7'];
$ps8 = $_POST['fe8'];
$ps1antiga=$_GET["FE0"];
$ps2antiga=$_GET["FE1"];
$ps3antiga=$_GET["FE2"];
$ps4antiga=$_GET["FE3"];
$ps5antiga=$_GET["FE4"];
$ps6antiga=$_GET["FE5"];
$ps7antiga=$_GET["FE6"];
$ps8antiga=$_GET["FE7"];


// Attempt insert query execution
$sql = "UPDATE preprojeto SET idcriterio='$ps1' where Nutilizador=$id and idcriterio=$ps1antiga and faze='Feira_Empreendedorismo'";
$sql1= "UPDATE preprojeto SET idcriterio='$ps2'  where Nutilizador=$id and idcriterio=$ps2antiga and faze='Feira_Empreendedorismo'";
$sql2= "UPDATE preprojeto SET idcriterio='$ps3'  where Nutilizador=$id and idcriterio=$ps3antiga and faze='Feira_Empreendedorismo'";
$sql3= "UPDATE preprojeto SET idcriterio='$ps4'  where Nutilizador=$id and idcriterio=$ps4antiga and faze='Feira_Empreendedorismo'";
$sql4= "UPDATE preprojeto SET idcriterio='$ps5'   where Nutilizador=$id and idcriterio=$ps5antiga and faze='Feira_Empreendedorismo'";
$sql5= "UPDATE preprojeto SET idcriterio='$ps6'  where Nutilizador=$id and idcriterio=$ps6antiga and faze='Feira_Empreendedorismo'";
$sql6= "UPDATE preprojeto SET idcriterio='$ps7'  where Nutilizador=$id and idcriterio=$ps7antiga and faze='Feira_Empreendedorismo'";
$sql7= "UPDATE preprojeto SET idcriterio='$ps8'  where Nutilizador=$id and idcriterio=$ps8antiga and faze='Feira_Empreendedorismo'";
echo $sql;

if(($conn->query($sql) === true) && ($conn->query($sql1) === true) && ($conn->query($sql2) === true) && ($conn->query($sql3) === true) && ($conn->query($sql4) === true) && ($conn->query($sql5) === true) && ($conn->query($sql6) === true) && ($conn->query($sql7) === true)){
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