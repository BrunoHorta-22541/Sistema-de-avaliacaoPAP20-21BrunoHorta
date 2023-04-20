<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";

// Escape user inputs for security
$id=$_GET['id'];
$nome = $_POST['Nome'];
$Nota = $_POST['Nota'];
$Obs = $_POST['Obs'];
$fase = $_POST['fase'];
 
// Attempt insert query execution
$sql="UPDATE criterios SET nome='$nome', nota='$Nota', observacao='$Obs' where idcriterio=".$id ;
    if($conn->query($sql) === true){

        ?>
        <script>
            alert("Criterio atualizado com sucesso!");
           window.location.href="index.php?pap=home"
            </script>
            <?php
       
    } 
    else
    {
        ?>
        <script>
            alert("Erro ao atualizar o Criterio!");
           // window.location.href="index.php?pap=home"
            </script>
            <?php
        echo "Erro ao inserir $sql. " . $mysqli->error;
    }

?><?php
}else{
    header("Location: login.php");
    exit();
}?>