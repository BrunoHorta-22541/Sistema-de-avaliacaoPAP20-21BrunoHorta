
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
        alert("Professor apagado com sucesso!");
        window.location.href="index.php?pap=home"
        </script>
        <?php
   
} 
else
{
    ?>
    <script>
        alert("Erro ao apagar o Professor!");
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