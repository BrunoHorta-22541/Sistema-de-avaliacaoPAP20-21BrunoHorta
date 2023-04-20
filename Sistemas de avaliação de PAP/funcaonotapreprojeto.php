<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$id=$_GET['id'];
$aplicacao = $_POST['p1'];
$crono = $_POST['p2'];
$prazo = $_POST['p3'];
$CV = $_POST['p4'];
$descrisao = $_POST['p5'];
$estrategias = $_POST['p6'];
$objetivos = $_POST['p7'];
$recursos = $_POST['p8'];
echo $aplicacao."<br>";
echo $crono."<br>";
echo $prazo."<br>";
echo $CV."<br>";
echo $descrisao."<br>";
echo $estrategias."<br>";
echo $objetivos."<br>";
echo $recursos."<br>";
$notafinal=$aplicacao+$crono+$prazo+$CV+$descrisao+$estrategias+$objetivos+$recursos;
echo $notafinal;

 
// Attempt insert query execution
$sql = "INSERT INTO preprojeto (Nutilizador,idcriterio,faze) VALUES ('$id','$aplicacao','Preprojeto'),
('$id','$crono','Preprojeto'),
('$id','$prazo','Preprojeto'),
('$id','$CV','Preprojeto'),
('$id','$descrisao','Preprojeto'),
('$id','$estrategias','Preprojeto'),
('$id','$objetivos','Preprojeto'),
('$id','$recursos','Preprojeto')";
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