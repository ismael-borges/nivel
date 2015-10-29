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
        <a href="consultaAcesso.php" class="tip-bottom" title="Controle de Acesso">Controle de Acesso</a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">

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


<div class="row-fluid" style="margin-top: 0">

  <!-- PRIMEIRA PARTE DO BOX VISUALIZA CLIENTES -->
    
    <div class="span12">

      <?php
        # RESGATA O ID PASSADO PELO HREF RESGATADO PELO METHOD GET
        if(isset($_GET['acao']) && $_GET['acao'] == 'deletar'):
                # GUARDA O ID DENTRO DA VARIÁVEL ID  
                $id = (int)$_GET['id'];

                # VERIFICA SE A FUNÇÃO DELETE FOI REALMENTE ACIONADA CHAMADA PELA INSTANCIA DA CLASSE EPIS
                if($acesso->delete($id)):
                  echo "<div id='alert-message' class='alert alert-success'>
                        <strong>Sucesso!</strong> Usuário Deletado!
                        </div>";

                  #abaixo, chamamos a função header() 
                  #sua vez aponta para o endereço de onde ocorrerá o redirecionamento
                  header('Refresh: 5; URL=consultaAcesso.php');
                endif;

        endif;
      ?>
        
        <a href="novoAcesso.php" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Usuário</a>    

        <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-user"></i>
            </span>
            <h5>Controle de Acesso</h5>

        </div>

        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Perfil</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <?php foreach ($acesso->findAll() as $key => $value) { ?>

                <tbody>
                    <tr>
                        <td><?php echo $value->id; ?></td>
                        <td><?php echo $value->nome; ?></td>
                        <td><?php echo $value->email; ?></td>
                        <td><?php echo $value->perfil; ?></td>
                       <td>
                            <?php echo "<a href='editarAcesso.php?acao=editar&id=" . $value->id . "'class='btn btn-info tip-top' title='Editar'>
                                          <i class='icon-pencil icon-white'></i> </a>"; ?>
                              <?php echo "<a href='consultaAcesso.php?acao=deletar&id=" . $value->id . "'
                              onclick='return confirm(\"Deseja Excluir este Registro ?\")' class='btn btn-danger tip-top' title='Excluir'>
                                          <i class='icon-remove icon-white'></i> </a>"; ?>
                        </td>
                    </tr>
                </tbody>

                <?php } ?>

            </table>
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
  $pagetitle = "consultaAcesso"; 

  //Include com o Template
  include("master.php");
?>