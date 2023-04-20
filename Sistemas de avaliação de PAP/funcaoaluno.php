<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){

include "config.php";
// Escape user inputs for security
$numeroaluno = $_POST['numeroaluno'];
$nomealuno = $_POST['nomealuno'];
$curso = $_POST['curso'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$projeto = $_POST['projeto'];
$passe=$_POST['passe'];
$name = $_FILES['foto']['name'];
$target_dir = "imagens/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);

// Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");

// Check extension
if( in_array($imageFileType,$extensions_arr) ){

   // Insert record
   $query = "insert into images(name) values('".$name."')";
   mysqli_query($conn,$query);

   // Upload file
  if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$name)){
    $sql = "INSERT INTO utilizador (Nutilizador,Nomeutilizador, curso,Cargo, email,Projeto, imagem, pass) VALUES ('$numeroaluno', '$nomealuno','$curso','Aluno', '$email','$projeto','$name','$passe')";
    echo $sql;
    if($conn->query($sql) === true){
        ?>
        <script>
            alert("Aluno inserido com sucesso!");
            window.location.href="index.php?pap=home"
            </script>
            <?php
       
    } 
    else
    {
        ?>
        <script>
            alert("Erro ao inserir o Aluno!");
            //window.location.href="index.php?pap=home"
            </script>
            <?php
        echo "Erro ao inserir $sql. " . $mysqli->error;
    }
  }}

  ?>
   <?php
}else{
    header("Location: login.php");
    exit();
}?>