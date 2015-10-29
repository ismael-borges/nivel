<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb">
        <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="consultaObras.php" class="tip-bottom" title="Obras">Obras</a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">


<div class="row-fluid" style="margin-top: 0">

  <!-- PRIMEIRO BLOCO DO BOX PARA CONSULTAR AS OBRAS -->
    
    <div class="span12">
        
        <a href="novoObras.php" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Obras</a>
        
        <!-- Listar Obras -->
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="icon-tags"></i>
                            </span>
                            <h5>Filtrar Obras</h5>
                        </div>
        <div class="widget-content nopadding">
                

                <div class="span12" id="divObras" style=" margin-left: 0">
                    <!--<ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Listar Fornecedores</a></li>
                    </ul> -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divListObras">
                                <form action="#" method="post" id="formObras" novalidate="novalidate">
                                     <div class="span12" style="padding: 1%">
                          <div class="span4">
                              <input id="nomeObras" class="span12" type="text" name="nomeObras" placeholder="Nome do Empreendimento" value="">
                          </div>

                          <div class="span3">
                            <select>
                              <option selected>Selecione...</option>
                              <option>A-Z</option>
                              <option>Z-A</option>
                            </select>
                          </div>

                          <div class="span3">
                              <input id="cnpjObras" class="span12" type="text" placeholder="CNPJ" name="cnpjObras" value="">
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
                <i class="icon-home"></i>
            </span>
            <h5> Cadastrar Obras</h5>

        </div>

        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Empreendimento</th>
                        <th>CPF/CNPJ</th>
                        <th>Telefone</th>
                        <th>Responsável</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Condominio Costa Clara</td>
                        <td>000.000.000/0001-00</td>
                        <td>(01) 2345-6789</td>
                        <td>Jorge Bastos</td>
                        <td>
                            <a data-toggle="modal" data-target="#modal-editar" class="btn btn-info tip-top" title="Editar Obra">
                                <i class="icon-pencil icon-white"></i>
                            </a>
                            <a data-toggle="modal" data-target="#modal-excluir" class="btn btn-danger tip-top" title="Excluir Obra">
                                <i class="icon-remove icon-white"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Edifício Joema</td>
                        <td>000.000.000/0001-00</td>
                        <td>(01) 2345-6789</td>
                        <td>Filipe Barbosa</td>
                        <td>
                            <a data-toggle="modal" data-target="#modal-editar" class="btn btn-info tip-top" title="Editar Obra">
                                <i class="icon-pencil icon-white"></i>
                            </a>
                            <a data-toggle="modal" data-target="#modal-excluir" class="btn btn-danger tip-top" title="Excluir Obra">
                                <i class="icon-remove icon-white"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Predio Pernambues</td>
                        <td>000.000.000/0001-00</td>
                        <td>(01) 2345-6789</td>
                        <td>Andrei Oliveira</td>
                        <td>
                            <a data-toggle="modal" data-target="#modal-editar" class="btn btn-info tip-top" title="Editar Obra">
                                <i class="icon-pencil icon-white"></i>
                            </a>
                            <a data-toggle="modal" data-target="#modal-excluir" class="btn btn-danger tip-top" title="Excluir Obra">
                                <i class="icon-remove icon-white"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>004</td>
                        <td>Condominio Vento Leste</td>
                        <td>000.000.000/0001-00</td>
                        <td>(01) 2345-6789</td>
                        <td>Guilherme Santos</td>
                        <td>
                            <a data-toggle="modal" data-target="#modal-editar" class="btn btn-info tip-top" title="Editar Obra">
                                <i class="icon-pencil icon-white"></i>
                            </a>
                            <a data-toggle="modal" data-target="#modal-excluir" class="btn btn-danger tip-top" title="Excluir Obra">
                                <i class="icon-remove icon-white"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
 
<!-- Modal para exclusão -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="#" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Excluir Obra</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idObra" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente excluir esta Obra ?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <button class="btn btn-danger">Excluir</button>
  </div>
  </form>
</div>
<!-- Fim modal excluir -->

<!-- Modal para edição -->
<div id="modal-editar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="novoObras.php" method="post" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 id="myModalLabel">Editar Obra</h5>
  </div>
  <div class="modal-body">
    <input type="hidden" id="idObra" name="id" value="" />
    <h5 style="text-align: center">Deseja realmente editar esta Obra ?</h5>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
    <button class="btn btn-info">Editar</button>
  </div>
  </form>
</div>
<!-- Fim modal editar -->

<!-- <script type="text/javascript">

$(document).ready(function(){

   $(document).on('click', 'a', function(event) {
        
        var cliente = $(this).attr('cliente');
        $('#idObra').val(cliente);

    });

});

</script> -->

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
  $pagetitle = "consultaObras"; 

  //Include com o Template
  include("master.php");
?>