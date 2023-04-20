<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){

include "config.php";
// Escape user inputs for security
$nota = $_POST['trabalho'];
$id = $_GET['id'];
    $sql="INSERT into trabalhodesenvolvido (numeroaluno,notatrabdesenvolvido) VALUES ($id,$nota)";

    echo $sql;
    if($conn->query($sql) === true){
        ?>
        <script>
            alert("Trabalho Desenvolvido inserido com sucesso!");
            window.location.href="index.php?pap=avaliacoespreprojeto"
            </script>
            <?php
       
    } 
    else
    {
        ?>
        <script>
            alert("Erro ao inserir o Trabalho Desenvolvido!");
            //window.location.href="index.php?pap=avaliacoespreprojeto"
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