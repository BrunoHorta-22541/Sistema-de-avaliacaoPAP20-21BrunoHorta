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
                                                        
                                                    <div class="col-lg-12 ">
                                                                <!-- <h6 class="sub-title">Tab With Icon</h6> -->
                                                                <div class="sub-title">Criterios</div>
                                                                <!-- Nav tabs -->
                                                                <ul class="nav nav-tabs md-tabs " role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab" href="#home7" role="tab"><i class="icofont icofont-home"></i>Inserir</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#profile7" role="tab"><i class="icofont icofont-ui-user "></i>Criterios</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#messages7" role="tab"><i class="icofont icofont-ui-message"></i>Editar</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab" href="#settings7" role="tab"><i class="icofont icofont-ui-settings"></i>Apagar</a>
                                                                        <div class="slide"></div>
                                                                    </li>
                                                                </ul>
                                                                <!-- Tab panes -->
                                                                <div class="tab-content card-block">
                                                                    <div class="tab-pane active" id="home7" role="tabpanel">
                                                                        <p class="m-0">
                                                                        <?php if(!isset($_GET['id'])){?>  
                                                                        <form class="form-horizontal "action="funcaocriterio.php" method="post" enctype="multipart/form-data">
                                                                            <hr>
                                                                        <fieldset>
                                                                               
                                                                                <!-- Form Name -->
                                                                                <legend>Inserir Critério</legend>

                                                                                <!-- Text input-->
                                                                                <div class="form-group">
                                                                                <label class="col-md-4 control-label" for="textinput">Nome do Critério</label>  
                                                                                <div class="col-md-4">
                                                                                <input id="Nome" name="Nome" type="text" placeholder="" class="form-control input-md">
                                                                                </div>
                                                                                </div>

                                                                                <!-- Select Basic -->
                                                                                <div class="form-group">
                                                                                <label class="col-md-4 control-label" for="selectbasic">Nota</label>
                                                                                <div class="col-md-4">
                                                                                    <select id="Nota" name="Nota" class="form-control">
                                                                                    <option value="0">0</option>
                                                                                    <option value="0.5">0,5</option>
                                                                                    <option value="1">1</option>
                                                                                    <option value="1.3">1,3</option>
                                                                                    <option value="1.5">1,5</option>
                                                                                    <option value="2">2</option>
                                                                                    <option value="2.3">2,3</option>
                                                                                    <option value="2.5">2,5</option>
                                                                                    <option value="3">3</option>
                                                                                    <option value="3.5">3,5</option>
                                                                                    <option value="4">4</option>
                                                                                    <option value="4.5">4,5</option>
                                                                                    <option value="5">5</option>
                                                                                    <option value="5.5">5,5</option>
                                                                                    <option value="6">6</option>
                                                                                    <option value="6.5">6,5</option>
                                                                                    <option value="7">7</option>
                                                                                    <option value="7.5">7,5</option>
                                                                                    <option value="8">8</option>
                                                                                    <option value="8.5">8,5</option>
                                                                                    <option value="9">9</option>
                                                                                    <option value="9.5">9,5</option>
                                                                                    <option value="10">10</option>
                                                                                    </select>
                                                                                </div>
                                                                                </div>

                                                                                <!-- Textarea -->
                                                                                <div class="form-group">
                                                                                    <label class="col-md-4 control-label" for="textarea">Observações</label>
                                                                                    <div class="col-md-4">                     
                                                                                        <textarea class="form-control" id="Obs" name="Obs"></textarea>
                                                                                    </div>
                                                                                </div>

                                                                                <!-- Select Basic -->
                                                                                <div class="form-group">
                                                                                    <label class="col-md-4 control-label" for="selectbasic">Fase</label>
                                                                                <div class="col-md-4">
                                                                                    <select id="fase" name="fase" class="form-control">
                                                                                    <option value="PreProjeto" >Pré Projeto</option>
                                                                                    <option value="PAPLinguaEstrangeira">PAP-Língua Estrangeira</option>
                                                                                    <option value="SupEscFormInt">SuporteEscritoFormatInformático</option>
                                                                                    <option value="RelatorioFinal">Relatório Final</option>
                                                                                    <option value="Apr_Oral_Defesa_Projeto">Apresentação Oral E Defesa do Projeto</option>
                                                                                    <option value="Prova_Supresa_cozinha">Prova Surpresa-Cozinha</option>
                                                                                    <option value="Prova_Criativa_cozinha">Prova Criativa-Cozinha</option>
                                                                                    <option value="Sumario_Executivo_Video">Sumário Executivo e Video</option>
                                                                                    <option value="Feira_Empreendedorismo">Feira Empreendedorismo</option>
                                                                                    </select>
                                                                                </div>
                                                                                </div>

                                                                                
                                                                                <!-- Button -->
                                                                                <div class="form-group">
                                                                                    <label class="col-md-4" for="singlebutton"></label>
                                                                                    <div class="col-md-4">
                                                                                        <input type="submit" value="Adicionar Critério" class="btn btn-primary" >
                                                                                    </div>
                                                                                </div>
                                                                                    

                                                                        </fieldset>
                                                                        </form>
                                                                        <?php }else{
                                                                             include "config.php";
                                                                             $id = $_GET['id'];
                                                                             $sql = "select * from criterios where idcriterio=$id";  
                                                                             $result=$conn->query($sql);
                                                                             if($result->num_rows>0){
                                                                                  //output data of each row
                                                                                  foreach($result as $row){
                                                                                    // print_r($row); 
                                                                                    $nome=$row['nome'];
                                                                                    $nota=$row['nota'];
                                                                                    $observacao=$row['observacao'];}}?>
                                                                    
                                                                    <form class="form-horizontal" action="funcaocriterioedit.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
                                                                    <fieldset>
                                                                    <legend>Atualizar Critério</legend>

                                                                    <!-- Text input-->
                                                                    <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="textinput">Nome do Critério</label>  
                                                                    <div class="col-md-4">
                                                                    <input id="Nome" name="Nome" value="<?php echo $nome?>" type="text" placeholder="" class="form-control input-md">
                                                                    </div>
                                                                    </div>

                                                                    <!-- Select Basic -->
                                                                    <div class="form-group">
                                                                    <label class="col-md-4 control-label" for="selectbasic">Nota</label>
                                                                    <div class="col-md-4">
                                                                        <select id="Nota" name="Nota" class="form-control">
                                                                        <option value="<?php echo $nota?>"><?php echo $nota?></option>
                                                                        <option value="0">0</option>
                                                                        <option value="0,5">0,5</option>
                                                                        <option value="1">1</option>
                                                                        <option value="1,5">1,5</option>
                                                                        <option value="2">2</option>
                                                                        <option value="2,5">2,5</option>
                                                                        <option value="3">3</option>
                                                                        <option value="3,5">3,5</option>
                                                                        <option value="4">4</option>
                                                                        <option value="4,5">4,5</option>
                                                                        <option value="5">5</option>
                                                                        <option value="5,5">5,5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="6,5">6,5</option>
                                                                        <option value="7">7</option>
                                                                        <option value="7,5">7,5</option>
                                                                        <option value="8">8</option>
                                                                        <option value="8,5">8,5</option>
                                                                        <option value="9">9</option>
                                                                        <option value="9,5">9,5</option>
                                                                        <option value="10">10</option>
                                                                        </select>
                                                                    </div>
                                                                    </div>

                                                                    <!-- Textarea -->
                                                                    <div class="form-group">
                                                                        <label class="col-md-4 control-label" for="textarea">Observações</label>
                                                                        <div class="col-md-4">                     
                                                                            <textarea class="form-control"  id="Obs" name="Obs"><?php echo $observacao?></textarea>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Button -->
                                                                    <div class="form-group">
                                                                                <label class="col-md-4" for="singlebutton"></label>
                                                                                <div class="col-md-4">
                                                                                <input type="submit" value="Atualizar Critério" class="btn btn-primary" >
                                                                                </div>
                                                                                </div>
                                                                        
                                                                              
                                                                    </fieldset>
                                                                    </form>
                                                                    <?php }?>          
                                                                        <p>
                                                                    </div>
                                                                    <div class="tab-pane" id="profile7" role="tabpanel">
                                                                        <p class="m-0">
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
                                                                                    <th>Nome do Critério</th>
                                                                                    <th>Nota</th> 
                                                                                    <th>Observações</th>
                                                                                    <th>Fase</th>
                                                                                 </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                    
                                                                                        <?php
                                                                                                            include "config.php";
                                                                                                            $sql = "select * from criterios "; 
                                                                                                            $result=$conn->query($sql);
                                                                                                            $i=0;
                                                                                                                if($result->num_rows>0){
                                                                                                                    //output data of each row
                                                                                                                    foreach($result as $row){
                                                                                                                    // print_r($row); 
                                                                                                                    $id_criterio=$row['idcriterio'];
                                                                                                                    $nome=$row['nome'];
                                                                                                                    $nota=$row['nota'];
                                                                                                                    $observacao=$row['observacao'];
                                                                                                                    $Fase=$row['fase'];
                                                                                                                    $i++;?>
                                                                                                            <tr>
                                                                                                                <th scope="row"><?php echo $i?></th>
                                                                                                        
                                                                                                                <td><?php echo $nome; ?></td>
                                                                                                                <td><?php echo $nota; ?></td>
                                                                                                                <td><?php echo $observacao; ?></td>
                                                                                                                <td><?php echo $Fase; ?></td>
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
                                                                    <div class="tab-pane" id="messages7" role="tabpanel">
                                                                        <p class="m-0">
                                                                        <!-- Hover table card start -->
                                                                        <div class="card">
                                                                                    <div class="card-header">
                                                                                        <h5>Criterios</h5>
                                                                                    </div>
                                                                                    <div class="card-block table-border-style">
                                                                                        <div class="table-responsive">
                                                                                        <table class="table table-hover">
                                                                                    <thead>
                                                                                    <tr>
                                                                                    <th>#</th>
                                                                                    <th>Nome do Critério</th>
                                                                                    <th>Nota</th> 
                                                                                    <th>Observações</th>
                                                                                    <th>Fase</th>
                                                                                    <th>Editar</th>
                                                                                    <th>Apagar</th>
                                                                                    </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                        
                                                                                            <?php
                                                                                                                include "config.php";
                                                                                                                $sql = "select * from criterios "; 
                                                                                                                $result=$conn->query($sql);
                                                                                                                $i=0;
                                                                                                                    if($result->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($result as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $id_criterio=$row['idcriterio'];
                                                                                                                        $nome=$row['nome'];
                                                                                                                        $nota=$row['nota'];
                                                                                                                        $observacao=$row['observacao'];
                                                                                                                        $Fase=$row['fase'];
                                                                                                                        $i++;?>
                                                                                                                <tr>
                                                                                                                    <th scope="row"><?php echo $i?></th>
                                                                                                            
                                                                                                                    <td><?php echo $nome; ?></td>
                                                                                                                    <td><?php echo $nota; ?></td>
                                                                                                                    <td><?php echo $observacao; ?></td>
                                                                                                                    <td><?php echo $Fase; ?></td>
                                                                                                                    <td><a href="?pap=criterios&id=<?php echo $id_criterio?>"><i class="ti-pencil"></i></a></td>
                                                                                                                    <td><a href="funcaocriteriodel.php?id=<?php echo $id_criterio?>"><i class="ti-close"></i></a></td>
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
                                                                    <div class="tab-pane" id="settings7" role="tabpanel">
                                                                        <p class="m-0">
                                                                        <!-- Hover table card start -->
                                                                        <div class="card">
                                                                                    <div class="card-header">
                                                                                        <h5>Criterios</h5>
                                                                                    </div>
                                                                                    <div class="card-block table-border-style">
                                                                                        <div class="table-responsive">
                                                                                        <table class="table table-hover">
                                                                                    <thead>
                                                                                    <tr>
                                                                                    <th>#</th>  
                                                                                    <th>Nome do Critério</th>
                                                                                    <th>Nota</th> 
                                                                                    <th>Observações</th>
                                                                                    <th>Fase</th>
                                                                                    <th>Editar</th>
                                                                                    <th>Apagar</th>
                                                                                    </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                        
                                                                                            <?php
                                                                                                                include "config.php";
                                                                                                                $sql = "select * from criterios "; 
                                                                                                                $result=$conn->query($sql);
                                                                                                                $i=0;
                                                                                                                    if($result->num_rows>0){
                                                                                                                        //output data of each row
                                                                                                                        foreach($result as $row){
                                                                                                                        // print_r($row);
                                                                                                                        $id_criterio=$row['idcriterio'];
                                                                                                                        $nome=$row['nome'];
                                                                                                                        $nota=$row['nota'];
                                                                                                                        $observacao=$row['observacao'];
                                                                                                                        $Fase=$row['fase'];
                                                                                                                        $i++;?>
                                                                                                                <tr>
                                                                                                                    <th scope="row"><?php echo $i?></th>
                                                                                                            
                                                                                                                    <td><?php echo $nome; ?></td>
                                                                                                                    <td><?php echo $nota; ?></td>
                                                                                                                    <td><?php echo $observacao; ?></td>
                                                                                                                    <td><?php echo $Fase; ?></td>
                                                                                                                    <td><a href="?pap=criterios&id=<?php echo $id_criterio?>"><i class="ti-pencil"></i></a></td>
                                                                                                                    <td><a href="funcaocriteriodel.php?id=<?php echo $id_criterio?>"><i class="ti-close"></i></a></td>
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
                                                                
    </p>       
                                                             
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