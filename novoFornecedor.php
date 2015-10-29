<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="consultaFornecedor.php" class="tip-bottom" title="Pessoa">Fornecedor</a> <a href="novoFornecedor.php" class="tip-bottom" title="Adicionar"><b>Adicionar</b></a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          
                                                
                      <!--[if lt IE 9]><script language="javascript" type="text/javascript" src="http://localhost/mapos/js/dist/excanvas.min.js"></script><![endif]-->
          
          <script>
            jQuery(function($){
                $("#telefoneFornecedor").mask("(99) 9999-9999");
            });
              jQuery(function($){
                $("#cepFornecedor").mask("99.999-999");
            });
          </script>
        
<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro de Fornecedor</h5>
            </div>
            <div class="widget-content nopadding">

                <form action="#" id="formPessoa" method="post" class="form-horizontal" >
                    
                    <div class="control-group">
                        <label for="nomePessoa" class="control-label">Nome ou Razão Social *</label>
                        <div class="controls">
                            <input id="nomePessoa" required="required" type="text" name="nomePessoa"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="cpf_cnpj_Fornecedor" class="control-label">CPF/CNPJ *</label>
                        <div class="controls">
                            <input id="cpf_cnpj_Fornecedor" required="required" type="text" name="cpf_cnpj_Fornecedor"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="insMuni" class="control-label">Inscrição Municipal *</label>
                        <div class="controls">
                            <input id="insMuni" required="required" type="text" name="insMuni"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="telefoneFornecedor" class="control-label">Telefone *</label>
                        <div class="controls">
                            <input id="telefoneFornecedor" required="required" type="text" name="telefoneFornecedor"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="emailFornecedor" class="control-label">Email *</label>
                        <div class="controls">
                            <input id="emailFornecedor" required="required" type="text" name="emailFornecedor"/>
                        </div>
                    </div>
                    
                    <div class="control-group" class="control-label">
                        <label for="cepFornecedor" class="control-label">CEP *</label>
                        <div class="controls">
                            <input id="cepFornecedor" type="text" required="required" name="cepFornecedor"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="logradouroFornecedor" class="control-label">Logradouro *</label>
                        <div class="controls">
                            <input id="logradouroFornecedor" required="required" type="text" name="logradouroFornecedor"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="numeroFornecedor" class="control-label">Número *</label>
                        <div class="controls">
                            <input id="numeroFornecedor" type="text" required="required" name="numeroFornecedor"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="bairroFornecedor" class="control-label">Bairro *</label>
                        <div class="controls">
                            <input id="bairroFornecedor" required="required" type="text" name="bairroFornecedor"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidadeFornencedor" class="control-label">Cidade *</label>
                        <div class="controls">
                            <input id="cidadeFornencedor" required="required" type="text" name="cidadeFornencedor"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="ufFornecedor" class="control-label">UF *</label>
                        <div class="controls">
                            <select>
                                <option></option>
                                <option value="AC">AC</option>
                                <option value="AL">AL</option>
                                <option value="AP">AP</option>
                                <option value="AM">AM</option>
                                <option value="BA" selected>BA</option>
                                <option value="CE">CE</option>
                                <option value="DF">DF</option>
                                <option value="ES">ES</option>
                                <option value="GO">GO</option>
                                <option value="MA">MA</option>
                                <option value="MT">MT</option>
                                <option value="MS">MS</option>
                                <option value="MG">MG</option>
                                <option value="PR">PR</option>
                                <option value="PB">PB</option>
                                <option value="PA">PA</option>
                                <option value="PE">PE</option>
                                <option value="PI">PI</option>
                                <option value="RN">RN</option>
                                <option value="RS">RS</option>
                                <option value="RJ">RJ</option>
                                <option value="RO">RO</option>
                                <option value="RR">RR</option>
                                <option value="SC">SC</option>
                                <option value="SE">SE</option>
                                <option value="SP">SP</option>
                                <option value="TO">TO</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Usar display none para desaparecer div e display block para ela aparecer -->
                    <div class="control-group" class="control-label" style="display:block;">
                        <label for="avaliacaoFornecedor" class="control-label">Avaliação *</label>
                        <div class="controls">
                            <input id="avaliacaoFornecedor" required="required" type="text" name="avaliacaoFornecedor"/>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="consultaFornecedor.php" id="" class="btn">
                                    <i class="icon-arrow-left"></i> Voltar
                                </a>
                            </div>
                        </div>
                    </div>
                </form> <!-- FIM DO FORMULÁRIO -->
                
            </div>
        </div>
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
  $pagetitle = "novoFornecedor"; 

  //Include com o Template
  include("master.php");
?>