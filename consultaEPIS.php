<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<?php
  # FUNÇÃO QUE CARREGA TODOS OS ARQUIVOS COM EXTENSÃO .PHP
  # REQUIRE_ONCE É UMA FUNÇÃO QUE EXIGE QUE O PHP INCLUA TODAS AS CLASSE COM EXTENSÃO .PHP 
  function __autoload($class_name){
    require_once 'conexao/'.$class_name.'.php';
  }
?>

<?php
 # INSTANCIAMENTO DA CLASSE EPIS
 $epis = new Epis();
?>

<script type="text/javascript">
// FUNÇÃO QUE APAGA A MENSAGEM DE ALERTA QUANDO UMA AÇÃO É REALIZADA
jQuery(function($){
  $("#alert-message").delay(2000).fadeOut("slow", function () { $(this).remove(); })
});
</script>

<script type="text/javascript">
            setTimeout(function () {
               window.location.href= url; // FUNÇÃO QUE REDIRECIONA PARA A PÁGINA INDICADA PELA VARIÁVEL URL
            },5000);
</script>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="consultaEPIS.php" class="tip-bottom" title="EPI's">EPI's</a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">


<div class="row-fluid" style="margin-top: 0">
    
    <div class="span12">

      <?php
        # RESGATA O ID PASSADO PELO HREF RESGATADO PELO METHOD GET
        if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
                # GUARDA O ID DENTRO DA VARIÁVEL ID  
                $id = (int)$_GET['id'];

                # VERIFICA SE A FUNÇÃO DELETE FOI REALMENTE ACIONADA CHAMADA PELA INSTANCIA DA CLASSE EPIS
                if($epis->delete($id)):
                  echo "<div id='alert-message' class='alert alert-success'>
                        <strong>Sucesso!</strong> EPI's Deletado!
                        </div>";

                  #abaixo, chamamos a função header() 
                  #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
                  header('Refresh: 5; URL=consultaEPIS.php');
                endif;

        endif;
      ?>
        
        <a href="novoEPIS.php" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar EPI's</a>
        
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="icon-tags"></i>
                            </span>
                            <h5>Filtrar EPI's</h5>
                        </div>
        <div class="widget-content nopadding">
                

                <div class="span12" id="divMateriais" style=" margin-left: 0">
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divListEPIS">
                                <form action="#" method="post" id="formEPIS" novalidate="novalidate">
                                     <div class="span12" style="padding: 1%">
                          <div class="span4">
                              <input id="nomeEPIS" class="span12" type="text" name="nomeEPIS" placeholder="Nome" value="">
                          </div>

                           <div class="span3">
                              <input id="tipoEPIS" class="span12" type="text" placeholder="Tipo" name="tipoEPIS" value="">
                          </div>
                                         
                            <div class="span3">
                                <select>
                                  <option selected>A-Z</option>
                                  <option>Z-A</option>
                                </select>
                              </div>

                          <div class="span2">
                            <button class="span12 btn btn-info" title="Pesquisar"> <i class="icon-search"></i> Pesquisar</button>
                          </div>

                      </div>   
                                </form>
                            </div>

                        </div>

                    </div>

                </div>
             
        </div>

    </div>


        <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-user"></i>
            </span>
            <h5>EPI's</h5>

        </div>

        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Descrição</th>
                        <th>Unidade</th>
                        <th>Valor R$</th>
                        <th>Tipo</th>
                        <th>Alugado</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <?php foreach ($epis->findAll() as $key => $value) { ?>

                  <tbody>
                      <tr>
                          <td><?php echo $value->id; ?></td>
                          <td><?php echo $value->descricao; ?></td>
                          <td><?php echo $value->unidade; ?></td>
                          <td><?php echo $value->valor; ?></td>
                          <td><?php
                           if($value->tipo == 0){
                              echo "Reutilizável";
                            }else{
                              echo "Descartável";
                            }
                            ?></td>
                          <td><?php
                                if($value->alugado == 0){
                              echo "Não";
                            }else{
                              echo "Sim";
                            }
                          ?></td>
                          <td>
                              <?php echo "<a href='editarEpis.php?acao=editar&id=" . $value->id . "'class='btn btn-info tip-top' title='Editar'>
                                          <i class='icon-pencil icon-white'></i> </a>"; ?>
                              <?php echo "<a href='consultaEPIS.php?acao=deletar&id=" . $value->id . "'
                              onclick='return confirm(\"Deseja Excluir este Registro ?\")' class='btn btn-danger tip-top' title='Excluir'>
                                          <i class='icon-remove icon-white'></i> </a>"; ?>
                          </td>
                      </tr>
                  </tbody>

                <?php } ?>
            </table>
        </div>
        
        
    </div>
 
<!-- Modal para exclusão de pessoas
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="#" method="get" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Excluir EPI's <?php echo " - Id: ". $value->id; ?></h5>
  </div>
  <div class="modal-body">
    <h5 style="text-align: center">Deseja realmente excluir ?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <button class="btn btn-danger">
      <?php echo "<a href='consultaEPIS.php?acao=deletar&id=" . $value->id . "'style='color:#FFF;'>Excluir</a>"; ?>
    </button>
  </div>
  </form>
</div>
Fim modal excluir -->
        
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
  $pagetitle = "consultaEPIS"; 

  //Include com o Template
  include("master.php");
?>