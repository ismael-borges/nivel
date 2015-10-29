        <?php
          //Ativa o Buffer que armazena o conteúdo principal da página
          ob_start();
        ?>

        <div id="content">
          <div id="content-header">
            <div id="breadcrumb"> <a href="dashboard.php" title="Dashboard" class="tip-bottom"><i class="icon-home"></i> Dashboard</a>
                <a href="consultaFornecedor.php" class="tip-bottom" title="Fornecedor">Fornecedor</a> </a> </div>
          </div>
          <div class="container-fluid">
            <div class="row-fluid">
              <div class="span12">


        <div class="row-fluid" style="margin-top: 0">

          <!-- INICIO DO BOX PARA CONSULTAR PESSOAS -->

            <div class="span12"> 
                <a href="novoFornecedor.php" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Fornecedor</a> 
                <br /><br />
                    <!-- Listar Fornecedores -->
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon">
                                <i class="icon-tags"></i>
                            </span>
                            <h5>Filtrar Fornecedores</h5>
                        </div>
        <div class="widget-content nopadding">
                

                <div class="span12" id="divFornecedores" style=" margin-left: 0">
                    <!--<ul class="nav nav-tabs">
                        <li class="active" id="tabDetalhes"><a href="#tab1" data-toggle="tab">Listar Fornecedores</a></li>
                    </ul> -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">

                            <div class="span12" id="divListFornecedores">
                                <form action="#" method="post" id="formFornecedores" novalidate="novalidate">
                                     <div class="span12" style="padding: 1%">
                          <div class="span4">
                              <input id="nomeFornecedor" class="span12" type="text" name="nomeFornecedor" placeholder="Nome ou Razão Social" value="">
                          </div>

                          <div class="span3">
                            <select>
                              <option selected>Selecione...</option>
                              <option>A-Z</option>
                              <option>Z-A</option>
                            </select>
                          </div>

                          <div class="span3">
                              <input id="cnpjFornecedor" class="span12" type="text" placeholder="CNPJ" name="cnpjFornecedor" value="">
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
</div>


                <div class="widget-box">
                <div class="widget-title">
                    <span class="icon">
                        <i class="icon-user"></i>
                    </span>
                    <h5>Fornecedor</h5>

                </div>

                <div class="widget-content nopadding">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>CPF/CNPJ</th>
                                <th>Telefone</th>
                                <th>Contato</th>
                                <th>Ação</th>
                                <!--th>#</th>
                                <th>Nome</th>
                                <th>CNPJ</th>
                                <th>I.E.</th>
                                <th>Endereço</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>UF</th>
                                <th>CEP</th>
                                <th>Telefone</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th>Contato</th-->
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $json = file_get_contents('json\fornecedor.json');
                            $lendo = json_decode($json, true);
                            foreach($lendo as $objeto){
                        ?>
                            <tr>
                                 <td><?php echo "{$objeto['nome']}"; ?></td>
                                 <td><?php echo "{$objeto['cnpj']}"; ?></td>
                                 <td><?php echo "{$objeto['fone']}"; ?></td>
                                 <td><?php echo "{$objeto['contato']}"; ?></td>
                                <!--td><?php echo "{$objeto['codigo']}"; ?></td>
                                <td><?php echo "{$objeto['nome']}"; ?></td>
                                <td><?php echo "{$objeto['cnpj']}"; ?></td>
                                <td><?php echo "{$objeto['inscrição estadual']}"; ?></td>
                                <td><?php echo "{$objeto['endereco']}"; ?></td>
                                <td><?php echo "{$objeto['bairro']}"; ?></td>
                                <td><?php echo "{$objeto['cidade']}"; ?></td>
                                <td><?php echo "{$objeto['uf']}"; ?></td>
                                <td><?php echo "{$objeto['cep']}"; ?></td>
                                <td><?php echo "{$objeto['fone']}"; ?></td>
                                <td><?php echo "{$objeto['celular']}"; ?></td>
                                <td><?php echo "{$objeto['email']}"; ?></td>
                                <td><?php echo "{$objeto['contato']}"; ?></td-->
                                <td>
                                    <a data-toggle="modal" data-target="#modal-editar" class="btn btn-info tip-top" title="Editar" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                                        <i class="icon-pencil icon-white"></i>
                                    </a>
                                
                                    <a data-toggle="modal" data-target="#modal-excluir" class="btn btn-danger tip-top" title="Excluir" data-path-hover="M 180,190 0,158 0,0 180,0 z">
                                        <i class="icon-remove icon-white"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
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
          $pagetitle = "consultaPessoa"; 

          //Include com o Template
          include("master.php");
        ?>