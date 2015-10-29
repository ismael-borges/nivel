<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<?php
  function __autoload($class_name){
    require_once 'conexao/'.$class_name.'.php';
  }
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="consultaAgenda.php" class="tip-bottom" title="Agenda">Agenda</a> <a href="novoAgenda.php" class="tip-bottom" title="Adicionar"><b>Adicionar</b></a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          
                                                
<script type="text/javascript">
               $(function() {
                    $("#dataCon").datepicker({
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

<script>
            jQuery(function($){
                $("#hora").mask("99:99");
            });

            jQuery(function($){
              $("#alert-message").delay(2000).fadeOut("slow", function () { $(this).remove(); })
            });
          </script>

          <script type="text/javascript">
            setTimeout(function () {
               window.location.href= url; // the redirect goes here
            },3000);
</script>


<div class="row-fluid" style="margin-top: 0">

            <div class="span12">

              <?php

              $agenda = new Agenda();

              if(isset($_POST['cadastrar'])):

                $dataCon = $_POST['dataCon'];
                $diaDaSemana = $_POST['diaDaSemana'];
                $hora = $_POST['hora'];
                $descricao = $_POST['descricao'];

                $agenda->setData($dataCon);
                $agenda->setDiaDaSemana($diaDaSemana);
                $agenda->setHora($hora);
                $agenda->setDescricao($descricao);

                #inserindo dados no banco
                if($agenda->insert()):
                  echo "<div id='alert-message' class='alert alert-success'>
                        <strong>Sucesso!</strong> Compromisso Cadastrado!
                        </div>";

                        #abaixo, chamamos a função header() 
                        #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
                        header('Refresh: 3; URL=consultaAgenda.php');
                endif;
                

              endif;
            ?>

                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <i class="icon-user"></i>
                        </span>
                        <h5>Cadastro de Compromissos</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <form action="" id="formAgenda" method="post" class="form-horizontal" >

                            <div class="control-group">
                                <label for="dataCon" class="control-label">Data *</label>
                                <div class="controls">
                                    <input id="dataCon" type="text" required="required" name="dataCon"/>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="dia" class="control-label">Dia *</label>
                                <div class="controls">
                                    <select name="diaDaSemana">
                                      <option></option>
                                      <option>Segunda</option>
                                      <option>Terça</option>
                                      <option>Quarta</option>
                                      <option>Quinta</option>
                                      <option>Sexta</option>
                                      <option>Sábado</option>
                                      <option>Domingo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="hora" class="control-label">Hora *</label>
                                <div class="controls">
                                    <input id="hora" type="text" required="required" name="hora"/>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="descricao" class="control-label">Descrição *</label>
                                <div class="controls">
                                    <textarea id="descricao" maxlength="1000" required="required" name="descricao"></textarea>
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="span12">
                                    <div class="span6 offset3">
                                        <button type="submit" name="cadastrar" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                        <a href="consultaAgenda.php" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
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
</div>

<?php
  // pagemaincontent recebe o conteudo do buffer
  $pagemaincontent = ob_get_contents(); 

  // Descarta o conteudo do Buffer
  ob_end_clean(); 

  /* Atribuição das Variáveis da página principal
  * Lembrando que podem ser colocadas novas variáveis,
  * conforme necessidade */
  $pagetitle = "novoAgenda"; 

  //Include com o Template
  include("master.php");
?>