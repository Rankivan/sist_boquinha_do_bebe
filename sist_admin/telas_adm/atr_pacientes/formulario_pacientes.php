              


                   <div class="form-row">
                    <div class="form-group col-md-2">
                      <label >Nome do paciente </label>
                      <input name="nome_pac" type="text" class="form-control"  placeholder="Ex: Rafael" required="">
                    </div>
                    <div class="form-group col-md-6">
                      <label >Sobrenome do paciente</label>

                      <input name="sobrenome_pac" type="text" class="form-control"  placeholder="Ex: da Silva"required="">
                 
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-4">
                    
                        <label >Data de nascimento</label>
                        <input name="data_nascimento_pac" type="date" class="form-control" placeholder="insira a quantidade de itens" required="">
                      
                    </div>


                    <div class="form-group col-sm-2">
                          <label>Sexo</label>
                          <select name="sexo_pac"  class="form-control" >
                            <option value=""> </option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                           >
                          </select>
                    </div>


                 

                   


                    <div class="form-group col-md-6">
                    
                        <label >N° Cartão do SUS</label>
                        <input name="numero_sus_pac" type="text" class="form-control" placeholder="insira o número" required="">
                      
                    </div>

                </div> <hr>



                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label >Cidade</label>
                      <input value="Gurupi TO" name="cidade_pac" type="text" class="form-control"required="">
                    </div>

                    <div class="form-group col-md-6">
                      <label >Endereço</label>
                      <input name="endereco_pac" type="text" class="form-control"required="">
                    </div>

                    <div class="form-group col-md-2">
                      <label >Bairro</label>
                      <input name="bairro_pac" type="text" class="form-control"required="">
                    </div>

                      <div class="form-group col-md-2"><!--MODIFICAR-->
                      <label >Posto de atendimento</label>
                      <select name="nome_posto_pac" type="text" class="form-control"required=""> 

                        <option value=""></option>

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
                      <input name="nome_responsavel_pac" type="text" class="form-control"required="">
                    </div>

                    <div class="form-group col-md-4">
                      <label >Telefone do responsável</label>
                      <input name="telefone_responsavel_pac" type="text" class="form-control"required="">
                    </div>


                    <div class="form-group col-md-4">
                      <label > CPF do responsável</label>
                      <input name="cpf_responsavel_pac"type="text" class="form-control"required="">
                    </div>

                 </div>

                 

                 <!-- ocultos-->
                 <input type="hidden" value="<?=$_SESSION['id']?> - <?=$_SESSION['nome_entrada']?>" name="cadastrante_pac"required="">
