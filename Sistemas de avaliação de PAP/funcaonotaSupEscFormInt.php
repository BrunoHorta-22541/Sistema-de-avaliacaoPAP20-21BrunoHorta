<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$aplicacao = $_POST['s1'];
$crono = $_POST['s2'];
$prazo = $_POST['s3'];
$CV = $_POST['s4'];
$descrisao = $_POST['s5'];
$estrategias = $_POST['s6'];
$objetivos = $_POST['s7'];
echo $aplicacao."<br>";
echo $crono."<br>";
echo $prazo."<br>";
echo $CV."<br>";
echo $descrisao."<br>";
echo $estrategias."<br>";
echo $objetivos."<br>";
$notafinal=$aplicacao+$crono+$prazo+$CV+$descrisao+$estrategias+$objetivos;
echo $notafinal;

 
// Attempt insert query execution
$sql = "INSERT INTO preprojeto (Nutilizador,idcriterio,faze) VALUES ('$id','$aplicacao','SupEscFormInt'),
('$id','$crono','SupEscFormInt'),
('$id','$prazo','SupEscFormInt'),
('$id','$CV','SupEscFormInt'),
('$id','$descrisao','SupEscFormInt'),
('$id','$estrategias','SupEscFormInt'),
('$id','$objetivos','SupEscFormInt')";
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