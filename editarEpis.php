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

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="consultaEPIS.php" class="tip-bottom" title="EPI's">EPI's</a> <a href="novoEPIS.php" class="tip-bottom" title="Adicionar"><b>Adicionar</b></a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          
          <script>
            // FUNÇÃO QUE COLOCA A MASCARA NO CAMPO DE INPUT DO TIPO VALOR
            jQuery(function($){
                $("#valorEPIS").maskMoney({symbol:"R$",decimal:".",thousands:"."});
            });

            // FUNÇÃO QUE APAGA A MENSAGEM DE ALERTA QUANDO UMA AÇÃO É REALIZADA
            jQuery(function($){
              $("#alert-message").delay(2000).fadeOut("slow", function () { $(this).remove(); })
            });
          </script>

          <script type="text/javascript">
            setTimeout(function () {
               window.location.href= url; // // FUNÇÃO QUE REDIRECIONA PARA A PÁGINA INDICADA PELA VARIÁVEL URL
            },3000);
          </script>

<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
      <?php

      # AQUI FERIFICAMOS SE O BOTÃO SUBMIT FOI REALMENTE ACIONADO O GUARDAMOS CADA VALOR DETRO DAS SEGUINTES VARIÁVEIS
        if(isset($_POST['atualizar'])){

                $id = $_POST['idEPIS'];
                $descricao = $_POST['descricaoEPIS'];
                $marca = $_POST['marcaEPIS'];
                $unidade = $_POST['unidadeEPIS'];
                $valor = $_POST['valorEPIS'];
                $tipo = !empty($_POST['tipoEPIS']);
                $alugado = !empty($_POST['alugadoEPIS']);

                # ABAIXO SETAMOS OS VALORES RESGATADOS DOS CAMPOS INPUTS NA CLASSE EPIS USANDO O METHOD SET
                $epis->setId($id);
                $epis->setDescricao($descricao);
                $epis->setMarca($marca);
                $epis->setUnidade($unidade);
                $epis->setValor($valor);
                $epis->setTipo($tipo);
                $epis->setAlugado($alugado);

                # VERIFICA SE REALMENTE A FUNCTION UPDATE FOI CHAMADA E SE OS VALORES PASSADOS CORRESPONDE COM CADA TIPO
                if($epis->update($id)):
                    echo "<div id='alert-message' class='alert alert-success'>
                        <strong>Sucesso!</strong> EPI's Atualizado!
                        </div>";
                         
                         #abaixo, chamamos a função header() QUE POR 
                         #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
                         header('Refresh: 3; URL=consultaEPIS.php');
 
                endif;
        }
      ?>
      <?php
             # RESGATA O ID PASSADO PELO HREF RESGATADO PELO METHOD GET
              if(isset($_GET['acao']) && $_GET['acao'] == 'editar'):

                # GUARDA O ID DENTRO DA VARIÁVEL ID  
                $id = (int)$_GET['id'];

                # A VARIÁVEL RESULTADO GUARDA O VALOR DA VARIÁVEL ID QUE É ESTANCIADA PELA CLASSE EPIS CHAMANDO A FUNÇÃO FIND
                # DA CLASSE CRUD.PHP 
                $resultado = $epis->find($id);

              endif;

      ?>

        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Alterar EPI's</h5>
            </div>
            <div class="widget-content nopadding">

                <form action="" id="formEPIS" name="formEPIS" method="post" class="form-horizontal" >
                	
                    <input type="hidden" name="idEPIS" value="<?php echo $resultado->id ?>"/>
                    
                    <div class="control-group">
                        <label for="descricaoEPIS" class="control-label">Descricao *</label>
                        <div class="controls">
                            <input id="descricaoEPIS" value="<?php echo $resultado->descricao ?>" required="required" type="text" name="descricaoEPIS"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="marcaEPIS" class="control-label">Marca *</label>
                        <div class="controls">
                            <input id="marcaEPIS" type="text" value="<?php echo $resultado->marca ?>" required="required" name="marcaEPIS"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="unidadeEPIS" class="control-label">Unidade *</label>
                        <div class="controls">
                            <input id="unidadeEPIS" value="<?php echo $resultado->unidade ?>" type="number" required="required" name="unidadeEPIS"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="valorEPIS" class="control-label">Valor R$ *</label>
                        <div class="controls">
                            <input type="text" id="valorEPIS" value="<?php echo $resultado->valor ?>" required="required" maxlength="15" name="valorEPIS"/>
                        </div>
                    </div>
                                        
                    <div class="control-group">
                        <label for="tipoEPIS" class="control-label">Tipo </label>
                        <div class="controls">
                          <!-- VERIFICA SE O O CHECKBOX ESTÁ SELECIONADO OU NÃO PELO VALOR BOOLEAN -->
                          <?php
                            if($resultado->tipo != 0){
                              echo "<input type='checkbox' checked id='tipoEPIS' name='tipoEPIS'> Descartavel</input>";
                            }else{
                              echo "<input type='checkbox' id='tipoEPIS' name='tipoEPIS'> Descartavel</input>";
                            }
                          ?>
                          <!-- VERIFICA SE O O CHECKBOX ESTÁ SELECIONADO OU NÃO PELO VALOR BOOLEAN -->
                          <?php
                            if($resultado->alugado != 0){
                             echo "<input type='checkbox' checked id='alugadoEPIS' name='alugadoEPIS'> Alugado</input>";
                            }else{
                              echo "<input type='checkbox' id='alugadoEPIS' name='alugadoEPIS'> Alugado</input>";
                            }
                          ?>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" name="atualizar" class="btn btn-info"><i class="icon-ok icon-white"></i> Alterar</button>
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