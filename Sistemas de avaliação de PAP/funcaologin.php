<?php
session_start();
include "config.php";
if(isset($_POST['numero']) && isset($_POST['palavrapasse'])){
 function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }
   $username = validate($_POST['numero']);
   $pass = validate($_POST['palavrapasse']);

   if(empty($username)){
      header("Location: login.php?error=Numero de Utilizador necessario");
      exit();
   }else if(empty($pass)){
      header("Location: login.php?error=Palavra Passe necessaria");
      exit();
   }else{
      $sql = "SELECT * from utilizador where Nutilizador=$username AND pass='$pass'";

      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
         if($row['Nutilizador'] === $username && $row['pass'] === $pass){
            $_SESSION["Nutilizador"] = $row['Nutilizador'];
            $_SESSION["Nomeutilizador"] = $row['Nomeutilizador'];
            $_SESSION["Cargo"] = $row['Cargo'];
            header("Location: index.php?pap=home");
            exit();
         }else{
            header("Location: login.php?error=Numero ou palavra passe incorreto");
            exit();
         }
      }else{
         header("Location: login.php?error=Numero ou palavra passe incorreto");
         exit();
      }
   }
}else{
   header("Location: login.php");
   exit();
}

