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
        <a href="consultaFuncionario.php" class="tip-bottom" title="Funcionário">Funcionário</a> <a href="novoFuncionario.php" class="tip-bottom" title="Adicionar"><b>Adicionar</b></a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          
                                                
<script type="text/javascript">
  jQuery(function($){
    $('#cpfFuncionario').mask("999.999.999-99");
  });
  jQuery(function($){
    $('#telefone').mask("(99) 9999-9999");
  });
  jQuery(function($){
    $('#celular').mask("(99) 99999-9999");
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

              $func = new Funcionario();

              if(isset($_POST['cadastrar'])):

                $nome = $_POST['nomeFuncionario'];
                $email = $_POST['emailFuncionario'];
                $cpf = $_POST['cpfFuncionario'];
                $telefone = $_POST['telefone'];
                $celular = $_POST['celular'];

                $func->setNome($nome);
                $func->setEmail($email);
                $func->setCpf($cpf);
                $func->setTelefone($telefone);
                $func->setCelular($celular);

                #inserindo dados no banco
                if($func->insert()):
                  echo "<div id='alert-message' class='alert alert-success'>
                        <strong>Sucesso!</strong> Funcionário Cadastrado!
                        </div>";

                        #abaixo, chamamos a função header() 
                        #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
                        header('Refresh: 3; URL=consultaFuncionario.php');
                endif;

              endif;
            ?>

        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro de Funcionário</h5>
            </div>
            <div class="widget-content nopadding">

                <form action="" id="formFuncionario" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="nomeFuncionario" class="control-label">Nome *</label>
                        <div class="controls">
                            <input id="nomeFuncionario" required="required" type="text" name="nomeFuncionario"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="emailFuncionario" class="control-label">E-mail *</label>
                        <div class="controls">
                            <input id="emailFuncionario" type="email" required="required" name="emailFuncionario"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cpfFuncionario" class="control-label">CPF *</label>
                        <div class="controls">
                            <input id="cpfFuncionario" type="text" required="required" name="cpfFuncionario"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="telefone" class="control-label">Telefone Fixo *</label>
                        <div class="controls">
                            <input id="telefone" type="text" required="required" name="telefone"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label">Celular *</label>
                        <div class="controls">
                            <input id="celular" type="text" required="required" name="celular"/>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" name="cadastrar" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="consultaFuncionario.php" id="" class="btn">
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
  $pagetitle = "Titulo desta página"; 

  //Include com o Template
  include("master.php");
?>