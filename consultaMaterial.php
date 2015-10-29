<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="consultaMaterial.php" class="tip-bottom" title="Materiais">Materiais</a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">


<div class="row-fluid" style="margin-top: 0">

  <!-- PRIMEIRA PARTE DO BOX VISUALIZA Materiais -->
    
    <div class="span12">
        
        <a href="novoMaterial.php" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Material</a>
        <br><br>
        
        <!-- Listar Materiais -->
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="icon-tags"></i>
                            </span>
                            <h5>Filtrar Materiais</h5>
                        </div>
        <div class="widget-content nopadding">
                

                <div class="span12" id="divMateriais" style=" margin-left: 0">
                    <!-- <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Listar Materiais</a></li>
                    </ul> -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divListMateriais">
                                <form action="#" method="post" id="formMateriais" novalidate="novalidate">
                                     <div class="span12" style="padding: 1%">
                          <div class="span4">
                              <input id="nomeMaterial" class="span12" type="text" name="nomeFornecedor" placeholder="Descrição do Material" value="">
                          </div>

                          <div class="span3">
                            <select>
                              <option selected>Selecione...</option>
                              <option>A-Z</option>
                              <option>Z-A</option>
                            </select>
                          </div>

                          <div class="span3">
                              <input id="nomeFornecedor" class="span12" type="text" placeholder="Nome do Empreendimento" name="nomeFornecedor" value="">
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
            <h5>Materiais</h5>
        </div>
        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Medida</th>
                        <th>Acrescentar</th>
                        <th>Diminuir</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $json = file_get_contents('json\material.json');
                    $lendo = json_decode($json, true);
                    foreach($lendo as $objeto){
                ?>
                    <tr>
                        <td><?php echo "{$objeto['codigo']}"; ?></td>
                        <td><?php echo "{$objeto['descricao']}"; ?></td>
                        <td><?php echo rand(1,250)?></td>
                        <td><?php echo "{$objeto['medida']}"; ?></td>
                        <td>
                            <a data-toggle="modal" data-target="#modal-editar" title="Editar" class="btn btn-info tip-top" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                                <i class="icon-pencil icon-white"></i>
                            </a>
                        </td>
                        <td>
                            <a data-toggle="modal" data-target="#modal-excluir" title="Excluir" class="btn btn-danger tip-top" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                                <i class="icon-remove icon-white"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
 
<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="#" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Excluir Cliente</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idCliente" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente excluir este cliente e os dados associados a ele?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn btn-danger">Excluir</button>
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
  </div>
  </form>
</div>
<!-- Fim do modal Excluir -->

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
<!-- Fim modal editar -->

<script type="text/javascript">
$(document).ready(function(){
   $(document).on('click', 'a', function(event) {
        var cliente = $(this).attr('cliente');
        $('#idCliente').val(cliente);
    });
});

</script>
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
  $pagetitle = "consultaMaterial"; 

  //Include com o Template
  include("master.php");
?>