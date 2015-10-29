<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<?php
  function __autoload($class_name){
    require_once 'conexao/'.$class_name.'.php';
  }
?>

<?php
  $acesso = new Acesso();
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
        <a href="consultaAcesso.php" class="tip-bottom" title="Controle de Acesso">Controle de Acesso</a> <a href="novoAcesso.php" class="tip-bottom" title="Adicionar"><b>Adicionar</b></a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          
                                                
<script type="text/javascript">
            setTimeout(function () {
               window.location.href= url; // the redirect goes here
            },3000);
</script>

<script type="text/javascript">
  jQuery(function($){
    $("#alert-message").delay(2000).fadeOut("slow", function () { $(this).remove(); })
  });
</script>


<div class="row-fluid" style="margin-top: 0">

            <div class="span12">

              <?php

              if(isset($_POST['atualizar'])):

                $id = $_POST['id'];
                $nome  = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $repeteSenha = $_POST['repeteSenha'];
                $perfil = $_POST['perfil'];

                if($senha === $repeteSenha){

                  $cripitoSenha = sha1($senha);
                  $cripitoRepeteSenha = sha1($repeteSenha);

                  $acesso->setId($id);
                  $acesso->setNome($nome);
                  $acesso->setEmail($email);
                  $acesso->setSenha($cripitoSenha);
                  $acesso->setRepeteSenha($cripitoRepeteSenha);
                  $acesso->setPerfil($perfil);

                  #update dos dados no banco
                  if($acesso->update($id)):
                    echo "<div id='alert-message' class='alert alert-success'>
                          <strong>Sucesso!</strong> Usuário Atualizado!
                          </div>";

                          #abaixo, chamamos a função header() 
                          #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
                          header('Refresh: 3; URL=consultaAcesso.php');
                  endif;

              }else{
                echo "<div id='alert-message' class='alert alert-danger'>
                        <strong>Erro!</strong> Senhas Divergentes!
                        </div>";
              }

              endif;
            ?>

            <?php
             # RESGATA O ID PASSADO PELO HREF RESGATADO PELO METHOD GET
              if(isset($_GET['acao']) && $_GET['acao'] == 'editar'):

                # GUARDA O ID DENTRO DA VARIÁVEL ID  
                $id = (int)$_GET['id'];

                # A VARIÁVEL RESULTADO GUARDA O VALOR DA VARIÁVEL ID QUE É ESTANCIADA PELA CLASSE EPIS CHAMANDO A FUNÇÃO FIND
                # DA CLASSE CRUD.PHP 
                $resultado = $acesso->find($id);

              endif;
            ?>

                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon">
                            <i class="icon-user"></i>
                        </span>
                        <h5>Cadastro de Acesso</h5>
                    </div>
                    <div class="widget-content nopadding">

                        <form action="" id="formAcesso" method="post" class="form-horizontal" >

                          <input type="hidden" name="id" value="<?php echo $resultado->id ?>"/>

                            <div class="control-group">
                                <label for="nome" class="control-label">Nome *</label>
                                <div class="controls">
                                    <input id="nome" type="text" value="<?php echo $resultado->nome ?>" required="required" name="nome"/>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="email" class="control-label">E-mail *</label>
                                <div class="controls">
                                    <input id="email" type="email" value="<?php echo $resultado->email ?>" required="required" name="email"/>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="senha" class="control-label">Senha *</label>
                                <div class="controls">
                                    <input id="senha" type="password" required="required" name="senha" />
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="repeteSenha" class="control-label">Confirme Senha *</label>
                                <div class="controls">
                                    <input id="repeteSenha" required="required" type="password" name="repeteSenha" />
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <label for="perfil" class="control-label">Perfil *</label>
                                <div class="controls">
                                  <?php if($resultado->perfil == "Usuario"){ ?>
                                      <input type="radio" name="perfil" value="Usuario" required="required" checked /> Usuário
                                      <input type="radio" name="perfil" value="Administrador" required="required" /> Administrador
                                    <?php }else{ ?>
                                      <input type="radio" name="perfil" value="Usuario" required="required" /> Usuário
                                      <input type="radio" name="perfil" value="Administrador" required="required" checked /> Administrador
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="span12">
                                    <div class="span6 offset3">
                                        <button type="submit" name="atualizar" class="btn btn-info"><i class="icon-ok icon-white"></i> Adicionar</button>
                                        <a href="consultaAcesso.php" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
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
  $pagetitle = "novoAcesso"; 

  //Include com o Template
  include("master.php");
?>