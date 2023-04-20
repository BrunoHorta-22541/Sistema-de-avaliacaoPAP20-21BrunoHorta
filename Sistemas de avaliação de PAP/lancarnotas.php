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
  <?php include "config.php";
  mysqli_query($conn, "SET NAMES 'utf8'");?>
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

           <?php    include "menu.php";?>

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
                                                            <div class="sub-title">Lançar Notas- 
                                                            <?php
                                                                $sql = "select * from curso ";
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
                                                                                    $img=$row['imagem'];
                                                                            $sqljoins="select * from preprojeto JOIN criterios on preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno order by nome asc";
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
                                                                            <a href="lancarnotadet.php?id=<?php echo $naluno.$url?>">
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