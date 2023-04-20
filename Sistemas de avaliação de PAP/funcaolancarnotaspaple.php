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
echo $ps1."<br>";
echo $ps2."<br>";
echo $ps3."<br>";
echo $ps4."<br>";
echo $ps5."<br>";
$notafinal=$ps1+$ps2+$ps3+$ps4+$ps5;
echo $notafinal;

 
// Attempt insert query execution
$sql = "INSERT INTO preprojeto (Nutilizador,idcriterio,faze) VALUES ('$id','$ps1','PAPLinguaEstrangeira'),
('$id','$ps2','PAPLinguaEstrangeira'),
('$id','$ps3','PAPLinguaEstrangeira'),
('$id','$ps4','PAPLinguaEstrangeira'),
('$id','$ps5','PAPLinguaEstrangeira')";
if($conn->query($sql) === true){
    ?>
    <script>
        alert("Avaliação inserida com sucesso!");
        window.location.href="index.php?pap=avaliacoespreprojeto"
        </script>
        <?php
   
} 
else
{
    ?>
    <script>
        alert("Erro ao inserir a Avaliação!");
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