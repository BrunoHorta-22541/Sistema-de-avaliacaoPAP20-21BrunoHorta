<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";

// Escape user inputs for security
$id=$_GET['id'];
$Nota = $_POST['Nota'];
 
// Attempt insert query execution
$sql="UPDATE avaliacaogeral SET  notageral='$Nota' where idavaliacao=".$id ;
    if($conn->query($sql) === true){

        ?>
        <script>
            alert("Avaliação Geral atualizada com sucesso!");
           window.location.href="index.php?pap=home"
            </script>
            <?php
       
    } 
    else
    {
        ?>
        <script>
            alert("Erro ao atualizar a Avaliação Geral!");
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