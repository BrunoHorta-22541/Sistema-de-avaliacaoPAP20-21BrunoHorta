
<?php
if(isset($_GET['pap'])){
    switch ($_GET['pap']){
        case 'login':
        include "login.php";
        break;
        case 'home':
        include "home.php";
        break;
        case 'aluno':
        include "aluno.php";
        break;
        case 'criterios':
        include "criterios.php";
        break;
        case 'curso':
        include "curso.php";
        break;
        case 'professor':
        include "professor.php";
        break;
        case 'avaliacoespreprojeto':
        include "avaliacoes.php";
        break;
        case 'projeto':
        include "projeto.php";
        break;
        case 'relatorioPreprojeto':
        include "relatoriosPreProjeto.php";
        break;
        case 'relatorioPAPLE':
        include "relatorioPAPLE.php";
        break;
        case 'relatorioSEFI':
        include "relatoriosefi.php";
        break;
        case 'relatorioAODP':
        include "relatorioAODP.php";
        break;
        case 'relatorioRF':
        include "relatorioRF.php";
        break;
        case 'relatorioPC':
        include "relatorioPC.php";
        break;
        case 'relatoriofe':
        include "relatoriofe.php";
        break;
        case 'relatoriosev':
        include "relatoriosev.php";
        break;
        case 'relatoriops':
        include "relatoriops.php";
        break;

        case 'avaliacaogeral':
        include "avaliacaogeralquot.php";
        break;
        case 'relatorioavaliacaogeral':
        include "avaliacaogeral.php";
        break;
        case 'relatoriogeraltoaluno':
        include "avaliacaogeralaluno.php";
        break;
        case 'autoavaliacaoaluno':
        include "autoavaliacaoaluno.php";
        break;
        case 'autoavaliacoes':
        include "autoavaliacoes.php";
        break;
    }
}else{
    include "login.php";
}
