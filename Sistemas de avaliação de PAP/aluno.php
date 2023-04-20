<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>GURU Able - Free Lite Admin Template </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>

  <!--<body class="fix-menu dark-layout">-->

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

           <?php include "menu.php"?>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-layout bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Escola Profissional de Alvito</h4>
                                                        <!--<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>-->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="?pap=home">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        
                                       
                                    
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Tab variant tab card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Prova de aptidão Profissional</h5>
                                                        <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                                    </div>
                                                    <div class="card-block tab-icon">
                                                        
                                                            <div class="col-lg-12 tab-with-img">
                                                                <div class="sub-title">Dados pessoais dos alunos</div>
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs md-tabs img-tabs b-none" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab" href="#adicionar" role="tab">
                                                                            <img src="imagens/icons/add100.png" class="img-fluid img-circle" alt="">
                                                                            <span class="quote"><i class="icofont icofont-quote-left bg-primary"></i></span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#profile8" role="tab">
                                                                            <img src="imagens/icons/search100.png" class="img-fluid img-circle" alt="">
                                                                            <span class="quote"><i class="icofont icofont-quote-left bg-primary"></i></span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#messages8" role="tab">
                                                                            <img src="imagens/icons/edit100.png" class="img-fluid img-circle" alt="">
                                                                            <span class="quote"><i class="icofont icofont-quote-left bg-primary"></i></span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#settings8" role="tab">
                                                                            <img src="imagens/icons/del100.png" class="img-fluid img-circle" alt="">
                                                                            <span class="quote"><i class="icofont icofont-quote-left bg-primary"></i></span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content card-block ">
                                                                    <div class="tab-pane active" id="adicionar" role="tabpanel">
                                                                        <p class="text-center m-0">
                                                                            
                                                            
                                                                <fieldset>
                                                                
                                                                    <!-- Form Name -->
                                                                    <hr>
                                                                    
                                                                             <!-- Basic Form Inputs card start -->
                                                                <div class="card">
                                                               
                                                                        </div>
                                                                        <div class="card-block">
                                                                        <?php
                                                                        if(!isset($_GET['id'])){?>
                                                                        
                                                                            <h4 class="sub-title">Inserir Alunos</h4>
                                                                                <form class="form-horizontal "action="funcaoaluno.php" method="post" enctype="multipart/form-data">
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Número do Aluno</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input id="numeroaluno" name="numeroaluno" type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Nome do Aluno</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input id="nomealuno" name="nomealuno" type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <?php 
                                                                                        include("config.php");
                                                                                        $sql2 = "select * from curso";  
                                                                                        $result2=$conn->query($sql2);
                                                                                        ?>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Curso</label>
                                                                                            <div class="col-sm-10">
                                                                                                <select name="curso" id="curso" class="form-control">
                                                                                                <?php if($result2->num_rows>0){
                                                                                           //output data of each row
                                                                                           foreach($result2 as $row){
                                                                                               $id=$row['idcurso'];
                                                                                                $ciclo=$row['cicloformacao'];
                                                                                                $Nome=$row['nomecurso'];?>
                                                                                                    <option value="<?php echo $id; ?>"><?php echo $Nome." ".$ciclo; ?></option>
                                                                                                    <?php }} ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Cargo</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input id="cargo" name="cargo"  type="text" class="form-control"
                                                                                                placeholder="Aluno" readonly>
                                                                                            </div>
                                                                                        </div>  
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Email</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input id="email" name="email" type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Nome do Projeto</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input id="projeto" name="projeto" type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Fotografia</label>
                                                                                                <div class="col-sm-10">
                                                                                                <input id="foto" name="foto" type="file" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Palavra Passe</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input id="passe" name="passe" type="password" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                       <!-- Button -->
                                                                                       <div class="form-group">
                                                                                            <label class="col-md-4 control-label" for="singlebutton"></label>
                                                                                            <div class="col-md-4"> 
                                                                                            <input type="submit"  value="Adicionar Aluno" class="btn btn-primary" >
                                                                                            </div>
                                                                                            </div>
                                                                         
                                                                                        
                                                                                <!-- Basic Form Inputs card end -->
                                                                                </fieldset>
                                                                        </form>
                                                                        <?php }else{
                                                                             include "config.php";
                                                                             $id = $_GET['id'];
                                                                             $sql = "select * from utilizador where Nutilizador=$id";  
                                                                             $result=$conn->query($sql);
                                                                             if($result->num_rows>0){
                                                                                //output data of each row
                                                                                foreach($result as $row){
                                                                                     $naluno=$row['Nutilizador'];
                                                                                     $NomeAluno=$row['Nomeutilizador'];
                                                                                     $Curso=$row['curso'];
                                                                                     $Email=$row['email'];
                                                                                     $projeto=$row['Projeto'];
                                                                                     $img=$row['imagem'];}}?>
                                                                            <h4 class="sub-title">Editar Alunos</h4>
                                                                                <form class="form-horizontal "action="funcaoalunoedit.php?id=<?php echo $naluno?> " method="post" enctype="multipart/form-data">
                                                                                        
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Número do Aluno</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input id="numeroaluno" value ="<?php echo $naluno ?>" name="numeroaluno" type="text" class="form-control" readonly>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Nome do Aluno</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input id="nomealuno" name="nomealuno" value ="<?php echo $NomeAluno ?>" type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Email</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input id="email" name="email" value ="<?php echo $Email ?>" type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label class="col-sm-2 col-form-label">Nome do Projeto</label>
                                                                                            <div class="col-sm-10">
                                                                                                <input id="projeto" name="projeto" value ="<?php echo $projeto ?>" type="text" class="form-control">
                                                                                            </div>
                                                                                        </div>
                                                                                       <!-- Button -->
                                                                                       <div class="form-group">
                                                                                            <label class="col-md-4 control-label" for="singlebutton"></label>
                                                                                            <div class="col-md-4">
                                                                                                <input type="submit" value="Atualizar Aluno" class="btn btn-primary" >
                                                                                            </div>
                                                                                        </div>
                                                                         
                                                                                        
                                                                                <!-- Basic Form Inputs card end -->
                                                                                </fieldset>
                                                                        </form>

                                                                                    
                                                                               
                                                                        <?php }?>
                                                                                </p>       
                                                                                </div>
                                                                                <div class="tab-pane" id="profile8" role="tabpanel">
                                                                                    <p class="text-center m-0">
                                                                                <!-- Hover table card start -->
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        <h5>Alunos</h5>
                                                                                    </div>
                                                                                    <div class="card-block table-border-style">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table table-hover">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>#</th>
                                                                                                        <th>Foto</th>
                                                                                                        <th>Numero de Aluno</th>
                                                                                                        <th>Nome do Aluno</th>
                                                                                                        <th>Curso</th>
                                                                                                        <th>Email</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                
                                                                                                    <?php
                                                                                                                        include "config.php";
                                                                                                                        mysqli_query($conn, "SET NAMES 'utf8'");
                                                                                                                        $sql = "select * from utilizador where cargo='Aluno' ";  
                                                                                                                        $result=$conn->query($sql);
                                                                                                                        $i=0;
                                                                                                                            if($result->num_rows>0){
                                                                                                                                //output data of each row
                                                                                                                                foreach($result as $row){
                                                                                                                                // print_r($row);
                                                                                                                                $naluno=$row['Nutilizador'];
                                                                                                                                $NomeAluno=$row['Nomeutilizador'];
                                                                                                                                $Curso=$row['curso'];
                                                                                                                                $Email=$row['email'];
                                                                                                                                $i++;
                                                                                                                                $img=$row['imagem'];?>
                                                                                                                        <tr>
                                                                                                                            <th scope="row"><?php echo $i?></th>
                                                                                                                            <td><img src = "imagens/<?php echo $img; ?>" width="50px" class = "img-thumbnail"></td>        
                                                                                                                            <td><?php echo $naluno; ?></td>
                                                                                                                            <td><?php echo $NomeAluno; ?></td>
                                                                                                                            <td><?php echo $Curso; ?></td>
                                                                                                                            <td><?php echo $Email; ?></td>
                                                                                                                        </tr>
                                                                                                                            <?php
                                                                                                                            }
                                                                                                                        }?>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Hover table card end -->
                                                                                    
                                                                                
                                                                                </div>
                                                                                <div class="tab-pane" id="messages8" role="tabpanel">
                                                                                    <p class="text-center m-0">
                                                                                        <!-- Hover table card start -->
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        <h5>Alunos</h5>
                                                                                    </div>
                                                                                    <div class="card-block table-border-style">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table table-hover">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>#</th>
                                                                                                        <th>Numero de Aluno</th>
                                                                                                        <th>Nome do Aluno</th>
                                                                                                        <th>Curso</th>
                                                                                                        <th>Email</th>
                                                                                                        <th>Editar</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                
                                                                                                    <?php
                                                                                                                        include "config.php";
                                                                                                                        $sql = "select * from utilizador where cargo='Aluno' ";  
                                                                                                                        $result=$conn->query($sql);
                                                                                                                        $i=0;
                                                                                                                            if($result->num_rows>0){
                                                                                                                                //output data of each row
                                                                                                                                foreach($result as $row){
                                                                                                                                // print_r($row);
                                                                                                                                $naluno=$row['Nutilizador'];
                                                                                                                                $NomeAluno=$row['Nomeutilizador'];
                                                                                                                                $Curso=$row['curso'];
                                                                                                                                $Email=$row['email'];
                                                                                                                                $i++;?>
                                                                                                                        <tr>
                                                                                                                            <th scope="row"><?php echo $i?></th>
                                                                                                                    
                                                                                                                            <td><?php echo $naluno; ?></td>
                                                                                                                            <td><?php echo $NomeAluno; ?></td>
                                                                                                                                    
                                                                                                                            <td><?php echo $Curso; ?></td>
                                                                                                                            <td><?php echo $Email; ?></td>
                                                                                                                            <td><a href="?pap=aluno&id=<?php echo $naluno?>"><i class="ti-pencil"></i></a></td>
                                                                                                                        </tr>
                                                                                                                            <?php
                                                                                                                            }
                                                                                                                        }?>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                </p>
                                                                                <!-- Hover table card end --> 
                                                                                </div>
                                                                                <div class="tab-pane" id="settings8" role="tabpanel">
                                                                                    <p class="text-center m-0">
                                                                                     <!-- Hover table card start -->
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        <h5>Alunos</h5>
                                                                                    </div>
                                                                                    <div class="card-block table-border-style">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table table-hover">
                                                                                                <thead>
                                                                                                    <tr>
                                                                                                        <th>#</th>
                                                                                                        <th>Numero de Aluno</th>
                                                                                                        <th>Nome do Aluno</th>
                                                                                                        <th>Curso</th>
                                                                                                        <th>Email</th>
                                                                                                        <th>Apagar</th>
                                                                                                    </tr>
                                                                                                </thead>
                                                                                                <tbody>
                                                                                                
                                                                                                    <?php
                                                                                                                        include "config.php";
                                                                                                                        $sql = "select * from utilizador where cargo='Aluno' ";  
                                                                                                                        $result=$conn->query($sql);
                                                                                                                        $i=0;
                                                                                                                            if($result->num_rows>0){
                                                                                                                                //output data of each row
                                                                                                                                foreach($result as $row){
                                                                                                                                // print_r($row);
                                                                                                                                $naluno=$row['Nutilizador'];
                                                                                                                                $NomeAluno=$row['Nomeutilizador'];
                                                                                                                                $Curso=$row['curso'];
                                                                                                                                $Email=$row['email'];
                                                                                                                                $i++;?>
                                                                                                                        <tr>
                                                                                                                            <th scope="row"><?php echo $i?></th>
                                                                                                                    
                                                                                                                            <td><?php echo $naluno; ?></td>
                                                                                                                            <td><?php echo $NomeAluno; ?></td>
                                                                                                                            <td><?php echo $Curso; ?></td>
                                                                                                                            <td><?php echo $Email; ?></td>
                                                                                                                            <td><a href="funcaoalunodel.php?id=<?php echo $naluno?>"><i class="ti-close"></i></a></td>
                                                                                                                        </tr>
                                                                                                                            <?php
                                                                                                                            }
                                                                                                                        }?>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Hover table card end --> 
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Row end -->
                                                                </div>
                                                            </div>
                                                            <!-- Tab variant tab card start -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Page body end -->
                                            </div>
                                        </div>
                                        <!-- Main-body end -->

                                        <div id="styleSelector">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php //include "social.php" ?>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="assets/js/classie/classie.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/js/demo-12.js"></script>
</body>

</html>
<?php
}else{
    header("Location: login.php");
    exit();
}?>