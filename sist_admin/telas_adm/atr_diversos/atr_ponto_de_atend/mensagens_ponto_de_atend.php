






<!--#####################################_____MODAL_____#################################-->

  <div class="modal fade" id="msg_posto" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Resultado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
   


          <?php 
             $msg_posto_erro = filter_input(INPUT_GET,'msg_posto_erro', FILTER_SANITIZE_NUMBER_INT);

           if ($msg_posto_erro==1) { ?>

            <h5 style="color:#bd0101"> Erro! Este posto já está cadastrado</h5>

          <?php }?> 

          <?php 
             $msg_posto_sucess = filter_input(INPUT_GET,'msg_posto_sucess', FILTER_SANITIZE_NUMBER_INT);

           if ($msg_posto_sucess==1) { ?>

            <h5 style="color:#00a733"> Posto cadastrado com sucesso! </h5>

          <?php }?> 






          <!--##################################_EDIÇÃO_###############################-->

           <?php 
             $msg_posto_sucess_edit = filter_input(INPUT_GET,'msg_posto_sucess_edit', FILTER_SANITIZE_NUMBER_INT);

           if ($msg_posto_sucess_edit==1) { ?>

            <h5 style="color:#017c4f"> Sucesso ao atualizar os dados e inserir novo bairro! </h5>

          <?php }?> 

          <?php 
             $msg_posto_sucess_edit = filter_input(INPUT_GET,'msg_posto_sucess_edit', FILTER_SANITIZE_NUMBER_INT);

           if ($msg_posto_sucess_edit==2) { ?>

            <h5 style="color:#017c4f"> Dados atualizados com sucesso </h5>

          <?php }?> 

          <?php 
             $msg_posto_erro_edit = filter_input(INPUT_GET,'msg_posto_erro_edit', FILTER_SANITIZE_NUMBER_INT);

           if ($msg_posto_erro_edit==1) { ?>

            <h5 style="color:#bf0000"> Nada foi modificado! </h5>

          <?php }?>


           <!--#################################################################-->
            <!--##################################_Após_Excluir_###############################-->


                 <?php 
                     if ($msg_exclui_posto_sucess==1) { ?>
                       
                       <h5 style="color:#0004b9"> Posto excluído com sucesso </h5>  
                <?php }?>

                   <?php 
                     if ($msg_exclui_posto_erro==1) { ?>
                       
                       <h5 style="color:#bf0000"> Erro ao excluir posto, entre em contato com o ADM</h5>  
                <?php }?>

         
        </div>
        <div class="modal-footer">
          <form method="post" action="../../back_end/inserir_bd/ponto_atendimento/fecha_modal_postos.php">
            <button type="submit" class="btn btn-secondary">Fechar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<!--#####################################_____|||||_____#################################-->


<!--#####################################_____MODAL_____#################################-->

  <div class="modal fade" id="msg_posto_excluir" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Excluir registro <img src="../../imagens/conteudo/anexar.png" style="width: 40px ; height: 40px "></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">




            <!--##################################_Excluir_###############################-->

               <?php 
              
                     if ($excluir_posto==1) { ?>
                       
                       <h5> Deseja realmente excluir o Posto <y style="color:#870000">  <?php echo $_GET['id_posto'];  ?> </y> </h5>
                  
                <?php }?>


     
        </div>
        <div class="modal-footer">

          <form method="post" action="../../back_end/inserir_bd/ponto_atendimento/fecha_modal_postos.php">
            <button type="submit" class="btn btn-secondary">Fechar <img src="../../imagens/conteudo/fechar_janela.png" style="width: 30px; height: 30px"></button>
          </form>
          <form method="post" action="../../back_end/inserir_bd/ponto_atendimento/excluir_ponto_atendi.php">

            <input type="hidden" value="<?php echo $_GET['id_posto'];  ?>" name="id_posto_excluir">

            <button type="" class="btn btn-danger">Excluir <img src="../../imagens/conteudo/excluir_2.png" style="width: 30px; height: 30px"> </button>
          </form>
        </div>
      </div>
    </div>
  </div>
 

