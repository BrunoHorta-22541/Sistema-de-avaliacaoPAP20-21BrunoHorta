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
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
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

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
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
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                        <?php
                                                                                        
                                                                                        $sql = "select distinct(nomecurso), idcurso, cicloformacao from curso ";
                                                                                            $result=$conn->query($sql);
                                                                                            if($result->num_rows>0){
                                                                                                //output data of each row
                                                                                                foreach($result as $row){
                                                                                                // print_r($row);
                                                                                                $idcurso=$row['idcurso'];
                                                                                                $nome=$row['nomecurso'];
                                                                                                $ciclo=$row['cicloformacao'];
                                                                                                
                                                                                        ?>
                                                                                        <?php
                                                                                        $notafinalturma=0;
                                                                                        $numeroalunos=0;
                                                                                        $notamax=0;
                                                                                        $notamin=20;               
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
                                                                                                $projeto=$row1['Projeto'];
                                                                                                $numeroalunos++;
                                                                                                    ?>
                                                                                       
                                                                                            
                                                                                            <?php 
                                                                                                $sqIfasenota="SELECT DISTINCT(fases) as fases, notageral  FROM `avaliacaogeral` WHERE `idcurso`=$idcurso order by fases asc";
                                                                                                $resultfasenota=$conn->query($sqIfasenota);
                                                                                                $notafinalaluno=0;                     
                                                                                                if($resultfasenota->num_rows>0){
                                                                                                    //output data of each row
                                                                                                    foreach($resultfasenota as $rowfasenota){
                                                                                                    // print_r($row);
                                                                                                    $nomefase=$rowfasenota['fases'];
                                                                                                    $percentagem=$rowfasenota['notageral'];
                                                                                                $sqI2="select * from preprojeto JOIN criterios ON preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='$nomefase'";
                                                                                                $resultsqI2=$conn->query($sqI2);
                                                                                                $notafinal=0;                        
                                                                                                if($resultsqI2->num_rows>0){
                                                                                                    //output data of each row
                                                                                                    foreach($resultsqI2 as $row2){
                                                                                                    // print_r($row);
                                                                                                    $nomes=$row2['nome'];
                                                                                                    $notas=$row2['nota'];
                                                                                                    $notafinal=$notas+$notafinal;
                                                                                                    }}
                                                                                                    if($nomefase=="Trabalho_desenvolvido_Ano"){
                                                                                                        $sqltdalda = "select * from trabalhodesenvolvido where numeroaluno=$naluno";  
                                                                                                        $resulttdalda=$conn->query($sqltdalda);
                                                                                                        $notafinal=0;
                                                                                                            if($resulttdalda->num_rows>0){
                                                                                                                //output data of each row
                                                                                                                foreach($resulttdalda as $rowtdalda){
                                                                                                                // print_r($row);
                                                                                                                $notafinal=$rowtdalda['notatrabdesenvolvido'];
                                                                                                                }
                                                                                                            }     
                                                                                                    }
                                                                                                    $notafinalaluno=$notafinalaluno+(($notafinal*$percentagem)/100);
                                                                                                    if($notafinalaluno>$notamax){
                                                                                                    $notamax=$notafinalaluno;
                                                                                                    }
                                                                                                    
                                                                                                    if($notafinalaluno<$notamin){
                                                                                                        $notamin=$notafinalaluno;
                                                                                                    }
                                                                                                ?>
                                                                                                
                                                                                                    
                                                                                                    
                                                                                                <?php 
                                                                                            }
                                                                                            $notafinalturma=$notafinalturma+$notafinalaluno;   }?>
                                                                                            <?php }}?>
                                                                                      
                                                                                        
                                                                                  
                                                                                        
                                                                                       
                                                                                       
                                                                                        
                                                                                    
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Média da Turma</span>
                                                        <?php if($notafinalturma != 0){?>
                                                        <h4><?php echo (round($notafinalturma/$numeroalunos,2))?> Valores</h4>
                                                        <?php }else{?>
                                                            <h4>Sem Avaliações</h4>
                                                        <?php }?>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i><?php echo $nome;?><br>
                                                                <?php echo $ciclo;?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            
                                            <?php }}?>
                                            </div>
                                            <?php
                                            /*
                                            <!--notasmax e notamin-->                                                   
                                            
                                            <?php
                                                                                     
                                                                                        $sql = "select distinct(nomecurso), idcurso, cicloformacao from curso ";
                                                                                            $result=$conn->query($sql);
                                                                                            if($result->num_rows>0){
                                                                                                //output data of each row
                                                                                                foreach($result as $row){
                                                                                                // print_r($row);
                                                                                                $idcurso=$row['idcurso'];
                                                                                                $nome=$row['nomecurso'];
                                                                                                $ciclo=$row['cicloformacao'];
                                                                                                
                                                                                        ?>
                                                                                        <?php
                                                                                        
                                                                                        $notafinalturma=0;
                                                                                        $numeroalunos=0;
                                                                                        $notamax=0;
                                                                                        $notamin=20;               
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
                                                                                                $projeto=$row1['Projeto'];
                                                                                                $numeroalunos++;
                                                                                                    ?>
                                                                                       
                                                                                            
                                                                                            <?php 
                                                                                                $sqIfasenota="SELECT DISTINCT(fases) as fases, notageral  FROM `avaliacaogeral` WHERE `idcurso`=$idcurso order by fases asc";
                                                                                                $resultfasenota=$conn->query($sqIfasenota);
                                                                                                $notafinalaluno=0;                     
                                                                                                if($resultfasenota->num_rows>0){
                                                                                                    //output data of each row
                                                                                                    foreach($resultfasenota as $rowfasenota){
                                                                                                    // print_r($row);
                                                                                                    $nomefase=$rowfasenota['fases'];
                                                                                                    $percentagem=$rowfasenota['notageral'];
                                                                                                $sqI2="select * from preprojeto JOIN criterios ON preprojeto.idcriterio=criterios.idcriterio where preprojeto.Nutilizador=$naluno and criterios.fase='$nomefase'";
                                                                                                $resultsqI2=$conn->query($sqI2);
                                                                                                $notafinal=0;                        
                                                                                                if($resultsqI2->num_rows>0){
                                                                                                    //output data of each row
                                                                                                    foreach($resultsqI2 as $row2){
                                                                                                    // print_r($row);
                                                                                                    $nomes=$row2['nome'];
                                                                                                    $notas=$row2['nota'];
                                                                                                    $notafinal=$notas+$notafinal;
                                                                                                    }}
                                                                                                    if($nomefase=="Trabalho_desenvolvido_Ano"){
                                                                                                        $sqltdalda = "select * from trabalhodesenvolvido where numeroaluno=$naluno";  
                                                                                                        $resulttdalda=$conn->query($sqltdalda);
                                                                                                        $notafinal=0;
                                                                                                            if($resulttdalda->num_rows>0){
                                                                                                                //output data of each row
                                                                                                                foreach($resulttdalda as $rowtdalda){
                                                                                                                // print_r($row);
                                                                                                                $notafinal=$rowtdalda['notatrabdesenvolvido'];
                                                                                                                }
                                                                                                            }     
                                                                                                    }
                                                                                                    $notafinalaluno=$notafinalaluno+(($notafinal*$percentagem)/100);
                                                                                                    if($notafinalaluno>$notamax){
                                                                                                    $notamax=$notafinalaluno;
                                                                                                    }
                                                                                                    
                                                                                                    if($notafinalaluno<$notamin){
                                                                                                        $notamin=$notafinalaluno;
                                                                                                    }
                                                                                                ?>
                                                                                                
                                                                                                    
                                                                                                    
                                                                                                <?php 
                                                                                            }
                                                                                            $notafinalturma=$notafinalturma+$notafinalaluno;   }?>
                                                                                            <?php }}?>
                                                                                      
                                                                                        
                                                                                  
                                                                                        
                                                                                       
                                                                                       
                                                                                        
                                                                                    
                                            
                                            <!-- Notas max e min-->
                                            <div class="col-md-12 col-xl-4">
                                            <div class="card fb-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-facebook"></i>
                                                            <div class="d-inline-block">
                                                                <h5><?php echo $nome;?></h5>
                                                                <span> <?php echo $ciclo;?></span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2><?php echo $notamax; ?></h2>
                                                                    <p class="text-muted">Nota Maxima</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2><?php echo $notamin; ?></h2>
                                                                    <p class="text-muted">Nota Minima</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                            <!-- Notas max e min-->
                                            </div>
                                            
                                            <?php }}?>
                                            */
                                            ?>
                                            

                                        <!--Codigo que pode ser util para a parte das notamax e notamin
                                            <div class="col-md-12 col-xl-4">
                                                    <div class="card fb-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-facebook"></i>
                                                            <div class="d-inline-block">
                                                                <h5>facebook</h5>
                                                                <span>blog page timeline</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>23</h2>
                                                                    <p class="text-muted">Active</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>23</h2>
                                                                    <p class="text-muted">Comment</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card dribble-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-dribbble"></i>
                                                            <div class="d-inline-block">
                                                                <h5>dribble</h5>
                                                                <span>Product page analysis</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>23</h2>
                                                                    <p class="text-muted">Live</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>23</h2>
                                                                    <p class="text-muted">Message</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card twitter-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-twitter"></i>
                                                            <div class="d-inline-block">
                                                                <h5>twitter</h5>
                                                                <span>current new timeline</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>25</h2>
                                                                    <p class="text-muted">new tweet</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>450+</h2>
                                                                    <p class="text-muted">Follower</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           -->
                                            <!-- Email Sent End -->
                                            <!-- Data widget start -->
                                            <!-- comeco de comentario
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Time spent : project &amp; task</h5>
                                                        </div>
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
                                                    <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Project & Task</th>
                                                                        <th>Time Spents</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">U</h6>
                                                                                <p class="d-inline-block m-l-20">UI Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-pink d-inline-block text-center">R</h6>
                                                                                <p class="d-inline-block m-l-20">Redesign Android App</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-pink" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-yellow d-inline-block text-center">L</h6>
                                                                                <p class="d-inline-block m-l-20">Logo Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-yellow" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-green d-inline-block text-center">A</h6>
                                                                                <p class="d-inline-block m-l-20">Appestia landing Page</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-green" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">L</h6>
                                                                                <p class="d-inline-block m-l-20">Logo Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card add-task-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>To do list</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <button class="btn btn-card btn-primary">Add task </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Schedule Meeting with Compnes <span class="label bg-c-green m-l-10 f-10">2 week</span></h6></span>
                                                                    <div class="task-card-img m-l-40">
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Meeting With HOD's and borad</h6><p class="text-muted m-l-40">23 january 2003</p></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Create template, admin with responsive<span class="label bg-c-pink m-l-10">2 week</span></h6></span>
                                                                    <div class="task-card-img m-l-40">
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Suzen" alt="" class="img-40 m-l-10"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-4.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40 m-l-10"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Meeting With HOD's and borad</h6>
                                                                        <p class="text-muted m-l-40">23 january 2003</p></span>
                                                                        <div class="task-card-img m-l-40">
                                                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                            <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                                                <!-- Data widget End -->
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include "social.php" ?>
            </div>
        </div>

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
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/demo-12.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
</body>

</html>
<?php
}else{
    header("Location: login.php");
    exit();
}?>
