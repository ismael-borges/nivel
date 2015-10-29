<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="consultaPessoa.php" class="tip-bottom" title="Clientes">Clientes</a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">


<div class="row-fluid" style="margin-top: 0">

  <!-- INICIO DO BOX PARA CONSULTAR PESSOAS -->
    
    <div class="span12">
        
        <a href="novoPessoa.php" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Cliente</a>
        
        <!-- Listar Pessoas -->
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="icon-tags"></i>
                            </span>
                            <h5>Filtrar Clientes</h5>
                        </div>
        <div class="widget-content nopadding">
                

                <div class="span12" id="divMateriais" style=" margin-left: 0">
                    <!-- <ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Listar Materiais</a></li>
                    </ul> -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divListClientes">
                                <form action="#" method="post" id="formClientes" novalidate="novalidate">
                                     <div class="span12" style="padding: 1%">
                          <div class="span3">
                              <input id="nomeCliente" class="span12" type="text" name="nomeCliente" placeholder="Nome" value="">
                          </div>
                                         
                          <div class="span2">
                              <input id="cpfCnpjCliente" class="span12" type="text" name="cpfCnpjCliente" placeholder="CPF/CNPJ" value="">
                          </div>

                          <div class="span2">
                              <input id="nomeFornecedor" class="span12" type="text" placeholder="CPF" name="nomeFornecedor" value="">
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
            <h5>Pessoa</h5>

        </div>

        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>CPF/CNPJ</th>
                        <th>Telefone</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>Carlos José Freitas</td>
                        <td>05014895241</td>
                        <td>33982615</td>
                        <td>
                            <a data-toggle="modal" data-target="#modal-editar" class="btn btn-info tip-top" title="Editar">
                                <i class="icon-pencil icon-white"></i>
                            </a>
                            <a data-toggle="modal" data-target="#modal-excluir" class="btn btn-danger tip-top" title="Excluir">
                                <i class="icon-remove icon-white"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>Arthur Santos Oliveira</td>
                        <td>05014895241</td>
                        <td>33982615</td>
                        <td>
                            <a data-toggle="modal" data-target="#modal-editar" class="btn btn-info tip-top" title="Editar">
                                <i class="icon-pencil icon-white"></i>
                            </a>
                            <a data-toggle="modal" data-target="#modal-excluir" class="btn btn-danger tip-top" title="Excluir">
                                <i class="icon-remove icon-white"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>003</td>
                        <td>Jadson Ferreira da Silva</td>
                        <td>05014895241</td>
                        <td>33982615</td>
                        <td>
                            <a data-toggle="modal" data-target="#modal-editar" class="btn btn-info tip-top" title="Editar">
                                <i class="icon-pencil icon-white"></i>
                            </a>
                            <a data-toggle="modal" data-target="#modal-excluir" class="btn btn-danger tip-top" title="Excluir">
                                <i class="icon-remove icon-white"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        
    </div>
 
<!-- Modal para exclusão de pessoas -->
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
<!-- Fim modal excluir -->

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
</d

<?php
  // pagemaincontent recebe o conteudo do buffer
  $pagemaincontent = ob_get_contents(); 

  // Descarta o conteudo do Buffer
  ob_end_clean(); 

  /* Atribuição das Variáveis da página principal
  * Lembrando que podem ser colocadas novas variáveis,
  * conforme necessidade */
  $pagetitle = "consultaPessoa"; 

  //Include com o Template
  include("master.php");
?>