


         <div id="apenas_visualizar">

                  <div class="form-row">
                    <div class="form-group col-md-2">
                      <label >Primeiro Nome </label>
                      <input id="input_edit_nome" type="text" class="form-control" required="" placeholder="Ex: Rafael" name="nome" value="<?php echo $nome?>" disabled>
                    </div>
                    <div class="form-group col-md-6">
                      <label >Sobrenome</label>

                      <input id="input_edit_sobrenome" value="<?php echo($sobrenome)?> "type="text" class="form-control" required="" placeholder="Ex: da Silva" name="sobrenome" disabled>
                 
                    </div>
                  </div>

                  <div class="form-row">
                    <div class="form-group col-md-4">
                        <label >Data de nascimento</label>
                        <input type="date" id="input_edit_data_nascimento" class="form-control" placeholder="insira a quantidade de itens" required="" name="data_nascimento" value="<?php echo ($data_nascimento)?>" disabled>
                    </div>
                 

                    <div class="form-group col-md-4">
                          <label >E-mail (usuário)</label>
                          <input type="email" id="input_edit_data_e_mail"  value="<?php echo ($e_mail)?>" class="form-control" placeholder="exemplo@email.com" required=""name="e_mail" disabled>
                    </div>

                        
                          <input type="hidden"  value="<?php echo ($e_mail)?>" class="form-control" placeholder="exemplo@email.com" required=""name="e_mail_confere">
                   

                      <div class="form-group col-md-4">
                          <label >Senha</label>
                          <input type="password" id="input_edit_data_senha" value="<?php echo ($senha)?>" class="form-control" placeholder="digite uma senha" required="" name="senha" disabled>
                    </div>


                  </div>

                  <div class="form-row">
                      <div class="form-group col-md-4">
                          <label >Telefone</label>
                          <input type="" id="input_edit_telefone" class="form-control" placeholder="Telefone do usuário" value="<?php echo ($telefone)?>" required="" name="telefone" disabled>
                      </div>
                   

                      <div class="form-group col-md-4">
                            <label >Tipo de usuário</label>
                             <select  class="form-control" required="" id="tipo_usu_edit_select"  onchange="tipo_usuario_select_edit_js()" name="tipo_usuario" disabled>
                         
                              <option value="<?php echo $tipo_usuario?>" ><?php echo ($tipo_usuario)?></option>
                              <option value="Aluno">Aluno</option>
                              <option value="Denstista">Dentista</option>
                              <option value="Auxiliar">Auxiliar</option>
                              <option value="Outro">Outro</option>

                            </select>
                      </div> 
                                   <div class="form-group col-md-4" id="entrada_edit">
                                    <label> Adicional </label>
                                    <input  value="<?php echo ($adicional_usuario) ?>" class="form-control" placeholder=""  name="adicional_usuario" disabled>
                                   </div> 

                                    <div id="aluno_in_edit" class="form-group col-md-4">
                                          <label> Matricula </label>
                                          <input id="input_edit_add_aluno"  class="form-control" placeholder=""  name="adicional_usuario" disabled>
                                    </div>


                                    <div id="dentista_in_edit" class="form-group col-md-4">
                                          <label> N° CRO </label>
                                          <input  id="input_edit_add_cro"  class="form-control" placeholder="" name="adicional_usuario" disabled>
                                    </div>


                                    <div id="auxiliar_in_edit" class="form-group col-md-4">
                                          <label> Descreva a função </label>
                                          <input  id="input_edit_add_funcao" class="form-control" placeholder="" name="adicional_usuario" disabled>
                                    </div>

                      </div>

                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label>Observações</label>
                            <input type="text" id="input_edit_observacoes" value="<?php echo ($observacoes) ?>" class="form-control" name="observacoes" disabled>
                          </div>
                        </div>


                        <div class="form-group" id="checked_on">
                          <div class="form-check">
                            <input class="form-check-input" id="input_edit_nivel_acesso" type="checkbox" value="administrador" name="nivel_acesso" checked disabled>
                            <label class="form-check-label" for="gridCheck">
                              Tornar um administrador
                            </label>
                          </div>
                        </div>

                  <div class="form-row" id="cadastrante_edit_usu">
                    <div class="form-group col-md-2">
                      <label > Cadastrado por </label>
                      <input id="input_edit_cadastrante" type="" class="form-control" value="<?php echo ($cadastrante) ?>" disabled>
                    </div>
                  </div>       
                 <!-- Campos ocultos -->
                 <input type="hidden" value="<?php echo ($nivel_acesso) ?>" name="">
                 <input type="hidden" name="cadastrante" value="<?=$_SESSION['id']?> - <?=$_SESSION['nome_entrada']?>" > 
                 <input type="hidden" value="<?php echo ($id_usu_edit) ?>" name="id_usu_edit">
    </div>
<hr>

  <!-- SCRIPT QUE RETORNA A MARCAÇÃO DO ADMNISTRADOR -->
 <?php
       if ($nivel_acesso == "administrador")  { ?>
           <script type="text/javascript">
             //$("#checked_on").show();
             //$("#checked_off").hide();
             $('#input_edit_nivel_acesso').prop('checked', true);
           /* window.onload = function()
            {
                document.getElementById("meuElemento").click();
            }*/  //Este código clica automaticamente em um botão         
           </script>

     <?php }   if ($nivel_acesso != "administrador")  { ?>
             <script type="text/javascript">
              $('#input_edit_nivel_acesso').prop('checked', false);

             //$("#checked_on").hide();
             //$("#checked_off").show();
           </script>    
    <?php } ?>


        



   








