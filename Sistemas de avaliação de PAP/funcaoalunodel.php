<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<?php
include "config.php";
$id = $_GET['id'];
 
// Attempt insert query execution
$sql = "delete from utilizador where Nutilizador=$id";
if($conn->query($sql) === true){
    ?>
    <script>
        alert("Aluno apagado com sucesso!");
        window.location.href="index.php?pap=aluno"
        </script>
        <?php
   
} 
else
{
    ?>
    <script>
        alert("Erro ao apagar o Aluno!");
        window.location.href="index.php?pap=aluno"
        </script>
        <?php
    echo "Erro ao apagar $sql. " . $mysqli->error;
}

?><?php
}else{
    header("Location: login.php");
    exit();
}?>