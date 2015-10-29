<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<div id="content">

<div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a></div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          
                                                
<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="http://localhost/mapos/js/dist/excanvas.min.js"></script><![endif]-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">

       <!-- PRIMEIRA PARTE DE ACESSO RÁPIDO AS PÁGINAS CORRESPONDENTES -->

        <li class="bg_lb"> <a href="consultaPessoa.php"> <i class="icon-group"></i> Clientes</a> </li>
		<li class="bg_lg"> <a href="consultaObras.php"> <i class="icon icon-home"></i> Obras</a> </li>
		<li class="bg_ly"> <a href="consultaMaterial.php"> <i class="icon icon-truck"></i> Materiais</a></li>
          <li class="bg_lv"> <a href="consultaFornecedor.php"> <i class="icon icon-wrench"></i> Fornecedores</a></li>
		<li class="bg_lo"> <a href="gestaoEPIs.php"> <i class="icon-tags"></i> Gestão de EPI's</a> </li>
		<li class="bg_ls"> <a href="consultaAgenda.php"><i class="icon-book"></i> Agenda</a></li>
    
          <!-- FIM DE ACESSO -->
		
      </ul>
    </div>
  </div>  
<!--End-Action boxes-->  



<div class="row-fluid" style="margin-top: 0">

    <!-- AGENDA -->

    <div class="span12" style="margin-left: 0">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-calendar"></i></span>
              <h5>Agenda - Compromisso do Dia</h5></div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Data</th>
                            <th>Dia</th>
                            <th>Hora</th>
                            <th>Descrição do Compromisso</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
							<td>001</td>
							<td>14/08/2015</td>
							<td>14</td>
							<td>09:00</td>
							<td>Encontro com o Senai</td>
						</tr>
						<tr>
							<td>002</td>
							<td>14/08/2015</td>
							<td>14</td>
							<td>13:00</td>
							<td>Pintar o predio rosalindo</td>
						</tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
<!-- PRIMEIRO BOX DA OBRA  -->
    
    <div class="span3" style="margin-left: 0">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon-signal"></i></span><h5>Progresso da obra</h5>
            </div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nome</th>
                            <td>Prédio Rosalindo</td>
                        </tr>
                        <tr>
                            <th>Inicio</th>
                            <td>13/08/2015</td>
                        </tr>
                        <tr>
                            <th>Fim</th>
                            <td>13/08/2015</td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="progress">
                  <div class="bar bar-success" style="width: 35%;"></div>
                  <div class="bar bar-warning" style="width: 30%;"></div>
                  <div class="bar bar-danger" style="width: 35%;"></div>
                </div>
                
                <span>43%</span>
                <!--<img src="assets/img/progressBars.png"/>-->
            </div>
        </div>
    </div>
    <!-- FIM DO BOX  -->
    
    <!-- SEGUNDO BOX DA OBRA  -->
    
    <div class="span3" style="margin-left: 1">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon-signal"></i></span><h5>Progresso da obra</h5>
            </div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nome</th>
                            <td>Ed Mares do Leste</td>
                        </tr>
                        <tr>
                            <th>Inicio</th>
                            <td>13/08/2015</td>
                        </tr>
                        <tr>
                            <th>Fim</th>
                            <td>13/08/2015</td>
                        </tr>
                    </tbody>
                </table> 
                
                <div class="progress">
                  <div class="bar bar-success" style="width: 15%;"></div>
                  <div class="bar bar-warning" style="width: 30%;"></div>
                  <div class="bar bar-danger" style="width: 55%;"></div>
                </div>
                
                <span>28%</span>
                
            </div>
        </div>
    </div>
    <!-- FIM  -->
    
    <!-- TERCEIRO BOX DA OBRA  -->
    
    <div class="span3" style="margin-left: 1">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon-signal"></i></span><h5>Progresso da obra</h5>
            </div>
            <div class="widget-content">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th>Nome</th>
                            <td>Cond Paraiso</td>
                        </tr>
                        <tr>
                            <th>Inicio</th>
                            <td>13/08/2015</td>
                        </tr>
                        <tr>
                            <th>Fim</th>
                            <td>13/08/2015</td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="progress">
                  <div class="bar bar-success" style="width: 65%;"></div>
                  <div class="bar bar-warning" style="width: 10%;"></div>
                  <div class="bar bar-danger" style="width: 25%;"></div>
                </div>
                
                <span>63%</span>
                
            </div>
        </div>
    </div>
    <!-- FIM  -->
    
    <!-- QUATO BOX DA OBRA  -->
    
    <div class="span3" style="margin-left: 1">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon"><i class="icon-signal"></i></span><h5>Progresso da obra</h5>
            </div>
            <div class="widget-content">
                <table class="table table-bordered">
                     <tbody>
                        <tr>
                            <th>Nome</th>
                            <td>Cond Oceano Azul</td>
                        </tr>
                        <tr>
                            <th>Inicio</th>
                            <td>13/08/2015</td>
                        </tr>
                        <tr>
                            <th>Fim</th>
                            <td>13/08/2015</td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="progress">
                  <div class="bar bar-success" style="width: 97%;"></div>
                  <div class="bar bar-warning" style="width: 1%;"></div>
                  <div class="bar bar-danger" style="width: 2%;"></div>
                </div>
                
                <span>92%</span>
                
            </div>
        </div>
    </div>
    
</div>
<!-- FIM  -->


<!-- PARTE TRÊS DO BOX ESTATÍSTICA DO SISTEMA


<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        
        <div class="widget-box">
            <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Estatísticas do Sistema</h5></div>
            <div class="widget-content">
                <div class="row-fluid">           
                    <div class="span12">
                        <ul class="site-stats">
                            <li class="bg_lh">
                                <a href="consultaUsuario.php"><i class="icon-group"></i> <strong>10</strong> <small>Pessoas</small></a>
                            </li>
                            <li class="bg_lh">
                                <a href="consultaMaterial.php"><i class="icon-barcode"></i> <strong>1580</strong> <small>Materiais</small>
                            </li>
                            <li class="bg_lh">
                                <a href="#"><i class="icon-tags"></i> <strong>16</strong> <small>Canteiro de Obras</small>
                            </li>
                            <li class="bg_lh">
                                <a href="#"><i class="icon-wrench"></i> <strong>60</strong> <small>Fornecedores</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<script src="js/bootstrap.min.js"></script>


      </div>
    </div>
  </div>
</div>

  <?php
  // pagemaincontent recebe o conteudo do buffer
  $pagemaincontent = ob_get_contents(); 

  // Descarta o conteudo do Buffer
  ob_end_clean(); 

  /* Atribuição das Variáveis da página principal
  * Lembrando que podem ser colocadas novas variáveis,
  * conforme necessidade */
  $pagetitle = "Dashboard"; 

  //Include com o Template
  include("master.php");
?>