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
 $func = new Funcionario();
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
        <a href="consultaFuncionario.php" class="tip-bottom" title="Funcionario">Funcionário</a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">

<div class="row-fluid" style="margin-top: 0">

  <!-- INICIO DO BOX PARA CONSULTAR FUNCIONÁRIOS -->
    
    <div class="span12">


      <?php
        # RESGATA O ID PASSADO PELO HREF RESGATADO PELO METHOD GET
        if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
                # GUARDA O ID DENTRO DA VARIÁVEL ID  
                $id = (int)$_GET['id'];

                # VERIFICA SE A FUNÇÃO DELETE FOI REALMENTE ACIONADA CHAMADA PELA INSTANCIA DA CLASSE EPIS
                if($func->delete($id)):
                  echo "<div id='alert-message' class='alert alert-success'>
                        <strong>Sucesso!</strong> Funcionário Deletado!
                        </div>";

                  #abaixo, chamamos a função header() 
                  #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
                  header('Refresh: 5; URL=consultaFuncionario.php');
                endif;

        endif;
      ?>
        
        <a href="novoFuncionario.php" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Funcionário</a>
        
        <!-- Listar Pessoas -->
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="icon-tags"></i>
                            </span>
                            <h5>Filtrar Funcionários</h5>
                        </div>
        <div class="widget-content nopadding">
                

                <div class="span12" id="divMateriais" style=" margin-left: 0">
                    <!-- <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Listar Materiais</a></li>
                    </ul> -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divListFuncionario">
                                <form action="#" method="post" id="formFuncionario" novalidate="novalidate">
                                     <div class="span12" style="padding: 1%">
                          <div class="span4">
                              <input id="nomeFuncionario" class="span12" type="text" name="nomeFuncionario" placeholder="Nome" value="">
                          </div>

                          <div class="span3">
                              <input id="cpf" class="span12" type="text" placeholder="CPF" name="cpf" value="">
                          </div>
                                         
                        <div class="span3">
                            <select>
                              <option selected>A-Z</option>
                              <option>Z-A</option>
                            </select>
                          </div>

                          <div class="span2">
                            <button class="span12 btn btn-info" title="Pesquisar"> <i class="icon-search"></i> Pesquisar</button>
                            <!--<i class="icon-search"></i>-->
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
            <h5>Funcionários</h5>

        </div>

        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Celular</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <?php foreach ($func->findAll() as $key => $value) { ?>

                <tbody>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->nome; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->cpf; ?></td>
                        <td><?php echo $value->telefone; ?></td>
                        <td><?php echo $value->celular; ?></td>
                       <td>
                            <?php echo "<a href='editarFuncionario.php?acao=editar&id=" . $value->id . "'class='btn btn-info tip-top' title='Editar'>
                                          <i class='icon-pencil icon-white'></i> </a>"; ?>
                              <?php echo "<a href='consultaFuncionario.php?acao=deletar&id=" . $value->id . "'
                              onclick='return confirm(\"Deseja Excluir este Registro - $value->nome ?\")' class='btn btn-danger tip-top' title='Excluir'>
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
  <form action="#" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Excluir Pessoa</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idPessoa" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente excluir esta pessoa ?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <button class="btn btn-danger">Excluir</button>
  </div>
  </form>
</div>
 Fim modal excluir -->

<!-- Modal para edição de pessoas
<div id="modal-editar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="novoPessoa.php" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Editar Pessoa</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idPessoa" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente editar esta pessoa ?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <button class="btn btn-info">Editar</button>
  </div>
  </form>
</div>
Fim modal editar -->
        
<!-- <script type="text/javascript">

$(document).ready(function(){

   $(document).on('click', 'a', function(event) {
        
        var cliente = $(this).attr('cliente');
        $('#idPessoa').val(cliente);

    });

});

</script> -->

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
  $pagetitle = "consultaFuncionario"; 

  //Include com o Template
  include("master.php");
?>