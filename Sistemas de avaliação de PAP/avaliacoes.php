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
                                                       <!-- <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>-->
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
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Tab variant tab card start -->
                                                <div class="card">
                                                    <div class="card-header">    
                                                    <h5>Prova de aptidão Profissional</h5>
                                                        <div class="card-header-right"> 
                                                            <ul class="list-unstyled card-option">   
                                                                <li><i class="icofont icofont-simple-left "></i></li>    
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block tab-icon">
                                                        <div class="col-lg-12 tab-with-img">
                                                            <div class="sub-title">Avaliações</div>
                                                                <!-- Page body start -->
                                                                <div class="card-block">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <!--Corpo Comeco-->
                                                                            <!-- Nav tabs comeco -->
                                                                                <ul class="nav nav-tabs md-tabs " role="tablist">
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link active" data-toggle="tab" href="#pp" role="tab"><b>Pré Projeto</b></a>
                                                                                        <div class="slide"></div>
                                                                                    </li>
                                                                                    <?php 
                                                                                        include("config.php");
                                                                                        $prof=$_SESSION['Nutilizador'];
                                                                                        $sql = "select * from curso where professor=$prof";
                                                                                            $result=$conn->query($sql);
                                                                                            if($result->num_rows>0){
                                                                                                //output data of each row
                                                                                                foreach($result as $row){
                                                                                                // print_r($row);
                                                                                                $idcurso=$row['idcurso'];
                                                                                                $nome=$row['nomecurso'];
                                                                                                $sigla=$row['sigla'];
                                                                                            }} if($sigla=="TC"|| $sigla=="TIG"){
                                                                                        
                                                                                        ?>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#sefi" role="tab"><b>Suporte Escrito Formato Informático</b></a>
                                                                                        <div class="slide"></div>
                                                                                    </li>
                                                                                    <?php }
                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                    $result=$conn->query($sql);
                                                                                    if($result->num_rows>0){
                                                                                        //output data of each row
                                                                                        foreach($result as $row){
                                                                                        // print_r($row);
                                                                                        $idcurso=$row['idcurso'];
                                                                                        $nome=$row['nomecurso'];
                                                                                        $sigla=$row['sigla'];
                                                                                        }}if($sigla=="TCP"){?>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#ps" role="tab"><b>Prova Surpresa</b></a>
                                                                                        <div class="slide"></div>
                                                                                    </li> 
                                                                                    <?php }else if($sigla=="TC"){?>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#sev" role="tab"><b>Sumário Executivo e Video</b></a>
                                                                                        <div class="slide"></div>
                                                                                    </li>
                                                                                    <?php }?>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#aodp" role="tab"><b>Apresentação Oral E Defesa do Projeto</b></a>
                                                                                        <div class="slide"></div>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#rf" role="tab"><b>Relatório Final</b></a>
                                                                                        <div class="slide"></div>
                                                                                    </li>
                                                                                    <?php
                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                    $sql = "select * from utilizador inner join curso on curso.idcurso=utilizador.curso where professor=$prof";
                                                                                        $result=$conn->query($sql);
                                                                                        if($result->num_rows>0){
                                                                                            //output data of each row
                                                                                            foreach($result as $row){
                                                                                            // print_r($row);
                                                                                            $idcurso=$row['idcurso'];
                                                                                            $nome=$row['nomecurso'];
                                                                                            $sigla=$row['sigla'];
                                                                                            }}
                                                                                        if($sigla=="TCP"){
                                                                                    ?>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#pc" role="tab"><b>Prova Criativa</b></a>
                                                                                        <div class="slide"></div>
                                                                                    </li><?php }else if($sigla=="TC"){?>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#fe" role="tab"><b>Feira Empreendedorismo</b></a>
                                                                                        <div class="slide"></div>
                                                                                    </li>
                                                                                    <?php }?>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#paple" role="tab"><b>PAP Linguagem Estrangeira</b></a>
                                                                                        <div class="slide"></div>
                                                                                    </li>
                                                                                    <li class="nav-item">
                                                                                        <a class="nav-link" data-toggle="tab" href="#tdalda" role="tab"><b>Trabalho Desenvolvido ao longo do Ano</b></a>
                                                                                        <div class="slide"></div>
                                                                                    </li>
                                                                                </ul>
                                                                                <!-- Nav tabs fim -->
                                                                                <!-- Tab panes comeco -->
                                                                                <div class="tab-content card-block">
                                                                                    <!--Pre Projeto comeco-->
                                                                                    <div class="tab-pane active" id="pp" role="tabpanel">
                                                                                        <p class="m-0">
                                                                                        <!--card Pre Projeto-->
                                                                                        <div class="card-block tab-icon">
                                                                                            <div class="col-lg-12 tab-with-img">
                                                                                                <div class="sub-title">Lançar Notas- 
                                                                                                <?php
                                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                                    $result=$conn->query($sql);
                                                                                                    if($result->num_rows>0){
                                                                                                        //output data of each row
                                                                                                        foreach($result as $row){
                                                                                                        // print_r($row);
                                                                                                        $idcurso=$row['idcurso'];
                                                                                                        $nome=$row['nomecurso'];
                                                                                                        echo $nome;}}
                                                                                                ?>
                                                                                                </div>
                                                                                                    <!-- Page body start -->
                                                                                                    <div class="card-block">
                                                                                                        <div class="row">
                                                                                                            <?php
                                                                                                        
                                                                                                                $sql = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
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
                                                                                                                        $img=$row['imagem'];
                                                                                                                $sqljoins="select * from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='PreProjeto' order by nome asc";
                                                                                                                $resultjoins=$conn->query($sqljoins);
                                                                                                                    $url="&url=";
                                                                                                                    $j=0;
                                                                                                                    if($resultjoins->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($resultjoins as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $criterio=$row['idcriterio'];
                                                                                                                        $Nomecriterio=$row['nome'];
                                                                                                                            $url=$url."P".$j."=".$criterio.",";
                                                                                                                            $j++;
                                                                                                                        }}
                                                                                                            ?>
                                                                                                            
                                                                                                                <div class="col-lg-4 col-xl-3 col-sm-12 text-center">
                                                                                                                <a href="lancarnotapreprojeto.php?id=<?php echo $naluno.$url?>">
                                                                                                                    <div class="badge-box">
                                                                                                                        <div class="sub-title"><?php echo $NomeAluno; ?>
                                                                                                                        </div>
                                                                                                                        <p><img src="imagens/<?php echo $img;?>" style="max-height:100px"  alt="..." class="img-thumbnail"><br>
                                                                                                                        <code><?php echo $naluno;?></code></p>
                                                                                                                        <?php
                                                                                                        
                                                                                                                            $sql = "select SUM(criterios.nota) as notafinal from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='PreProjeto'";  
                                                                                                                            $result=$conn->query($sql);
                                                                                                                            $i=0;
                                                                                                                                if($result->num_rows>0){
                                                                                                                                    //output data of each row
                                                                                                                                    foreach($result as $row){
                                                                                                                                    // print_r($row);
                                                                                                                                    $notafinal=$row['notafinal'];
                                                                                                                                    }
                                                                                                                                }     
                                                                                                                        ?>

                                                                                                                        <code>Nota Final:<?php echo $notafinal;?></code></p>
                                                                                                                    </div>
                                                                                                                        </a>    
                                                                                                                </div>
                                                                                                            
                                                                                                            <?php }} ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--card Pre Projeto-->
                                                                                        </p>
                                                                                    </div>
                                                                                    <!--Pre Projeto fim-->
                                                                                    
                                                                                    <!--Suporte Escrito Formato Informático comeco-->
                                                                                    <div class="tab-pane" id="sefi" role="tabpanel">
                                                                                        <p class="m-0">
                                                                                        <!--card Suporte Escrito Formato Informático-->
                                                                                        <div class="card-block tab-icon">
                                                                                            <div class="col-lg-12 tab-with-img">
                                                                                                <div class="sub-title">Lançar Notas- 
                                                                                                <?php
                                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                                    $result=$conn->query($sql);
                                                                                                    if($result->num_rows>0){
                                                                                                        //output data of each row
                                                                                                        foreach($result as $row){
                                                                                                        // print_r($row);
                                                                                                        $idcurso=$row['idcurso'];
                                                                                                        $nome=$row['nomecurso'];
                                                                                                        echo $nome;}}
                                                                                                ?>
                                                                                                </div>
                                                                                                    <!-- Page body start -->
                                                                                                    <div class="card-block">
                                                                                                        <div class="row">
                                                                                                            <?php
                                                                                                        
                                                                                                                $sql = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
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
                                                                                                                        $img=$row['imagem'];
                                                                                                                $sqljoins="select * from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='SupEscFormInt' order by nome asc";
                                                                                                                $resultjoins=$conn->query($sqljoins);
                                                                                                                    $url="&url=";
                                                                                                                    $j=0;
                                                                                                                    if($resultjoins->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($resultjoins as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $criterio=$row['idcriterio'];
                                                                                                                        $Nomecriterio=$row['nome'];
                                                                                                                            $url=$url."S".$j."=".$criterio.",";
                                                                                                                            $j++;
                                                                                                                        }}
                                                                                                            ?>
                                                                                                            
                                                                                                                <div class="col-lg-4 col-xl-3 col-sm-12 text-center">
                                                                                                                <a href="lancarnotassefi.php?id=<?php echo $naluno.$url?>">
                                                                                                                    <div class="badge-box">
                                                                                                                        <div class="sub-title"><?php echo $NomeAluno; ?>
                                                                                                                        </div>
                                                                                                                        <p><img src="imagens/<?php echo $img;?>" style="max-height:100px"  alt="..." class="img-thumbnail"><br>
                                                                                                                        <code><?php echo $naluno;?></code></p>
                                                                                                                        <?php
                                                                                                        
                                                                                                                            $sql = "select SUM(criterios.nota) as notafinal from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='SupEscFormInt'";  
                                                                                                                            $result=$conn->query($sql);
                                                                                                                            $i=0;
                                                                                                                                if($result->num_rows>0){
                                                                                                                                    //output data of each row
                                                                                                                                    foreach($result as $row){
                                                                                                                                    // print_r($row);
                                                                                                                                    $notafinal=$row['notafinal'];
                                                                                                                                    }
                                                                                                                                }     
                                                                                                                        ?>

                                                                                                                        <code>Nota Final:<?php echo $notafinal;?></code></p>
                                                                                                                    </div>
                                                                                                                        </a>    
                                                                                                                </div>
                                                                                                            
                                                                                                            <?php }} ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--card Suporte Escrito Formato Informático-->
                                                                                        </p>
                                                                                    </div>
                                                                                    <!--Suporte Escrito Formato Informático fim-->
                                                                                      
                                                                                    <!--Prova Surpresa comeco-->
                                                                                    <div class="tab-pane" id="ps" role="tabpanel">
                                                                                        <p class="m-0">
                                                                                        <!--card Prova Surpresa-->
                                                                                        <div class="card-block tab-icon">
                                                                                            <div class="col-lg-12 tab-with-img">
                                                                                                <div class="sub-title">Lançar Notas- 
                                                                                                <?php
                                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                                    $result=$conn->query($sql);
                                                                                                    if($result->num_rows>0){
                                                                                                        //output data of each row
                                                                                                        foreach($result as $row){
                                                                                                        // print_r($row);
                                                                                                        $idcurso=$row['idcurso'];
                                                                                                        $nome=$row['nomecurso'];
                                                                                                        echo $nome;}}
                                                                                                ?>
                                                                                                </div>
                                                                                                    <!-- Page body start -->
                                                                                                    <div class="card-block">
                                                                                                        <div class="row">
                                                                                                            <?php
                                                                                                        
                                                                                                                $sql = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
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
                                                                                                                        $img=$row['imagem'];
                                                                                                                $sqljoins="select * from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='Prova_Supresa_cozinha' order by nome asc";
                                                                                                                $resultjoins=$conn->query($sqljoins);
                                                                                                                    $url="&url=";
                                                                                                                    $j=0;
                                                                                                                    if($resultjoins->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($resultjoins as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $criterio=$row['idcriterio'];
                                                                                                                        $Nomecriterio=$row['nome'];
                                                                                                                            $url=$url."PS".$j."=".$criterio.",";
                                                                                                                            $j++;
                                                                                                                        }}
                                                                                                            ?>
                                                                                                            
                                                                                                                <div class="col-lg-4 col-xl-3 col-sm-12 text-center">
                                                                                                                <a href="lancarnotasps.php?id=<?php echo $naluno.$url?>">
                                                                                                                    <div class="badge-box">
                                                                                                                        <div class="sub-title"><?php echo $NomeAluno; ?>
                                                                                                                        </div>
                                                                                                                        <p><img src="imagens/<?php echo $img;?>" style="max-height:100px"  alt="..." class="img-thumbnail"><br>
                                                                                                                        <code><?php echo $naluno;?></code></p>
                                                                                                                        <?php
                                                                                                        
                                                                                                                            $sql = "select SUM(criterios.nota) as notafinal from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='Prova_Supresa_cozinha'";  
                                                                                                                            $result=$conn->query($sql);
                                                                                                                            $i=0;
                                                                                                                                if($result->num_rows>0){
                                                                                                                                    //output data of each row
                                                                                                                                    foreach($result as $row){
                                                                                                                                    // print_r($row);
                                                                                                                                    $notafinal=$row['notafinal'];
                                                                                                                                    }
                                                                                                                                }     
                                                                                                                        ?>

                                                                                                                        <code>Nota Final:<?php echo $notafinal;?></code></p>
                                                                                                                    </div>
                                                                                                                        </a>    
                                                                                                                </div>
                                                                                                            
                                                                                                            <?php }} ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--card Prova Surpresa-->
                                                                                        </p>
                                                                                    </div>
                                                                                    <!--Prova Surpresa fim-->
                                                                                    <!--Sumario Executivo e Video comeco-->
                                                                                    <div class="tab-pane" id="sev" role="tabpanel">
                                                                                        <p class="m-0">
                                                                                        <!--card Sumario Executivo e Video-->
                                                                                        <div class="card-block tab-icon">
                                                                                            <div class="col-lg-12 tab-with-img">
                                                                                                <div class="sub-title">Lançar Notas- 
                                                                                                <?php
                                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                                    $result=$conn->query($sql);
                                                                                                    if($result->num_rows>0){
                                                                                                        //output data of each row
                                                                                                        foreach($result as $row){
                                                                                                        // print_r($row);
                                                                                                        $idcurso=$row['idcurso'];
                                                                                                        $nome=$row['nomecurso'];
                                                                                                        echo $nome;}}
                                                                                                ?>
                                                                                                </div>
                                                                                                    <!-- Page body start -->
                                                                                                    <div class="card-block">
                                                                                                        <div class="row">
                                                                                                            <?php
                                                                                                        
                                                                                                                $sql = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
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
                                                                                                                        $img=$row['imagem'];
                                                                                                                $sqljoins="select * from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='Sumario_Executivo_Video' order by nome asc";
                                                                                                                $resultjoins=$conn->query($sqljoins);
                                                                                                                    $url="&url=";
                                                                                                                    $j=0;
                                                                                                                    if($resultjoins->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($resultjoins as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $criterio=$row['idcriterio'];
                                                                                                                        $Nomecriterio=$row['nome'];
                                                                                                                            $url=$url."SEV".$j."=".$criterio.",";
                                                                                                                            $j++;
                                                                                                                        }}
                                                                                                            ?>
                                                                                                            
                                                                                                                <div class="col-lg-4 col-xl-3 col-sm-12 text-center">
                                                                                                                <a href="lancarnotassev.php?id=<?php echo $naluno.$url?>">
                                                                                                                    <div class="badge-box">
                                                                                                                        <div class="sub-title"><?php echo $NomeAluno; ?>
                                                                                                                        </div>
                                                                                                                        <p><img src="imagens/<?php echo $img;?>" style="max-height:100px"  alt="..." class="img-thumbnail"><br>
                                                                                                                        <code><?php echo $naluno;?></code></p>
                                                                                                                        <?php
                                                                                                        
                                                                                                                            $sql = "select SUM(criterios.nota) as notafinal from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='Sumario_Executivo_Video'";  
                                                                                                                            $result=$conn->query($sql);
                                                                                                                            $i=0;
                                                                                                                                if($result->num_rows>0){
                                                                                                                                    //output data of each row
                                                                                                                                    foreach($result as $row){
                                                                                                                                    // print_r($row);
                                                                                                                                    $notafinal=$row['notafinal'];
                                                                                                                                    }
                                                                                                                                }     
                                                                                                                        ?>

                                                                                                                        <code>Nota Final:<?php echo $notafinal;?></code></p>
                                                                                                                    </div>
                                                                                                                        </a>    
                                                                                                                </div>
                                                                                                            
                                                                                                            <?php }} ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--card Sumario Executivo e Video-->
                                                                                        </p>
                                                                                    </div>
                                                                                    <!--Sumario Executivo e Video fim-->
                                                                                    <!--Apresentação Oral E Defesa do Projeto comeco-->
                                                                                    <div class="tab-pane" id="aodp" role="tabpanel">
                                                                                        <p class="m-0">
                                                                                        <!--card Apresentação Oral E Defesa do Projeto-->
                                                                                        <div class="card-block tab-icon">
                                                                                            <div class="col-lg-12 tab-with-img">
                                                                                                <div class="sub-title">Lançar Notas- 
                                                                                                <?php
                                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                                    $result=$conn->query($sql);
                                                                                                    if($result->num_rows>0){
                                                                                                        //output data of each row
                                                                                                        foreach($result as $row){
                                                                                                        // print_r($row);
                                                                                                        $idcurso=$row['idcurso'];
                                                                                                        $nome=$row['nomecurso'];
                                                                                                        echo $nome;}}
                                                                                                ?>
                                                                                                </div>
                                                                                                    <!-- Page body start -->
                                                                                                    <div class="card-block">
                                                                                                        <div class="row">
                                                                                                            <?php
                                                                                                        
                                                                                                                $sql = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
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
                                                                                                                        $img=$row['imagem'];
                                                                                                                $sqljoins="select * from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='Apr_Oral_Defesa_Projeto' order by nome asc";
                                                                                                                $resultjoins=$conn->query($sqljoins);
                                                                                                                    $url="&url=";
                                                                                                                    $j=0;
                                                                                                                    if($resultjoins->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($resultjoins as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $criterio=$row['idcriterio'];
                                                                                                                        $Nomecriterio=$row['nome'];
                                                                                                                            $url=$url."A".$j."=".$criterio.",";
                                                                                                                            $j++;
                                                                                                                        }}
                                                                                                            ?>
                                                                                                            
                                                                                                                <div class="col-lg-4 col-xl-3 col-sm-12 text-center">
                                                                                                                <a href="lancarnotasaodp.php?id=<?php echo $naluno.$url?>">
                                                                                                                    <div class="badge-box">
                                                                                                                        <div class="sub-title"><?php echo $NomeAluno; ?>
                                                                                                                        </div>
                                                                                                                        <p><img src="imagens/<?php echo $img;?>" style="max-height:100px"  alt="..." class="img-thumbnail"><br>
                                                                                                                        <code><?php echo $naluno;?></code></p>
                                                                                                                        <?php
                                                                                                        
                                                                                                                            $sql = "select SUM(criterios.nota) as notafinal from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='Apr_Oral_Defesa_Projeto'";  
                                                                                                                            $result=$conn->query($sql);
                                                                                                                            $i=0;
                                                                                                                                if($result->num_rows>0){
                                                                                                                                    //output data of each row
                                                                                                                                    foreach($result as $row){
                                                                                                                                    // print_r($row);
                                                                                                                                    $notafinal=$row['notafinal'];
                                                                                                                                    }
                                                                                                                                }     
                                                                                                                        ?>

                                                                                                                        <code>Nota Final:<?php echo $notafinal;?></code></p>
                                                                                                                    </div>
                                                                                                                        </a>    
                                                                                                                </div>
                                                                                                            
                                                                                                            <?php }} ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--card Apresentação Oral E Defesa do Projeto-->
                                                                                        </p>
                                                                                    </div>
                                                                                    <!--Apresentação Oral E Defesa do Projeto fim-->
                                                                                    <!--Relatorio Final comeco-->
                                                                                    <div class="tab-pane" id="rf" role="tabpanel">
                                                                                        <p class="m-0">
                                                                                        <!--card Relatorio Final-->
                                                                                        <div class="card-block tab-icon">
                                                                                            <div class="col-lg-12 tab-with-img">
                                                                                                <div class="sub-title">Lançar Notas- 
                                                                                                <?php
                                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                                    $result=$conn->query($sql);
                                                                                                    if($result->num_rows>0){
                                                                                                        //output data of each row
                                                                                                        foreach($result as $row){
                                                                                                        // print_r($row);
                                                                                                        $idcurso=$row['idcurso'];
                                                                                                        $nome=$row['nomecurso'];
                                                                                                        echo $nome;}}
                                                                                                ?>
                                                                                                </div>
                                                                                                    <!-- Page body start -->
                                                                                                    <div class="card-block">
                                                                                                        <div class="row">
                                                                                                            <?php
                                                                                                        
                                                                                                                $sql = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
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
                                                                                                                        $img=$row['imagem'];
                                                                                                                $sqljoins="select * from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='RelatorioFinal' order by nome asc";
                                                                                                                $resultjoins=$conn->query($sqljoins);
                                                                                                                    $url="&url=";
                                                                                                                    $j=0;
                                                                                                                    if($resultjoins->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($resultjoins as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $criterio=$row['idcriterio'];
                                                                                                                        $Nomecriterio=$row['nome'];
                                                                                                                            $url=$url."R".$j."=".$criterio.",";
                                                                                                                            $j++;
                                                                                                                        }}
                                                                                                            ?>
                                                                                                            
                                                                                                                <div class="col-lg-4 col-xl-3 col-sm-12 text-center">
                                                                                                                <a href="lancarnotasRelatorioFinal.php?id=<?php echo $naluno.$url?>">
                                                                                                                    <div class="badge-box">
                                                                                                                        <div class="sub-title"><?php echo $NomeAluno; ?>
                                                                                                                        </div>
                                                                                                                        <p><img src="imagens/<?php echo $img;?>" style="max-height:100px"  alt="..." class="img-thumbnail"><br>
                                                                                                                        <code><?php echo $naluno;?></code></p>
                                                                                                                        <?php
                                                                                                        
                                                                                                                            $sql = "select SUM(criterios.nota) as notafinal from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='RelatorioFinal'";  
                                                                                                                            $result=$conn->query($sql);
                                                                                                                            $i=0;
                                                                                                                                if($result->num_rows>0){
                                                                                                                                    //output data of each row
                                                                                                                                    foreach($result as $row){
                                                                                                                                    // print_r($row);
                                                                                                                                    $notafinal=$row['notafinal'];
                                                                                                                                    }
                                                                                                                                }     
                                                                                                                        ?>

                                                                                                                        <code>Nota Final:<?php echo $notafinal;?></code></p>
                                                                                                                    </div>
                                                                                                                        </a>    
                                                                                                                </div>
                                                                                                            
                                                                                                            <?php }} ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--card Relatorio Final-->
                                                                                        </p>
                                                                                    </div>
                                                                                    <!--Relatorio Final fim-->
                                                                                    <!--Prova criativa comeco-->
                                                                                    <div class="tab-pane" id="pc" role="tabpanel">
                                                                                        <p class="m-0">
                                                                                        <!--card Prova criativa-->
                                                                                        <div class="card-block tab-icon">
                                                                                            <div class="col-lg-12 tab-with-img">
                                                                                                <div class="sub-title">Lançar Notas- 
                                                                                                <?php
                                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                                    $result=$conn->query($sql);
                                                                                                    if($result->num_rows>0){
                                                                                                        //output data of each row
                                                                                                        foreach($result as $row){
                                                                                                        // print_r($row);
                                                                                                        $idcurso=$row['idcurso'];
                                                                                                        $nome=$row['nomecurso'];
                                                                                                        echo $nome;}}
                                                                                                ?>
                                                                                                </div>
                                                                                                    <!-- Page body start -->
                                                                                                    <div class="card-block">
                                                                                                        <div class="row">
                                                                                                            <?php
                                                                                                        
                                                                                                                $sql = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
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
                                                                                                                        $img=$row['imagem'];
                                                                                                                $sqljoins="select * from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='Prova_Criativa_cozinha' order by nome asc";
                                                                                                                $resultjoins=$conn->query($sqljoins);
                                                                                                                    $url="&url=";
                                                                                                                    $j=0;
                                                                                                                    if($resultjoins->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($resultjoins as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $criterio=$row['idcriterio'];
                                                                                                                        $Nomecriterio=$row['nome'];
                                                                                                                            $url=$url."PC".$j."=".$criterio.",";
                                                                                                                            $j++;
                                                                                                                        }}
                                                                                                            ?>
                                                                                                            
                                                                                                                <div class="col-lg-4 col-xl-3 col-sm-12 text-center">
                                                                                                                <a href="lancarnotaspc.php?id=<?php echo $naluno.$url?>">
                                                                                                                    <div class="badge-box">
                                                                                                                        <div class="sub-title"><?php echo $NomeAluno; ?>
                                                                                                                        </div>
                                                                                                                        <p><img src="imagens/<?php echo $img;?>" style="max-height:100px"  alt="..." class="img-thumbnail"><br>
                                                                                                                        <code><?php echo $naluno;?></code></p>
                                                                                                                        <?php
                                                                                                        
                                                                                                                            $sql = "select SUM(criterios.nota) as notafinal from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='Prova_Criativa_cozinha'";  
                                                                                                                            $result=$conn->query($sql);
                                                                                                                            $i=0;
                                                                                                                                if($result->num_rows>0){
                                                                                                                                    //output data of each row
                                                                                                                                    foreach($result as $row){
                                                                                                                                    // print_r($row);
                                                                                                                                    $notafinal=$row['notafinal'];
                                                                                                                                    }
                                                                                                                                }     
                                                                                                                        ?>

                                                                                                                        <code>Nota Final:<?php echo $notafinal;?></code></p>
                                                                                                                    </div>
                                                                                                                        </a>    
                                                                                                                </div>
                                                                                                            
                                                                                                            <?php }} ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--card Prova criativa-->
                                                                                        </p>
                                                                                    </div>
                                                                                    <!--Prova criativa fim-->
                                                                                    <!--Feira Empreendorismo comeco-->
                                                                                    <div class="tab-pane" id="fe" role="tabpanel">
                                                                                        <p class="m-0">
                                                                                        <!--card Feira Empreendorismo-->
                                                                                        <div class="card-block tab-icon">
                                                                                            <div class="col-lg-12 tab-with-img">
                                                                                                <div class="sub-title">Lançar Notas- 
                                                                                                <?php
                                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                                    $result=$conn->query($sql);
                                                                                                    if($result->num_rows>0){
                                                                                                        //output data of each row
                                                                                                        foreach($result as $row){
                                                                                                        // print_r($row);
                                                                                                        $idcurso=$row['idcurso'];
                                                                                                        $nome=$row['nomecurso'];
                                                                                                        echo $nome;}}
                                                                                                ?>
                                                                                                </div>
                                                                                                    <!-- Page body start -->
                                                                                                    <div class="card-block">
                                                                                                        <div class="row">
                                                                                                            <?php
                                                                                                        
                                                                                                                $sql = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
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
                                                                                                                        $img=$row['imagem'];
                                                                                                                $sqljoins="select * from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='Feira_Empreendedorismo' order by nome asc";
                                                                                                                $resultjoins=$conn->query($sqljoins);
                                                                                                                    $url="&url=";
                                                                                                                    $j=0;
                                                                                                                    if($resultjoins->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($resultjoins as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $criterio=$row['idcriterio'];
                                                                                                                        $Nomecriterio=$row['nome'];
                                                                                                                            $url=$url."FE".$j."=".$criterio.",";
                                                                                                                            $j++;
                                                                                                                        }}
                                                                                                            ?>
                                                                                                            
                                                                                                                <div class="col-lg-4 col-xl-3 col-sm-12 text-center">
                                                                                                                <a href="lancarnotasfe.php?id=<?php echo $naluno.$url?>">
                                                                                                                    <div class="badge-box">
                                                                                                                        <div class="sub-title"><?php echo $NomeAluno; ?>
                                                                                                                        </div>
                                                                                                                        <p><img src="imagens/<?php echo $img;?>" style="max-height:100px"  alt="..." class="img-thumbnail"><br>
                                                                                                                        <code><?php echo $naluno;?></code></p>
                                                                                                                        <?php
                                                                                                        
                                                                                                                            $sql = "select SUM(criterios.nota) as notafinal from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='Feira_Empreendedorismo'";  
                                                                                                                            $result=$conn->query($sql);
                                                                                                                            $i=0;
                                                                                                                                if($result->num_rows>0){
                                                                                                                                    //output data of each row
                                                                                                                                    foreach($result as $row){
                                                                                                                                    // print_r($row);
                                                                                                                                    $notafinal=$row['notafinal'];
                                                                                                                                    }
                                                                                                                                }     
                                                                                                                        ?>

                                                                                                                        <code>Nota Final:<?php echo $notafinal;?></code></p>
                                                                                                                    </div>
                                                                                                                        </a>    
                                                                                                                </div>
                                                                                                            
                                                                                                            <?php }} ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--card Feira Empreendorismo-->
                                                                                        </p>
                                                                                    </div>
                                                                                    <!--Feira Empreendorismo fim-->
                                                                                    <!--PAP Linguagem Estrangeira comeco-->
                                                                                    <div class="tab-pane" id="paple" role="tabpanel">
                                                                                        <p class="m-0">
                                                                                        <!--card PAP Linguagem Estrangeira-->
                                                                                        <div class="card-block tab-icon">
                                                                                            <div class="col-lg-12 tab-with-img">
                                                                                                <div class="sub-title">Lançar Notas- 
                                                                                                <?php
                                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                                    $result=$conn->query($sql);
                                                                                                    if($result->num_rows>0){
                                                                                                        //output data of each row
                                                                                                        foreach($result as $row){
                                                                                                        // print_r($row);
                                                                                                        $idcurso=$row['idcurso'];
                                                                                                        $nome=$row['nomecurso'];
                                                                                                        echo $nome;}}
                                                                                                ?>
                                                                                                </div>
                                                                                                    <!-- Page body start -->
                                                                                                    <div class="card-block">
                                                                                                        <div class="row">
                                                                                                            <?php
                                                                                                        
                                                                                                                $sql = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
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
                                                                                                                        $img=$row['imagem'];
                                                                                                                $sqljoins="select * from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='PAPLinguaEstrangeira' order by nome asc";
                                                                                                                $resultjoins=$conn->query($sqljoins);
                                                                                                                    $url="&url=";
                                                                                                                    $j=0;
                                                                                                                    if($resultjoins->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($resultjoins as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $criterio=$row['idcriterio'];
                                                                                                                        $Nomecriterio=$row['nome'];
                                                                                                                            $url=$url."PL".$j."=".$criterio.",";
                                                                                                                            $j++;
                                                                                                                        }}
                                                                                                            ?>
                                                                                                            
                                                                                                                <div class="col-lg-4 col-xl-3 col-sm-12 text-center">
                                                                                                                <a href="lancarnotaspaple.php?id=<?php echo $naluno.$url?>">
                                                                                                                    <div class="badge-box">
                                                                                                                        <div class="sub-title"><?php echo $NomeAluno; ?>
                                                                                                                        </div>
                                                                                                                        <p><img src="imagens/<?php echo $img;?>" style="max-height:100px"  alt="..." class="img-thumbnail"><br>
                                                                                                                        <code><?php echo $naluno;?></code></p>
                                                                                                                        <?php
                                                                                                        
                                                                                                                            $sql = "select SUM(criterios.nota) as notafinal from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='PAPLinguaEstrangeira'";  
                                                                                                                            $result=$conn->query($sql);
                                                                                                                            $i=0;
                                                                                                                                if($result->num_rows>0){
                                                                                                                                    //output data of each row
                                                                                                                                    foreach($result as $row){
                                                                                                                                    // print_r($row);
                                                                                                                                    $notafinal=$row['notafinal'];
                                                                                                                                    }
                                                                                                                                }     
                                                                                                                        ?>

                                                                                                                        <code>Nota Final:<?php echo $notafinal;?></code></p>
                                                                                                                    </div>
                                                                                                                        </a>    
                                                                                                                </div>
                                                                                                            
                                                                                                            <?php }} ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--card PAP Linguagem Estrangeira-->
                                                                                        </p>
                                                                                    </div>
                                                                                    <!--PAP Linguagem Estrangeira fim-->
                                                                                    <!--Trabalho Desenvolvido ao longo do Ano comeco-->
                                                                                    <div class="tab-pane" id="tdalda" role="tabpanel">
                                                                                        <p class="m-0">
                                                                                        <!--card Trabalho Desenvolvido ao longo do Ano-->
                                                                                        <div class="card-block tab-icon">
                                                                                            <div class="col-lg-12 tab-with-img">
                                                                                                <div class="sub-title">Lançar Notas- 
                                                                                                <?php
                                                                                                    $prof=$_SESSION['Nutilizador'];
                                                                                                    $sql = "select * from curso where professor=$prof";
                                                                                                    $result=$conn->query($sql);
                                                                                                    if($result->num_rows>0){
                                                                                                        //output data of each row
                                                                                                        foreach($result as $row){
                                                                                                        // print_r($row);
                                                                                                        $idcurso=$row['idcurso'];
                                                                                                        $nome=$row['nomecurso'];
                                                                                                        echo $nome;}}
                                                                                                ?>
                                                                                                </div>
                                                                                                    <!-- Page body start -->
                                                                                                    <div class="card-block">
                                                                                                        <div class="row">
                                                                                                            <?php
                                                                                                        
                                                                                                                $sql = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
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
                                                                                                                        $img=$row['imagem'];
                                                                                                                
                                                                                                            ?>
                                                                                                            
                                                                                                                <div class="col-lg-4 col-xl-3 col-sm-12 text-center">
                                                                                                                <a href="trabalhodesenvolvido.php?id=<?php echo $naluno.$url?>">
                                                                                                                    <div class="badge-box">
                                                                                                                        <div class="sub-title"><?php echo $NomeAluno; ?>
                                                                                                                        </div>
                                                                                                                        <p><img src="imagens/<?php echo $img;?>" style="max-height:100px"  alt="..." class="img-thumbnail"><br>
                                                                                                                        <code><?php echo $naluno;?></code></p>
                                                                                                                        <?php
                                                                                                        
                                                                                                                            $sql = "select * from trabalhodesenvolvido where numeroaluno=$naluno";  
                                                                                                                            $result=$conn->query($sql);
                                                                                                                            $i=0;
                                                                                                                            $notafinal=0;
                                                                                                                                if($result->num_rows>0){
                                                                                                                                    //output data of each row
                                                                                                                                    foreach($result as $row){
                                                                                                                                    // print_r($row);
                                                                                                                                    $notafinal=$row['notatrabdesenvolvido'];
                                                                                                                                    }
                                                                                                                                }     
                                                                                                                        ?>

                                                                                                                        <code>Nota Final:<?php echo $notafinal;?></code></p>
                                                                                                                    </div>
                                                                                                                        </a>    
                                                                                                                </div>
                                                                                                            
                                                                                                            <?php }} ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!--card Trabalho Desenvolvido ao longo do Ano-->
                                                                                        </p>
                                                                                    </div>
                                                                                    <!--Trabalho Desenvolvido ao longo do Ano fim-->
                                                                                </div>
                                                                            </div>
                                                                            <!-- Tab panes fim -->

                                                                            <!--Corpo Fim-->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
            <?php include "social.php" ?>


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