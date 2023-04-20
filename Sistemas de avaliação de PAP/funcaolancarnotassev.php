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
echo $ps1."<br>";
echo $ps2."<br>";
echo $ps3."<br>";
echo $ps4."<br>";
echo $ps5."<br>";
echo $ps6."<br>";
echo $ps7."<br>";
$notafinal=$ps1+$ps2+$ps3+$ps4+$ps5+$ps6+$ps7;
echo $notafinal;

 
// Attempt insert query execution
$sql = "INSERT INTO preprojeto (Nutilizador,idcriterio,faze) VALUES ('$id','$ps1','Sumario_Executivo_Video'),
('$id','$ps2','Sumario_Executivo_Video'),
('$id','$ps3','Sumario_Executivo_Video'),
('$id','$ps4','Sumario_Executivo_Video'),
('$id','$ps5','Sumario_Executivo_Video'),
('$id','$ps6','Sumario_Executivo_Video'),
('$id','$ps7','Sumario_Executivo_Video')";
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
        //window.location.href="index.php?pap=avaliacoespreprojeto"
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