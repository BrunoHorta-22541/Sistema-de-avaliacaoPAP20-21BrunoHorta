<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<?php
include "config.php";
$id = $_GET['id'];
 
// Attempt insert query execution
$sql = "delete from avaliacaogeral where idavaliacao=$id";
if($conn->query($sql) === true){
    ?>
    <script>
        alert("Avaliação Geral apagada com sucesso!");
        window.location.href="index.php?pap=home"
        </script>
        <?php
   
} 
else
{
    ?>
    <script>
        alert("Erro ao apagar a Avaliação Geral!");
        window.location.href="index.php?pap=home"
        </script>
        <?php
    echo "Erro ao apagar $sql. " . $mysqli->error;
}

?><?php
}else{
    header("Location: login.php");
    exit();
}?>