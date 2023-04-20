<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$Nota = $_POST['Nota'];
$curso = $_POST['curso'];
$fase = $_POST['fase'];
 
// Attempt insert query execution
$sql = "INSERT INTO avaliacaogeral (notageral, idcurso,fases) VALUES ( '$Nota','$curso','$fase')";
if($conn->query($sql) === true){
    ?>
    <script>
        alert("Avaliação Geral inserida com sucesso!");
        window.location.href="index.php?pap=avaliacaogeral"
        </script>
        <?php
   
} 
else
{
    ?>
    <script>
        alert("Erro ao inserir a Avaliação Geral!");
        //window.location.href="index.php?pap=avaliacaogeral"
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