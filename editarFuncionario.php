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
  # INSTANCIAMENTO DA CLASSE FUNCIONÁRIO
  $func = new Funcionario();
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

      # AQUI FERIFICAMOS SE O BOTÃO SUBMIT FOI REALMENTE ACIONADO O GUARDAMOS CADA VALOR DETRO DAS SEGUINTES VARIÁVEIS
        if(isset($_POST['atualizar'])){

                $id = $_POST['id'];
                $nome = $_POST['nomeFuncionario'];
                $email = $_POST['emailFuncionario'];
                $cpf = $_POST['cpfFuncionario'];
                $telefone = $_POST['telefone'];
                $celular = $_POST['celular'];

                # ABAIXO SETAMOS OS VALORES RESGATADOS DOS CAMPOS INPUTS NA CLASSE FUNCIONÁRIO USANDO O METHOD SET
                $func->setId($id);
                $func->setNome($nome);
                $func->setEmail($email);
                $func->setCpf($cpf);
                $func->setTelefone($telefone);
                $func->setCelular($celular);

                # VERIFICA SE REALMENTE A FUNCTION UPDATE FOI CHAMADA E SE OS VALORES PASSADOS CORRESPONDE COM CADA TIPO
                if($func->update($id)):
                    echo "<div id='alert-message' class='alert alert-success'>
                        <strong>Sucesso!</strong> Funcionário Atualizado!
                        </div>";
                         
                         #abaixo, chamamos a função header() QUE POR 
                         #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
                         header('Refresh: 3; URL=consultaFuncionario.php');
 
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
                $resultado = $func->find($id);

              endif;

      ?>

        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Atualizar Funcionário</h5>
            </div>
            <div class="widget-content nopadding">

                <form action="" id="formFuncionario" method="post" class="form-horizontal" >

                  <input type="hidden" name="id" value="<?php echo $resultado->id ?>"/>

                    <div class="control-group">
                        <label for="nomeFuncionario" class="control-label">Nome *</label>
                        <div class="controls">
                            <input id="nomeFuncionario" value="<?php echo $resultado->nome; ?>"
                            required="required" type="text" name="nomeFuncionario"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="emailFuncionario" class="control-label">E-mail *</label>
                        <div class="controls">
                            <input id="emailFuncionario" value="<?php echo $resultado->email; ?>"
                            type="email" required="required" name="emailFuncionario"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cpfFuncionario" class="control-label">CPF *</label>
                        <div class="controls">
                            <input id="cpfFuncionario" value="<?php echo $resultado->cpf; ?>"
                            type="text" required="required" name="cpfFuncionario"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="telefone" class="control-label">Telefone Fixo *</label>
                        <div class="controls">
                            <input id="telefone" value="<?php echo $resultado->telefone; ?>"
                            type="text" required="required" name="telefone"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label">Celular *</label>
                        <div class="controls">
                            <input id="celular" value="<?php echo $resultado->celular; ?>"
                            type="text" required="required" name="celular"/>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" name="atualizar" class="btn btn-info"><i class="icon-ok icon-white"></i> Alterar</button>
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