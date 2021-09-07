              


                   <div class="form-row">
                    <div class="form-group col-md-6">
                      <label >Nome do paciente </label>
                      <input id="nome_pac_editar" name="nome_pac_edit" type="text" class="form-control"  placeholder="Ex: Rafael" required=""  value="<?php echo $nome_pac ?>" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label >Sobrenome do paciente</label>

                      <input id="sobrenome_pac_editar" name="sobrenome_pac_edit" type="text" class="form-control"  placeholder="Ex: da Silva"required="" value="<?php echo $sobrenome_pac ?>" disabled>
                 
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-4">
                    
                        <label >Data de nascimento</label>
                        <input id="data_nascimento_pac_editar" name="data_nascimento_pac_edit" type="date" class="form-control" placeholder="insira a quantidade de itens" required="" value="<?php echo $data_nascimento_pac ?>"disabled>
                      
                    </div>


                    <div class="form-group col-sm-2">
                          <label>Sexo</label>
                          <select id="sexo_pac_editar" name="sexo_pac_edit"  class="form-control"   disabled>
                            <option value="<?php echo $sexo_pac ?>"><?php echo $sexo_pac ?> </option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                           >
                          </select>
                    </div>


                 

                   


                    <div class="form-group col-md-6">
                    
                        <label >N° Cartão do SUS</label>
                        <input id="numero_sus_pac_editar" name="numero_sus_pac_edit" type="text" class="form-control" placeholder="insira o número" required="" value="<?php echo $numero_sus_pac ?>"disabled>
                      
                    </div>

                </div> <hr>



                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label >Cidade</label>
                      <input id="cidade_pac_editar" value="Gurupi TO" name="cidade_pac_edit" type="text" class="form-control"required="" value="<?php echo $cidade_pac ?>"disabled>
                    </div>

                    <div class="form-group col-md-6">
                      <label >Endereço</label>
                      <input id="endereco_pac_editar" name="endereco_pac_edit" type="text" class="form-control"required="" value="<?php echo $endereco_pac ?>"disabled>
                    </div>

                    <div class="form-group col-md-2">
                      <label >Bairro</label>
                      <input id="bairro_pac_editar" name="bairro_pac_edit" type="text" class="form-control"required="" value="<?php echo $bairro_pac ?>"disabled>
                    </div>

                      <div class="form-group col-md-2"><!--MODIFICAR-->
                      <label >Posto de atendimento</label>
                      <select id="nome_posto_pac_editar" name="nome_posto_pac_edit" type="text" class="form-control"required="" disabled> 

                        <option value="<?php echo $nome_posto_pac ?>" value=""><?php echo $nome_posto_pac ?></option>

                         <?php

                               $data_base_postos = new db ();  //Esta é a estrutura para recuperar qualquer dado do Banco de dados
                               $link_postos = $data_base_postos->conecta_mysqli();

                               $consulta_postos = $pdo->query("SELECT * FROM posto_atendimento");//Seleciona o BD bairros
                               $dados_postos = $consulta_postos->fetchAll(PDO::FETCH_ASSOC);


                               for ($i=1; $i < count($dados_postos); $i++){
                                  foreach ($dados_postos[$i] as $key => $value) {
                                   //Comando for e foreach fornece da om loop de leitura em todos os dados do banco de dados.
                               }

                               $nome_posto = $dados_postos[$i]['nome_posto'];

                               ?>
                               <!-- traz o echo dos bairros e após o option  -->
                               <option value="<?php echo ($nome_posto)?>"> <?php echo ($nome_posto) ?> </option>

                           <?php } ?>




                      </select>
                    </div>

                   </div>


                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label >Nome do responsável</label>
                      <input value="<?php echo ($nome_responsavel_pac)?>" id="nome_responsavel_pac_editar" name="nome_responsavel_pac_edit" type="text" class="form-control"required=""disabled>
                    </div>

                    <div class="form-group col-md-4">
                      <label >Telefone do responsável</label>
                      <input value="<?php echo ($telefone_responsavel_pac)?>" id="telefone_responsavel_pac_editar" name="telefone_responsavel_pac_edit" type="text" class="form-control"required=""disabled>
                    </div>


                    <div class="form-group col-md-4">
                      <label > CPF do responsável</label>
                      <input value="<?php echo ($cpf_responsavel_pac)?>" id="cpf_responsavel_pac_editar" name="cpf_responsavel_pac_edit"type="text" class="form-control"required=""disabled>
                    </div>

                 </div>

                 <input type="hidden" name="id_pac_edit" value="<?php echo ($id_pac)?>">

                 <!-- ocultos-->
                 <input type="hidden" value="<?=$_SESSION['id']?> - <?=$_SESSION['nome_entrada']?>" name="cadastrante_pac_edit"required="">
