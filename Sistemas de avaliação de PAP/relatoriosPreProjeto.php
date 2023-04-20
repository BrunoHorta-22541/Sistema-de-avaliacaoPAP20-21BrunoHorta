<?php
session_start();
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
include("config.php");
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
                                                    <div id="printableArea">
                                                    <div class="card-block tab-icon">
                                                        <div class="col-lg-12 tab-with-img">
                                                            <div class="sub-title">Relatorio</div>
                                                                <!-- Page body start -->
                                                                <div class="card-block">
                                                                    <div class="row">
                                                                    
                                                                            <div class="table-responsive">
                                                                                <table class="table">
                                                                                    <thead>
                                                                                    <tr">
                                                                                        <td colspan="2"><img src="assets/images/auth/logo_epalvito.png" alt="logo.png"></td>
                                                                                    
                                                                                        <td colspan="10" style="font-size: 20px;" ><b>PAP (Pré Projeto)</b></td>
                                                                                    </tr>
                                                                                    <tr style="line-height: 0px">
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
                                                                                                $anoletivo=$row['anoletivo'];
                                                                                                $ciclo=$row['cicloformacao'];
                                                                                        ?>
                                                                                        <td colspan="1" ><b>Curso</b> </td>
                                                                                        <td colspan="9" style="background-color:#33ccff;" ><b><?php echo $nome; ?></b> </td>
                                                                                        
                                                                                    </tr>  
                                                                                    <tr style="line-height: 0px">
                                                                                        <td colspan="1" ><b>Ciclo de Formação</b> </td>
                                                                                        <td colspan="9" style="background-color:#33ccff;" ><b><?php echo $ciclo; ?></b></td>

                                                                                    </tr> 
                                                                                    <tr style="line-height: 0px">
                                                                                        <td colspan="1" ><b>Ano Létivo</b> </td>
                                                                                        <td colspan="9" style="background-color:#33ccff;" ><b><?php echo $anoletivo; ?></b> </td>

                                                                                    </tr> 
                                                                                    <?php }}?>
                                                                                    </thead>
                                                                                    
                                                                                    
                                                                                    <tbody>
                                                                                    

                                                                                    
                                                                                        <tr>
                                                                                        <td >Nome do Aluno</td>

                                                                                        <?php 
                                                                                        $sqI="SELECT DISTINCT(nome) as nome  FROM `criterios` WHERE `fase`='PreProjeto' order by nome asc";
                                                                                        $resultsqI=$conn->query($sqI);
                                                                                        $c=0;
                                                                                        $colors = Array('#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6', 
                                                                                        '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
                                                                                        '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A', 
                                                                                        '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                                                                                        '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC', 
                                                                                        '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                                                                                        '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680', 
                                                                                        '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                                                                                        '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3', 
                                                                                        '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF');
                                                                                        $criteriogeral="";                        
                                                                                        if($resultsqI->num_rows>0){
                                                                                            //output data of each row
                                                                                            foreach($resultsqI as $row){
                                                                                            // print_r($row);
                                                                                            $nome=$row['nome'];
                                                                                            $r=random_int(1,49);

                                                                                            $cor=$colors[$r];
                                                                                            $c++;
                                                                                            $criteriogeral=$criteriogeral."<br>"."C ".$c." -> ".htmlspecialchars($nome);    
                                                                                        ?>
                                                                                            
                                                                                            <td style="background:<?php echo $cor; ?>; text-align: center"><?php echo "C ".$c; ?></td>
                                                                                        
                                                                                        <?php }}?>
                                                                                        <td style="background-color:#33ccff;text-align: center">Nota Final</td>
                                                                                        </tr >
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
                                                                                                }}
                                                                                        ?>
                                                                                        <?php
                                                                                                        
                                                                                        $sql1 = "SELECT * FROM utilizador where Cargo='Aluno' and curso=$idcurso";  
                                                                                        $result1=$conn->query($sql1);
                                                                                        $i=0;
                                                                                            if($result1->num_rows>0){
                                                                                                //output data of each row
                                                                                                foreach($result1 as $row1){
                                                                                                // print_r($row);
                                                                                                $naluno=$row1['Nutilizador'];
                                                                                                $NomeAluno=$row1['Nomeutilizador'];
                                                                                                $Curso=$row1['curso'];
                                                                                                $Email=$row1['email'];
                                                                                                $i++;
                                                                                                $img=$row1['imagem'];
                                                                                                
                                                                                                    ?>
                                                                                        <tr style="line-height: 0px">
                                                                                            <td><?php echo $NomeAluno; ?></td>
                                                                                            <?php 
                                                                                                $sqI2="select * from preprojeto JOIN criterios ON preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='PreProjeto'";
                                                                                                $resultsqI2=$conn->query($sqI2);
                                                                                                $notafinal=0;                        
                                                                                                if($resultsqI2->num_rows>0){
                                                                                                    //output data of each row
                                                                                                    foreach($resultsqI2 as $row2){
                                                                                                    // print_r($row);
                                                                                                    $nome=$row2['nome'];
                                                                                                    $notas=$row2['nota'];
                                                                                                    $notafinal=$notas+$notafinal;
                                                                                                    
                                                
                                                                                                        
                                                                                                ?>
                                                                                                
                                                                                                    <td style="text-align: center"><?php echo $notas;?></td>
                                                                                                    
                                                                                                <?php 
                                                                                                
                                                                                            }}?>
                                                                                            <td style="text-align: center"><b><?php echo $notafinal;?></b></td>
                                                                                        </tr>
                                                                                    <?php }}?>
                                                                                    </tbody>
                                                                                </table>
                                                                                <div class="row" style="background:white;">
                                                                                    <div class="col-md-4">
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                    O Juri: _______________________
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                    </div>
                                                                                </div>
                                                                                <div style="background:white;font-size: 10px;">
                                                                                <?php echo $criteriogeral;?>
                                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- fechando div do print e script do print-->
                                                </div>
                                                <input type="button" onclick="printDiv('printableArea')" value="Imprimir" />
                                                                                <script>
                                                                                function printDiv(divName) {
                                                                                    var printContents = document.getElementById(divName).innerHTML;
                                                                                    var originalContents = document.body.innerHTML;

                                                                                    document.body.innerHTML = printContents;

                                                                                    window.print();

                                                                                    document.body.innerHTML = originalContents;
                                                                                }
                                                                                </script>
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