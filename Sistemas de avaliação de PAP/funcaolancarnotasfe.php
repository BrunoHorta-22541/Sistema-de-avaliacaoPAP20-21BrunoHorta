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
echo $ps1."<br>";
echo $ps2."<br>";
echo $ps3."<br>";
echo $ps4."<br>";
echo $ps5."<br>";
echo $ps6."<br>";
echo $ps7."<br>";
echo $ps8."<br>";
$notafinal=$ps1+$ps2+$ps3+$ps4+$ps5+$ps6+$ps7+$ps8;
echo $notafinal;

 
// Attempt insert query execution
$sql = "INSERT INTO preprojeto (Nutilizador,idcriterio,faze) VALUES ('$id','$ps1','Feira_Empreendedorismo'),
('$id','$ps2','Feira_Empreendedorismo'),
('$id','$ps3','Feira_Empreendedorismo'),
('$id','$ps4','Feira_Empreendedorismo'),
('$id','$ps5','Feira_Empreendedorismo'),
('$id','$ps6','Feira_Empreendedorismo'),
('$id','$ps7','Feira_Empreendedorismo'),
('$id','$ps8','Feira_Empreendedorismo')";
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