<?php
if(isset($_SESSION['Nutilizador']) && isset($_SESSION['Nutilizador'])){
?>

<nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="?pap=home">
                            <img class="img-fluid" src="assets/images/logo_epalvito.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            
                            <li class="user-profile header-notification">
                                <a href="#!">
                                <?php
                                include("config.php");
                                if (isset($_SESSION["Nutilizador"])) {
                                    $utilizador= $_SESSION["Nutilizador"];
                                    $query = "SELECT * FROM utilizador where Nutilizador=$utilizador";
                
                                    $result = $conn->query($query);
                
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    
                                    $foto = $row["imagem"];
                
                                    }}}
                
                                ?>
                                
                                    <img src="imagens/<?php echo $foto;?>" class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo $_SESSION['Nomeutilizador']?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>    
                                        <a href="logout.php">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                <?php
                                include("config.php");
                                if (isset($_SESSION["Nutilizador"])) {
                                    $utilizador= $_SESSION["Nutilizador"];
                                    $query = "SELECT * FROM utilizador where Nutilizador=$utilizador";
                
                                    $result = $conn->query($query);
                
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                    
                                    $foto = $row["imagem"];
                
                                    }}}
                
                                ?>
                                
                                    <img class="img-40 img-radius" src="imagens/<?php echo $foto;?>" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span><?php echo $_SESSION['Nomeutilizador'];?></span>
                                        <span id="more-details"><?php echo $_SESSION["Cargo"];?><i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="?pap=home">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Pagina Inicial</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <?php $_SESSION['Cargo'];
                            if($_SESSION['Cargo']=='Professor'||$_SESSION['Cargo']=='Admin'){ ?>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Configurações Gerais</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="?pap=aluno">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Alunos</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <?php if($_SESSION['Cargo']=='Admin'){ ?>
                                <li>
                                    <a href="?pap=professor">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Professores</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <?php }?>
                                <li>
                                    <a href="?pap=curso">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Cursos</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?pap=criterios">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Todos os Critérios</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?pap=avaliacaogeral">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Avaliação Geral</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <?php }
                            if($_SESSION['Cargo']=='Professor'||$_SESSION['Cargo']=='Admin'){ ?>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Avaliações</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="?pap=avaliacoespreprojeto">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Atribuir Avaliações</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                                
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Relatório</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="?pap=relatorioPreprojeto">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Pré Projeto</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?pap=relatorioPAPLE">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Lingua Estrangeira Inglês</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
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
                                <li>
                                    <a href="?pap=relatorioSEFI">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Suporte Escrito Formático Informático</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <?php }
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
                                        }}
                                     if($sigla=="TCP"){
                                ?>
                                <li>
                                    <a href="?pap=relatoriops">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Prova Surpresa</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                               <?php     
                                }else if($sigla=="TC"){
                                ?>
                                <li>
                                    <a href="?pap=relatoriosev">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Sumário Executivo e Video</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <?php    
                                }
                                
                                ?>
                                <li>
                                    <a href="?pap=relatorioAODP">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Apresentação Oral e Defesa do Projeto</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?pap=relatorioRF">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Relatório Final</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
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
                                <li>
                                    <a href="?pap=relatorioPC">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Prova Criativa</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <?php }else if($sigla=="TC"){ 
                                    ?>
                                <li>
                                    <a href="?pap=relatoriofe">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Feira Empreendedorismo</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <?php }?>
                                <li>
                                    <a href="?pap=relatorioavaliacaogeral">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Relatorio-Avaliação Geral</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?pap=autoavaliacoes">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Auto Avaliações</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <?php }?>

                            <?php
                            include("config.php");
                            if($_SESSION['Cargo']=='Aluno'){?>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Area do Aluno</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="?pap=autoavaliacaoaluno">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Auto Avaliação</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?pap=relatoriogeraltoaluno">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Relatorio-Avaliação Geral</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <?php }?> 
                            <?php /*if($_SESSION['Cargo']=='Admin'){ ?>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Base de Dados</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="?pap=tabdelavaliacoes">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Apagar Dados da Tabela das Avaliações</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <?php }*/?>
                    </nav>
<?php
}else{
    header("Location: login.php");
    exit();
}?>