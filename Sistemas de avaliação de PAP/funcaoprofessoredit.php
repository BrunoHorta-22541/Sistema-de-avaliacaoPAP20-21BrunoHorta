<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>
<?php 
include "config.php";
$id=$_GET['id'];
$numeroprofessor = $_POST['numeroprofessor'];
$nomeprofessor = $_POST['nomeprofessor'];

$email = $_POST['email'];
/*  $name = $_FILES['foto']['name'];
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
    $sql = "INSERT INTO aluno (	Naluno,NomeAluno, Curso,Cargo, email, 	imagem) VALUES ('$numeroaluno', '$nomealuno','$curso','Aluno', '$email','$name')";*/
    
    $sql="UPDATE utilizador SET Nomeutilizador='$nomealuno', email='$email' where Nutilizador=".$id;
    echo $sql;
    if($conn->query($sql) === true){

        ?>
        <script>
            alert("Professor atualizado com sucesso!");
           window.location.href="index.php?pap=home"
            </script>
            <?php
       
    } 
    else
    {
        ?>
        <script>
            alert("Erro ao atualizar o Professor!");
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