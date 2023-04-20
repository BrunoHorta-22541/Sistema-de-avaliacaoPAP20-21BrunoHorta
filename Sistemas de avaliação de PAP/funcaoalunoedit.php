<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<?php 
include "config.php";
$id=$_GET['id'];
$nomealuno = $_POST['nomealuno'];
$email = $_POST['email'];
$projeto = $_POST['projeto'];
    $sql="UPDATE utilizador SET Nomeutilizador='$nomealuno', email='$email', Projeto='$projeto' where Nutilizador=".$id;
    echo $sql;
    if($conn->query($sql) === true){

        ?>
        <script>
            alert("Aluno atualizado com sucesso!");
           window.location.href="index.php?pap=home"
            </script>
            <?php
       
    } 
    else
    {
        ?>
        <script>
            alert("Erro ao atualizar o Aluno!");
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