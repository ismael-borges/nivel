<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="consultaObras.php" class="tip-bottom" title="Obras">Obras</a> <a href="novoObras.php" class="tip-bottom" title="Adicionar"><b>Adicionar</b></a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          
                                                
                      <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="http://localhost/mapos/js/dist/excanvas.min.js"></script><![endif]-->


<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro das Obras</h5>
            </div>
            <div class="widget-content nopadding">

                <form action="#" id="formObras" method="post" class="form-horizontal" >
                    
                    <div class="control-group">
                        <label for="empreendimento" class="control-label">Empreendimento *</label>
                        <div class="controls">
                            <input id="empreendimento" required="required" type="text" name="empreendimento"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="endereco" class="control-label">Endereço *</label>
                        <div class="controls">
                            <input id="endereco" type="text" required="required" name="endereco"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="dataInicio" class="control-label">Data de Inicio *</label>
                        <div class="controls">
                            <input id="dataInicio" type="date" required="required" name="dataInicio"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="dataPrevista" class="control-label">Data Prevista *</label>
                        <div class="controls">
                            <input id="dataPrevista" required="required" type="date" name="dataPrevista"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="responsavel" class="control-label">Responsável *</label>
                        <div class="controls">
                            <input id="responsavel" required="required" type="text" name="responsavel"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="etapas" class="control-label">Etapas</label>
                        <div class="controls">
                            <input id="etapas" type="text" name="etapas"/>
                            <div class="btn btn-primary">
                                <i class="icon-plus icon-white"></i> Etapas
                            </div>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="etapas" class="control-label">Etapas</label>
                        <div class="controls table table-bordered">
                            <table>
                                <thead>
                                    <th>Etapa</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Exemplo</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="consultaObras.php" id="" class="btn">
                                    <i class="icon-arrow-left"></i> Voltar
                                </a>
                            </div>
                        </div>
                    </div>
                </form> <!-- FINAL DO FORMULÁRIO -->
            </div>
        </div>
    </div>
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
  $pagetitle = "Titulo desta página"; 

  //Include com o Template
  include("master.php");
?>