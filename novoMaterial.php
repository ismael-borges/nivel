<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="consultaMaterial.php" class="tip-bottom" title="Materiais">Materiais</a> <a href="novoMaterial.php" class="tip-bottom" title="Adicionar"><b>Adicionar</b></a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          
                                                
                      <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="http://localhost/mapos/js/dist/excanvas.min.js"></script><![endif]-->
          
          <script type="text/javascript">
               $(function() {
                    $("#data_aluguel").datepicker({
                        dateFormat: 'dd/mm/yy',
                        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                        nextText: 'Próximo',
                        prevText: 'Anterior'
                    });
                });
          </script>
          
          <script type="text/javascript">
                $(function() {
                    $("#data_entrega").datepicker({
                    dateFormat: 'dd/mm/yy',
                    dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                    dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                    monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
                    nextText: 'Próximo',
                    prevText: 'Anterior'
                });
            });
          </script>


<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro de Materiais</h5>
            </div>
            <div class="widget-content nopadding">

                <form action="#" id="formMaterial" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="nomeCliente" class="control-label">Descrição *</label>
                        <div class="controls">
                            <input id="nomeMaterial" type="text" required="required" name="nomeCliente"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="unidade" class="control-label">Unidade *</label>
                        <div class="controls">
                            <input id="unidade" type="text" required="required" name="unidade"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="quantidade" class="control-label">Quantidade *</label>
                        <div class="controls">
                            <input id="quantidade" type="number" min="1" max="999" name="quantidade"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="fornecedor" class="control-label">Fornecedor *</label>
                        <div class="controls">
                            <input id="fornecedor" type="text" name="fornecedor"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="marca" class="control-label">Marca *</label>
                        <div class="controls">
                            <input id="marca" type="text" name="marca"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="modelo" class="control-label">Modelo *</label>
                        <div class="controls">
                            <input id="modelo" type="text" name="modelo"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="preco" class="control-label">Preço Unitário *</label>
                        <div class="controls">
                            <input id="preco" type="text" name="preco"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="tipo" class="control-label">Tipo *</label>
                        <div class="controls">
                            <input type="checkbox" name="cbk_descartavel" id="cbk_descartavel">Descartável</input>
                        </div>
                    </div>
            
                    <div class="control-group">
                        <label for="aquisicao" class="control-label">Aluguel *</label>
                        <div class="controls">
                            <!--<input type="radio" name="aquisicao" value="compra">Compra</input>-->
                            <input type="checkbox" name="cbk_aluguel" id="cbk_aluguel"></input>
                        </div>
                    </div>
    
                    <div class="control-group" id="div_alu_data" style="display:none;">
                       <div class="span12" style="padding: 1%">
                            <div class="span5">
                                <label for="data_aluguel" class="control-label">Data do aluguel *</label>
                                    <div class="controls">
                                        <input id="data_aluguel" type="text" name="data_aluguel" required="required"/>
                                    </div>
                            </div>
                           
                           <div class="span3">
                                <label for="data_entrega" class="control-label">Data da entrega *</label>
                                    <div class="controls">
                                        <input id="data_entrega" type="text" name="data_entrega" required="required"/>
                                    </div>
                            </div>
                           
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"> <i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="consultaMaterial.php" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <script src="js/bootstrap.min.js"></script>
      </div>
    </div>
  </div>
</div>

<script type= "text/javascript">
    $('#cbk_aluguel').click(function(){
				//a better option would be if(this.checked)
				if($('#cbk_aluguel').is(':checked')) {
					$('#div_alu_data').fadeIn('fast');
					$('#data_aluguel').val('');
                    $('#data_entrega').val('');
				} else {
					$('#div_alu_data').fadeOut('fast');   
				}
			});
</script>



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