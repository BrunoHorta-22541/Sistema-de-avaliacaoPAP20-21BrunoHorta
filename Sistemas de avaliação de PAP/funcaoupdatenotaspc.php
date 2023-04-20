<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$ps1 = $_POST['pc1'];
$ps2 = $_POST['pc2'];
$ps3 = $_POST['pc3'];
$ps4 = $_POST['pc4'];
$ps5 = $_POST['pc5'];
$ps6 = $_POST['pc6'];
$ps7 = $_POST['pc7'];
$ps8 = $_POST['pc8'];
$ps9 = $_POST['pc9'];
$ps10 = $_POST['pc10'];
$ps11 = $_POST['pc11'];
$ps1antiga=$_GET["PC0"];
$ps2antiga=$_GET["PC1"];
$ps3antiga=$_GET["PC2"];
$ps4antiga=$_GET["PC3"];
$ps5antiga=$_GET["PC4"];
$ps6antiga=$_GET["PC5"];
$ps7antiga=$_GET["PC6"];
$ps8antiga=$_GET["PC7"];
$ps9antiga=$_GET["PC8"];
$ps10antiga=$_GET["PC9"];
$ps11antiga=$_GET["PC10"];



// Attempt insert query execution
$sql = "UPDATE preprojeto SET idcriterio='$ps1' where Nutilizador=$id and idcriterio=$ps1antiga and faze='Prova_Criativa_cozinha'";
$sql1= "UPDATE preprojeto SET idcriterio='$ps2'  where Nutilizador=$id and idcriterio=$ps2antiga and faze='Prova_Criativa_cozinha'";
$sql2= "UPDATE preprojeto SET idcriterio='$ps3'  where Nutilizador=$id and idcriterio=$ps3antiga and faze='Prova_Criativa_cozinha'";
$sql3= "UPDATE preprojeto SET idcriterio='$ps4'  where Nutilizador=$id and idcriterio=$ps4antiga and faze='Prova_Criativa_cozinha'";
$sql4= "UPDATE preprojeto SET idcriterio='$ps5'   where Nutilizador=$id and idcriterio=$ps5antiga and faze='Prova_Criativa_cozinha'";
$sql5= "UPDATE preprojeto SET idcriterio='$ps6'  where Nutilizador=$id and idcriterio=$ps6antiga and faze='Prova_Criativa_cozinha'";
$sql6= "UPDATE preprojeto SET idcriterio='$ps7'  where Nutilizador=$id and idcriterio=$ps7antiga and faze='Prova_Criativa_cozinha'";
$sql7 = "UPDATE preprojeto SET idcriterio='$ps8' where Nutilizador=$id and idcriterio=$ps8antiga and faze='Prova_Criativa_cozinha'";
$sql8= "UPDATE preprojeto SET idcriterio='$ps9'  where Nutilizador=$id and idcriterio=$ps9antiga and faze='Prova_Criativa_cozinha'";
$sql9= "UPDATE preprojeto SET idcriterio='$ps10'  where Nutilizador=$id and idcriterio=$ps10antiga and faze='Prova_Criativa_cozinha'";
$sql10= "UPDATE preprojeto SET idcriterio='$ps11'  where Nutilizador=$id and idcriterio=$ps11antiga and faze='Prova_Criativa_cozinha'";
echo $sql;

if(($conn->query($sql) === true) && ($conn->query($sql1) === true) && ($conn->query($sql2) === true) && ($conn->query($sql3) === true) && ($conn->query($sql4) === true) && ($conn->query($sql5) === true) && ($conn->query($sql6) === true)&& ($conn->query($sql7) === true)&& ($conn->query($sql8) === true) && ($conn->query($sql9) === true) && ($conn->query($sql10) === true) ){
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