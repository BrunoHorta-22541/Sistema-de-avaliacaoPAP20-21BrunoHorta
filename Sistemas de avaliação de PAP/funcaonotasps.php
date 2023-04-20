<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$ps1 = $_POST['ps1'];
$ps2 = $_POST['ps2'];
$ps3 = $_POST['ps3'];
$ps4 = $_POST['ps4'];
$ps5 = $_POST['ps5'];
$ps6 = $_POST['ps6'];
$ps7 = $_POST['ps7'];
$ps8 = $_POST['ps8'];
$ps9 = $_POST['ps9'];
$ps10 = $_POST['ps10'];
$ps11 = $_POST['ps11'];
echo $ps1."<br>";
echo $ps2."<br>";
echo $ps3."<br>";
echo $ps4."<br>";
echo $ps5."<br>";
echo $ps6."<br>";
echo $ps7."<br>";
echo $ps8."<br>";
echo $ps9."<br>";
echo $ps10."<br>";
echo $ps11."<br>";
$notafinal=$ps1+$ps2+$ps3+$ps4+$ps5+$ps6+$ps7+$ps8+$ps9+$ps10+$ps11;
echo $notafinal;

 
// Attempt insert query execution
$sql = "INSERT INTO preprojeto (Nutilizador,idcriterio,faze) VALUES ('$id','$ps1','Prova_Supresa_cozinha'),
('$id','$ps2','Prova_Supresa_cozinha'),
('$id','$ps3','Prova_Supresa_cozinha'),
('$id','$ps4','Prova_Supresa_cozinha'),
('$id','$ps5','Prova_Supresa_cozinha'),
('$id','$ps6','Prova_Supresa_cozinha'),
('$id','$ps7','Prova_Supresa_cozinha'),
('$id','$ps8','Prova_Supresa_cozinha'),
('$id','$ps9','Prova_Supresa_cozinha'),
('$id','$ps10','Prova_Supresa_cozinha'),
('$id','$ps11','Prova_Supresa_cozinha')";
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