<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$aplicacao = $_POST['a1'];
$crono = $_POST['a2'];
$prazo = $_POST['a3'];
$CV = $_POST['a4'];
echo $aplicacao."<br>";
echo $crono."<br>";
echo $prazo."<br>";
echo $CV."<br>";
$notafinal=$aplicacao+$crono+$prazo+$CV;
echo $notafinal;

 
// Attempt insert query execution
$sql = "INSERT INTO preprojeto (Nutilizador,idcriterio,faze) VALUES ('$id','$aplicacao','Apr_Oral_Defesa_Projeto'),
('$id','$crono','Apr_Oral_Defesa_Projeto'),
('$id','$prazo','Apr_Oral_Defesa_Projeto'),
('$id','$CV','Apr_Oral_Defesa_Projeto')";
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