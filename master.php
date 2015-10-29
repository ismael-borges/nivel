<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="shortcut icon" href="assets/img/icone.ico" >
<title>Nível Construções</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="assets/css/matrix-style.css" />
<link rel="stylesheet" href="assets/css/matrix-media.css" />
<link rel="stylesheet" href="assets/css/fullcalendar.css" /> 
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="_jquery/jquery-ui.css" />
<link rel="stylesheet" href="_jquery/jquery-ui.structure.css" />
<link rel="stylesheet" href="_jquery/jquery-ui.theme.css" />
    
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript"  src="assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="_jquery/jquery.maskedinput.js"></script>
<script type="text/javascript" src="_jquery/jquery.maskMoney.js"></script>
<script type="text/javascript" src="_jquery/jquery-ui.js"></script>
    
<!-- NOVOS -->
<link rel="stylesheet" type="text/css" href="js/dist/jquery.jqplot.min.css" />
<script type="text/javascript" src="js/dist/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="js/dist/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="js/dist/plugins/jqplot.donutRenderer.min.js"></script>
    

<!-- CONSULTAS -->
<link rel="stylesheet" type="text/css" href="js/dist/jquery.jqplot.min.css" />
<script language="javascript" type="text/javascript" src="js/dist/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="js/dist/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src="js/dist/plugins/jqplot.donutRenderer.min.js"></script>
    
    
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="">Nível Construções</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="index.php"><i class="icon icon-share-alt"></i> <span class="text">Sair do Sistema</span></a></li>
  </ul>
</div>


<!--sidebar-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-list"></i> Menu</a>
  <ul>

    <span style="color:#FFF;" >Bem Vindo - <?php echo $_SESSION['nomeUsuario'];  ?></span>
      
    <li class="active">
        <a href="dashboard.php">
            <i class="icon icon-home"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="submenu">
        <a href="#">
            <i class="icon icon-group"></i>
            <span>Clientes</span>
            <span class="label">
                <i class="icon-chevron-down"></i>
            </span>
        </a>
        <ul>
            <li><a href="consultaPessoa.php">Consultar</a></li>
            <li><a href="novoPessoa.php">Novo</a></li>
        </ul>
    </li>
      
    <li class="submenu">
        <a href="#">
            <i class="icon icon-home"></i>
            <span>Obras</span>
            <span class="label">
                <i class="icon-chevron-down"></i>
            </span>
        </a>
        <ul>
            <li><a href="consultaObras.php">Consultar</a></li>
            <li><a href="novoObras.php">Novo</a></li>
        </ul>
    </li> 
      
    <li class="submenu">
        <a href="#">
            <i class="icon icon-truck"></i>
            <span>Materiais</span>
            <span class="label">
                <i class="icon-chevron-down"></i>
            </span>
        </a>
        <ul>
            <li><a href="consultaMaterial.php">Consultar</a></li>
            <li><a href="novoMaterial.php">Novo</a></li>
        </ul>
    </li>
    
    <li class="submenu">
        <a href="#">
            <i class="icon icon-wrench"></i>
            <span>Fornecedor</span>
            <span class="label">
                <i class="icon-chevron-down"></i>
            </span>
        </a>
        <ul>
            <li><a href="consultaFornecedor.php">Consultar</a></li>
            <li><a href="novoFornecedor.php">Novo</a></li>
        </ul>
    </li>
    
    <li class="submenu">
        <a href="#">
            <i class="icon icon-fire"></i>
            <span>Funcionário</span>
            <span class="label">
                <i class="icon-chevron-down"></i>
            </span>
        </a>
        <ul>
            <li><a href="consultaFuncionario.php">Consultar</a></li>
            <li><a href="novoFuncionario.php">Novo</a></li>
        </ul>
    </li>
      
    <li class="submenu">
        <a href="#">
            <i class="icon icon-barcode"></i>
            <span>Gestão de EPI's</span>
            <span class="label">
                <i class="icon-chevron-down"></i>
            </span>
        </a>
        <ul>
            <li><a href="gestaoEPIs.php">Gerenciar EPI's</a></li>
            <li><a href="consultaEPIS.php">Consultar</a></li>
            <li><a href="novoEPIS.php">Novo</a></li>
        </ul>
    </li>
      
    <li class="submenu">
        <a href="#">
            <i class="icon icon-book"></i>
            <span>Agenda</span>
            <span class="label">
                <i class="icon-chevron-down"></i>
            </span>
        </a>
        <ul>
            <li><a href="consultaAgenda.php">Consultar</a></li>
            <li><a href="novoAgenda.php">Novo</a></li>
        </ul>
    </li>
      
    <li class="submenu">
        <a href="#">
            <i class="icon icon-user"></i>
            <span>Controle de Acesso</span>
            <span class="label">
                <i class="icon-chevron-down"></i>
            </span>
        </a>
        <ul>
            <li><a href="consultaAcesso.php">Consultar</a></li>
            <li><a href="novoAcesso.php">Novo</a></li>
        </ul>
    </li>
      
    <li class="submenu " >
        <a href="#">
          <i class="icon icon-list-alt"></i>
          <span>Relatórios</span>
          <span class="label">
              <i class="icon-chevron-down"></i>
          </span>
        </a>
        <ul>
            <li><a href="#">Pessoas</a></li>
            <li><a href="#">Obras</a></li>
            <li><a href="relatorio/material.php">Materiais</a></li>
            <li><a href="#">Agenda</a></li>                        
        </ul>
    </li>
  </ul>
</div>


  <?php
		echo $pagemaincontent;
    ?>


<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2015 &copy; NÍVEL CONSTRUÇÕES - Todos os Direitos Reservados</div>
</div>
<!--end-Footer-part-->


<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/matrix.js"></script>

</body>
</html>