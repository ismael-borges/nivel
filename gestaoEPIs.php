<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript" src="assets/js/autocompleteEpis.js"></script>

<style type="text/css">
    .controls ul {
        width: 206px;
        border: 1px solid #eaeaea;
        position: absolute;
        z-index: 9;
        background: #f3f3f3;
        list-style: none;
    }
    .controls ul li {
        padding: 5px;
    }
    .controls ul li:hover {
        background: #ccc;
    }
    #country_list_id {
        display: none;
    }
</style>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="gestaoEPIs.php" class="tip-bottom" title="Gestão de EPI's">Gestão de EPI's</a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">


<div class="row-fluid" style="margin-top: 0">

  <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-barcode"></i>
                </span>
                <h5>Gestão de EPI's</h5>
            </div>
            <div class="widget-content nopadding">

                <form action="#" id="formGestaoEpis" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="codigoFunc" class="control-label">Código </label>
                        <div class="controls">
                            <input id="codigoFunc" required="required" disabled class="input-mini" type="text" name="codigoFunc"/>
                            <input id="nomeFunc" required="required" placeholder="Nome do Funcionário"
                            class="input-xlarge" type="text" name="nomeFunc" onkeyup="autocomplet()"/>
                            <ul id="country_list_id"></ul>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="empreendimento" class="control-label">Empreendimento </label>
                        <div class="controls">
                            <input id="empreendimento" placeholder="Nome do Empreendimento" required="required" class="input-xxlarge" type="text" name="empreendimento"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="codigoEpis" class="control-label">Código do Produto </label>
                        <div class="controls">
                            <input id="codigoEpis" required="required" disabled class="input-mini" type="text" name="codigoEpis"/>
                            <input id="nomeEpis" required="required" placeholder="Nome do EPI's" onkeyup="autocompletEpis()" class="input-large" type="text" name="nomeEpis"/>
                            <input id="marcaEpis" required="required" placeholder="Marca do EPI's" disabled class="input-medium" type="text" name="marcaEpis"/>
                        </div>
                    </div>
                    
                    <div class="control-group ">
                        <div class="controls">
                            <button class="btn btn-success offset10"><i class="icon icon-plus"></i> Adicionar</button>
                        </div>
                    </div>
                </div>
            </form> <!-- FINAL DO FORMULÁRIO -->
                
                <table class="table table-bordered">
                    <thead>
                        <th>#</th>
                        <th>Tipo do Material</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Devolver</th>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Balde Plastico CAP 10L</td>
                            <td>Exemplo</td>
                            <td>Funil</td>
                            <td>
                                <a class="btn btn-warning tip-top" title="Devolver">
                                    <i class="icon icon-exclamation-sign"></i> Devolver
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Valvula PE C/Crivo Brinze 3/4"</td>
                            <td>Exemplo</td>
                            <td>Teste</td>
                            <td>
                                <a class="btn btn-warning tip-top" title="Devolver">
                                    <i class="icon icon-exclamation-sign"></i> Devolver
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>003</td>
                            <td>Caixa D'agua Fibrocimento 1000L</td>
                            <td>Exemplo</td>
                            <td>Representação</td>
                            <td>
                                <a class="btn btn-warning tip-top" title="Devolver">
                                    <i class="icon icon-exclamation-sign"></i> Devolver
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    
                </table>
                
            </div>
        </div>
            <button class="btn btn-primary offset10"s><i class="icon icon-ok"></i> Salvar</button>
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
  $pagetitle = "gestaoEPIs"; 

  //Include com o Template
  include("master.php");
?>