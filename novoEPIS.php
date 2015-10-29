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
        <a href="consultaEPIS.php" class="tip-bottom" title="EPI's">EPI's</a> <a href="novoEPIS.php" class="tip-bottom" title="Adicionar"><b>Adicionar</b></a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          
          <script>
            jQuery(function($){
                $("#valorEPIS").maskMoney({symbol:"R$",decimal:".",thousands:"."});
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

              $epis = new Epis();

              if(isset($_POST['cadastrar'])):

                $descricao = $_POST['descricaoEPIS'];
                $marca = $_POST['marcaEPIS'];
                $unidade = $_POST['unidadeEPIS'];
                $valor = $_POST['valorEPIS'];
                $tipo = !empty($_POST['tipoEPIS']) ? (int)$_POST['tipoEPIS'] : 0;
                $alugado = !empty($_POST['alugadoEPIS']) ? (int)$_POST['alugadoEPIS'] : 0;

                $epis->setDescricao($descricao);
                $epis->setMarca($marca);
                $epis->setUnidade($unidade);
                $epis->setValor($valor);
                $epis->setTipo($tipo);
                $epis->setAlugado($alugado);

                #inserindo dados no banco
                if($epis->insert()):
                  echo "<div id='alert-message' class='alert alert-success'>
                        <strong>Sucesso!</strong> EPI's Cadastrado!
                        </div>";

                        #abaixo, chamamos a função header() 
                        #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
                        header('Refresh: 3; URL=consultaEPIS.php');
                endif;
                

              endif;
            ?>
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro de EPI's</h5>
            </div>
            <div class="widget-content nopadding">

                <form action="" id="formEPIS" name="formEPIS" method="post" class="form-horizontal" >
                	
                    <div class="control-group">
                        <label for="descricaoEPIS" class="control-label">Descricao *</label>
                        <div class="controls">
                            <input id="descricaoEPIS" required="required" type="text" name="descricaoEPIS"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="marcaEPIS" class="control-label">Marca *</label>
                        <div class="controls">
                            <input id="marcaEPIS" type="text" required="required" name="marcaEPIS"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="unidadeEPIS" class="control-label">Unidade *</label>
                        <div class="controls">
                            <input id="unidadeEPIS" type="number" required="required" name="unidadeEPIS"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="valorEPIS" class="control-label">Valor R$ *</label>
                        <div class="controls">
                            <input type="text" id="valorEPIS" required="required" maxlength="15" name="valorEPIS"/>
                        </div>
                    </div>
                                        
                    <div class="control-group">
                        <label for="tipoEPIS" class="control-label">Tipo </label>
                        <div class="controls">
                            <input type="checkbox" id="tipoEPIS" name="tipoEPIS" value="1"> Descartavel</input>
                            <input type="checkbox" id="alugadoEPIS" name="alugadoEPIS" value="1"> Alugado</input>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" name="cadastrar" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="consultaEPIS.php" id="" class="btn">
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
</div>

<?php
  // pagemaincontent recebe o conteudo do buffer
  $pagemaincontent = ob_get_contents(); 

  // Descarta o conteudo do Buffer
  ob_end_clean(); 

  /* Atribuição das Variáveis da página principal
  * Lembrando que podem ser colocadas novas variáveis,
  * conforme necessidade */
  $pagetitle = "novoEPIS"; 

  //Include com o Template
  include("master.php");
?>