<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$nome = $_POST['Nome'];
$Nota = $_POST['Nota'];
$Obs = $_POST['Obs'];
$fase = $_POST['fase'];
 
// Attempt insert query execution
$sql = "INSERT INTO criterios (	nome,nota, observacao,Fase) VALUES ('$nome', '$Nota','$Obs','$fase')";
if($conn->query($sql) === true){
    ?>
    <script>
        alert("Critério inserido com sucesso!");
        window.location.href="index.php?pap=criterios"
        </script>
        <?php
   
} 
else
{
    ?>
    <script>
        alert("Erro ao inserir o Critério!");
        window.location.href="index.php?pap=criterios"
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