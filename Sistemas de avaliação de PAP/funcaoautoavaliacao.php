<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){

include "config.php";
// Escape user inputs for security
$nota = $_POST['autoavaliacao'];
$id = $_GET['id'];
    $sql="INSERT into autoavaliacao (naluno,notaautoavaliacao) VALUES ($id,$nota)";

    echo $sql;
    if($conn->query($sql) === true){
        ?>
        <script>
            alert("Auto Avaliação inserida com sucesso!");
            window.location.href="index.php?pap=avaliacoespreprojeto"
            </script>
            <?php
       
    } 
    else
    {
        ?>
        <script>
            alert("Erro ao inserir a Auto Avaliação!");
            window.location.href="index.php?pap=avaliacoespreprojeto"
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