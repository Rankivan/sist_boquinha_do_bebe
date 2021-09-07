<!--
  <form method="">
    <button class="btn-primary" type="" name="<?php// echo $menu_2; ?>">pesquisar</button>
    <input name="" aria-label="Search">
  </form>  -->


          <!--_________________MSG cadastro ________________-->

          <div align="center">

          <h5> <?php if ($msg_usu_erro==2) { ?>
            <script type="text/javascript">

              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_usuarios").modal();
              });
            </script>

            <?php  } ?></h5>

          </div>

          <div align="center">

            <h5> <?php if ($msg_usu_erro==1) { ?>
              <script type="text/javascript">

              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_usuarios").modal();
              });
            </script>

            <?php  } ?></h5>

          </div>


          <div align="center">

            <h5> <?php if ($msg_usu_sucess==1) { ?>
              <script type="text/javascript">

              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_usuarios").modal();
              });
            </script>
            <?php  } ?></h5>

          </div>

          <!--_____________Mensagens de edição_________________-->


           <div align="center">

            <h5> <?php if ($msg_edita_usu_sucess==1) { ?>
              <script type="text/javascript">

              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_usuarios").modal();
              });
            </script>
            <?php  } ?></h5>

          </div>


          <div align="center">

            <h5> <?php if ($msg_edita_usu_erro==1) { ?>
              <script type="text/javascript">

              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_usuarios").modal();
              });
            </script>
            <?php  } ?></h5>

          </div>

          <!--_____________Mensagens de verificação_________________-->

          <div align="center">

            <h5> <?php if ($msg_edita_usu_verifi_erro==1) { ?>
              <script type="text/javascript">

              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_usuarios").modal();
              });
            </script>
            <?php  } ?></h5>

          </div>

          <!--_____________Mensagens de exclusão_________________-->

          <div align="center">

            <h5> <?php if ($msg_exclui_usu_sucess==1) { ?>
              <script type="text/javascript">

              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_usuarios").modal();
              });
            </script>
            <?php  } ?></h5>

          </div>

          <div align="center">

            <h5> <?php if ($msg_exclui_usu_erro==1) { ?>
              <script type="text/javascript">

              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_usuarios").modal();
              });
            </script>
            <?php  } ?></h5>

          </div>

         <!-- MODAL REFERENTE MENSAGENS DE VALIDAÇÃO DO CADASTRO -->

       <div class="modal fade" id="msg_usuarios" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Resultado</h5>
                
              </div>
              <div class="modal-body">

                <!--_________________MSG cadastro ________________-->

              <h5>
                <?php if ($msg_usu_erro==1){
                   echo '<font color ="#9e0000"> Erro ao cadastrar usuário, banco de dados não encontrado! </font><br>';
                }  ?> 
              </h5>
              <h5>
                <?php if ($msg_usu_erro==2){
                   echo '<font color ="#9e0000"> Erro, e-mail deste usuário já está cadastrado! </font><br>';
                }  ?> 
              </h5>
              <h5>
                <?php if ($msg_usu_sucess==1){
                   echo '<font color ="#0e7500">  Usuário cadastrado com sucesso! </font><br>';
                }  ?> 
              </h5>

               <!--_____________Mensagens de edição_________________-->

              <h5>
                <?php if ($msg_edita_usu_sucess==1){
                   echo '<font color ="#0e7500"> Usuário editado com sucesso! </font><br>';
                }  ?> 
              </h5>
              <h5>
                <?php if ($msg_edita_usu_erro==1){
                   echo '<font color ="#9e0000"> Erro, usuário não editado! </font><br>';
                }  ?> 
              </h5>

              <h5>
                <?php if ($msg_edita_usu_verifi_erro==1){
                   echo '<font color ="#9e0000"> Erro, email já cadastrado em outro usuário! </font><br>';
                }  ?> 
              </h5>

              <!--_____________Mensagens de exclusão_________________-->

              <h5>
                <?php if ($msg_exclui_usu_sucess==1){
                   echo '<font color ="#0e7500"> Usuário excluído com sucesso! </font><br>';
                }  ?> 
              </h5>

              </div>
              <div class="modal-footer">
                <form method="post" action="../../back_end/inserir_bd/usuarios/fecha_modal_msg_usu.php">
                <button type="submit" class="btn btn-secondary">Fechar</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!--MENSAGEM EXCLUIR USUÁRIOS-->

        <div class="modal fade" id="modal_confirma_excluir_usuarios" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel"> Excluir registro  <img src="../../imagens/conteudo/anexar.png" style="width: 40px ; height: 40px "></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <!--ARRUMAR O BOTÃO POST-->
              <div class="modal-body" >
                <h5>Deseja realmente excluir o registro N° <y style="color: red"> <?php echo $_GET['id'];  ?></y> </h5>
              </div>
              <div class="modal-footer">

                <button  class="btn btn-secondary" data-dismiss="modal">Fechar <img src="../../imagens/conteudo/fechar_janela.png" style="width: 30px; height: 30px"></button>
                <form method="post" action="../../back_end/inserir_bd/usuarios/excluir_usuarios.php">
                  <input type="hidden" name="id_excluir" value="<?php echo $_GET['id'] ?>">
                  <button type="submit"  class="btn btn-danger">Excluir <img src="../../imagens/conteudo/excluir_2.png" style="width: 30px; height: 30px">
                  </button>
                </form>
              </div> 
            </div>
          </div>
        </div>




