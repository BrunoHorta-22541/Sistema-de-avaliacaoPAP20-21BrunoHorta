<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<!-- Inserir dados na base de dados-->
<?php
include "config.php";
// Escape user inputs for security
$numeroprofessor = $_POST['numeroprofessor'];
$nomeprofessor = $_POST['nomeprofessor'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
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
    $sql = "INSERT INTO utilizador (Nutilizador,Nomeutilizador, cargo, email, imagem,pass) VALUES ('$numeroprofessor', '$nomeprofessor','Professor', '$email','$name','$passe')";
    if($conn->query($sql) === true){
        ?>
        <script>
            alert("Professor inserido com sucesso!");
            window.location.href="index.php?pap=home"
            </script>
            <?php
       
    } 
    else
    {
        ?>
        <script>
            alert("Erro ao inserir o Professor!");
            //window.location.href="index.php?pap=home"
            </script>
            <?php
        echo "Erro ao inserir $sql. " . $mysqli->error;
    }
  }}
// Attempt insert query execution


 

?>



<?php
}else{
    header("Location: login.php");
    exit();
}?>