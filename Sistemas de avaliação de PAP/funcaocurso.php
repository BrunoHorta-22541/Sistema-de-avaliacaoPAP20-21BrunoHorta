<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>
<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$nome = $_POST['nomecurso'];
$sigla = $_POST['sigla'];
$cicloformacao = $_POST['cicloformacao'];
$Anoletivo = $_POST['Anoletivo'];
$prof = $_POST['select'];
 
// Attempt insert query execution
$sql = "INSERT INTO curso (	nomecurso,sigla, cicloformacao,anoletivo, professor) VALUES ('$nome', '$sigla','$cicloformacao',$Anoletivo, $prof)";
if($conn->query($sql) === true){
    ?>
    <script>
        alert("Curso inserido com sucesso!");
        window.location.href="index.php?pap=home"
        </script>
        <?php
   
} 
else
{
    ?>
    <script>
        alert("Erro ao inserir o Curso!");
        window.location.href="index.php?pap=home"
        </script>
        <?php
    echo "Erro ao inserir $sql. " . $mysqli->error;
}
 

?><?php
}else{
    header("Location: login.php");
    exit();
}?>