<?php
  //Ativa o Buffer que armazena o conteúdo principal da página
  ob_start();
?>

        <script>
            jQuery(function($){
                $("#telefone").mask("(99) 9999-9999");
            });
            jQuery(function($){
                $("#celular").mask("(99) 99999-9999");
            });
            jQuery(function($){
                $("#cpf").mask("999.999.999-99");
            });
            jQuery(function($){
                $("#cep").mask("99.999-999");
            });
            jQuery(function($){
                $("#cnpj").mask("99.999.999/9999-99");
            });
            jQuery(function($){
                $("#telefoneJuridico").mask("(99) 9999-9999");
            });
            jQuery(function($){
                $("#celularJuridico").mask("(99) 99999-9999");
            });
            jQuery(function($){
                $("#cepJuridico").mask("99.999-999");
            });

            $(document).ready(function(){

            var input = '<label><input type="text" name="telefone[]" /> <a href="#" class="remove">x</a></label>';

            $("input[name='add']").click(function( e ){
                $('#inputs_adicionais').append( input );
            });

            $('#inputs_adicionais').delegate('a','click',function( e ){
                e.preventDefault();
                $( this ).parent('label').remove();
            });

        });
          </script>     

          <script>
                $(document).ready(function(){

            var input = '<label><input type="text" name="telefone[]" /> <a href="#" class="remove">x</a></label>';

            $("input[name='acrescentar']").click(function( e ){
                $('#adicionar').append( input );
            });

            $('#adicionar').delegate('a','click',function( e ){
                e.preventDefault();
                $( this ).parent('label').remove();
            });

        });
          </script>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a> <a href="consultaPessoa.php" class="tip-bottom" title="Cliente">Clientes</a> <a href="novoPessoa.php" class="tip-bottom" title="Adicionar"><b>Adicionar</b></a> </a> </div>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
          

<div class="row-fluid" style="margin-top: 0">

    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro de Clientes</h5>
            </div>
            
            <div class="widget-content nopadding">

                <div class="tabbable">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Pessoa Física</a></li>
						<li><a href="#tab2" data-toggle="tab">Pessoa Juridica</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab1">
							<form action="#" id="formPessoa" name="PessoaFisica" method="post" class="form-horizontal" >
                    
                    <div class="control-group">
                        <label for="nomePessoa" class="control-label">Nome *</label>
                        <div class="controls">
                            <input id="nomePessoa" required="required" type="text" name="nomePessoa"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="cpf" class="control-label">CPF *</label>
                        <div class="controls">
                            <input id="cpf" required="required" type="text" name="cpf"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telefone" class="control-label">Telefone *</label>
                        <div class="controls">
                            
                            <input id="telefone" required="required" type="text" name="telefone"/>
                            <input class="btn" name="add" style="width:70px;" value="Adicionar" />
                            <div id="inputs_adicionais"></div>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="celular" class="control-label">Celular *</label>
                        <div class="controls">
                            <input id="celular" required="required" type="text" name="celular"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="email" class="control-label">Email *</label>
                        <div class="controls">
                            <input id="email" required="required" type="text" name="email"/>
                        </div>
                    </div>
                    
                    <div class="control-group" class="control-label">
                        <label for="cep" class="control-label">CEP *</label>
                        <div class="controls">
                            <input id="cep" type="text" required="required" name="cep"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="logradouro" class="control-label">Logradouro *</label>
                        <div class="controls">
                            <input id="Logradouro" required="required" type="text" name="Logradouro"/>
                        </div>
                    </div>
                                
                    <div class="control-group" class="control-label">
                        <label for="complemento" class="control-label">Complemento *</label>
                        <div class="controls">
                            <input id="complemento" required="required" type="text" name="complemento"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="numero" class="control-label">Número *</label>
                        <div class="controls">
                            <input id="numero" type="text" required="required" name="numero"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="bairro" class="control-label">Bairro *</label>
                        <div class="controls">
                            <input id="bairro" required="required" type="text" name="bairro"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidade" class="control-label">Cidade *</label>
                        <div class="controls">
                            <input id="cidade" required="required" type="text" name="cidade"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="uf" class="control-label">UF *</label>
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

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="consultaPessoa.php" id="" class="btn">
                                    <i class="icon-arrow-left"></i> Voltar
                                </a>
                            </div>
                        </div>
                    </div>
                </form> <!-- FIM DO FORMULÁRIO PESSOA FÍSICA -->
						</div> <!-- FIM DA DIV PESSOA FÍSICA -->
                        
						<div class="tab-pane fade" id="tab2">
							
                            <form action="" id="formPessoaJuridica" name="PessoaJuridica" method="post" class="form-horizontal" >
                    
                    <div class="control-group">
                        <label for="nomeRazao" class="control-label">Nome ou Razão Social *</label>
                        <div class="controls">
                            <input id="nomeRazao" required="required" type="text" name="nomeRazao"/>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="cnpj" class="control-label">CNPJ *</label>
                        <div class="controls">
                            <input id="cnpj" required="required" type="text" name="cnpj"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="inscricaoMunicipal" class="control-label">Inscrição Municial *</label>
                        <div class="controls">
                            <input id="inscricaoMunicipal" required="required" type="text" name="inscricaoMunicipal"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="telefoneJuridico" class="control-label">Telefone *</label>
                        <div class="controls">
                            <input id="telefoneJuridico" required="required" type="text" name="telefoneJuridico"/>
                            <input class="btn" name="acrescentar" style="width:70px;" value="Adicionar" />
                            <div id="adicionar"></div>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="celularJuridico" class="control-label">Celular *</label>
                        <div class="controls">
                            <input id="celularJuridico" type="text" required="required" name="celularJuridico"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cepJuridico" class="control-label">CEP *</label>
                        <div class="controls">
                            <input id="cepJuridico" required="required" type="text" name="cepJuridico"/>
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="logradouroJuridico" class="control-label">Logradouro *</label>
                        <div class="controls">
                            <input id="logradouroJuridico" type="text" required="required" name="logradouroJuridico"/>
                        </div>
                    </div>
                                
                    <div class="control-group">
                        <label for="complementoJuridica" class="control-label">Complemento *</label>
                        <div class="controls">
                            <input id="complementoJuridica" type="text" required="required" name="complementoJuridica"/>
                        </div>
                    </div>
                                
                    <div class="control-group">
                        <label for="numeroJuridica" class="control-label">Número *</label>
                        <div class="controls">
                            <input id="numeroJuridica" required="required" type="text" name="numeroJuridica"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="bairroJuridico" class="control-label">Bairro *</label>
                        <div class="controls">
                            <input id="bairroJuridico" required="required" type="text" name="bairroJuridico"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="cidadeJuridico" class="control-label">Cidade *</label>
                        <div class="controls">
                            <input id="cidadeJuridico" required="required" type="text" name="cidadeJuridico"/>
                        </div>
                    </div>

                    <div class="control-group" class="control-label">
                        <label for="uf" class="control-label">UF *</label>
                        <div class="controls">
                            <select id="ufJuridico">
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
                                
                    <div class="control-group" class="control-label">
                        <label for="emailJuridico" class="control-label">E-mail *</label>
                        <div class="controls">
                            <input id="emailJuridico" required="required" type="text" name="emailJuridico"/>
                        </div>
                    </div>
                                
                    <div class="control-group" class="control-label">
                        <label for="responsavelJuridico" class="control-label">Responsável *</label>
                        <div class="controls">
                            <input id="responsavelJuridico" required="required" type="text" name="responsavelJuridico"/>
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="consultaPessoa.php" id="" class="btn">
                                    <i class="icon-arrow-left"></i> Voltar
                                </a>
                            </div>
                        </div>
                    </div>
                </form> <!-- FIM DO FORMULÁRIO PESSOA JURIDICA -->
                            
						</div>

						</div>
					</div>
				 </div>
                                                    
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>
</div>

<script src="_jquery/script.js"></script>


<?php
  // pagemaincontent recebe o conteudo do buffer
  $pagemaincontent = ob_get_contents(); 

  // Descarta o conteudo do Buffer
  ob_end_clean(); 

  /* Atribuição das Variáveis da página principal
  * Lembrando que podem ser colocadas novas variáveis,
  * conforme necessidade */
  $pagetitle = "novoPessoa"; 

  //Include com o Template
  include("master.php");
?>