<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>
<!-- Inserir dados na base de dados-->
<?php
include "config.php";

// Escape user inputs for security
$id=$_GET['id'];
$nome = $_POST['nomecurso'];
$sigla = $_POST['sigla'];
$cicloformacao = $_POST['cicloformacao'];
$Anoletivo = $_POST['Anoletivo'];
 
// Attempt insert query execution
$sql="UPDATE curso SET nomecurso='$nome', sigla='$sigla', cicloformacao='$cicloformacao', anoletivo='$Anoletivo' where idcurso=".$id ;
    if($conn->query($sql) === true){

        ?>
        <script>
            alert("Curso atualizado com sucesso!");
            window.location.href="index.php?pap=home"
            </script>
            <?php
       
    } 
    else
    {
        ?>
        <script>
            alert("Erro ao atualizar o Curso!");
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