


   <!--####################### Inserir ##########################-->


     <!-- ESTA MODAL NÃO DEVERIA FICAR AQUI, PORÉM SÓ FUNCIONA AQUI -->
	 <?php 
	 $msg_cadastro_evento = filter_input(INPUT_GET,'msg_cadastro_evento', FILTER_SANITIZE_NUMBER_INT);
   $retorno_excluir = filter_input(INPUT_GET,'retorno_excluir', FILTER_SANITIZE_NUMBER_INT);

			 if ($msg_cadastro_evento==1) { ?>

			<script type="text/javascript">
				$(document).ready(function(){ //Abrir a modal pelo JS
					$("#modal_msgs_eventos").modal();
				});
			</script>


	<?php }?>


   <?php 
       if ($msg_cadastro_evento==2) { ?>

      <script type="text/javascript">
        $(document).ready(function(){ //Abrir a modal pelo JS
          $("#modal_msgs_eventos").modal();
        });
      </script>
  <?php }?>

     <?php 
       if ($msg_cadastro_evento==3) { ?>

      <script type="text/javascript">
        $(document).ready(function(){ //Abrir a modal pelo JS
          $("#modal_msgs_eventos").modal();
        });
      </script>
  <?php }?>

   <?php 
       if ($msg_cadastro_evento==4) { ?>

      <script type="text/javascript">
        $(document).ready(function(){ //Abrir a modal pelo JS
          $("#modal_msgs_eventos").modal();
        });
      </script>
  <?php }?>

   <?php 
       if ($msg_cadastro_evento==5) { ?>

      <script type="text/javascript">
        $(document).ready(function(){ //Abrir a modal pelo JS
          $("#modal_msgs_eventos").modal();
        });
      </script>
  <?php }?>


	



   <?php 
       if ($retorno_excluir==1) { ?>

      <script type="text/javascript">
        $(document).ready(function(){ //Abrir a modal pelo JS
          $("#modal_msgs_eventos").modal();
        });
      </script>
  <?php }?>

     <?php 
       if ($retorno_excluir==2) { ?>

      <script type="text/javascript">
        $(document).ready(function(){ //Abrir a modal pelo JS
          $("#modal_msgs_eventos").modal();
        });
      </script>
  <?php }?>




	<!-- Modal -->
<div class="modal fade" id="modal_msgs_eventos" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"> Retorno </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

               <!--####################### Inserir ##########################-->
                <h5>
                <?php if ($msg_cadastro_evento==1){
                   echo '<font color ="#0e7500"> Sucesso ao cadastrar o evento! </font><br>';
                }  ?> 
                </h5>
                <h5>
                <?php if ($msg_cadastro_evento==2){
                   echo '<font color ="#9e0000">  Erro ao cadastrar evento! </font><br>';
                }  ?> 
                </h5>
                <h5>
                <?php if ($msg_cadastro_evento==3){
                   echo '<font color ="#9e0000">  Data inicial maior que data final, não foi possivel criar evento! </font><br>';
                }  ?> 
                </h5>


               <h5>
                <?php if ($msg_cadastro_evento==4){
                   echo '<font color ="#0e7500"> Sucesso ao editar o evento! </font><br>';
                }  ?> 
                </h5>
                <h5>
                <?php if ($msg_cadastro_evento==5){
                   echo '<font color ="#9e0000">  Nada foi modificado. </font><br>';
                }  ?> 
                </h5>


                <h5>
                <?php if ($retorno_excluir==2){
                   echo '<font color ="#0e7500">  Registro excluído com sucesso! </font><br>';
                }  ?> 
                </h5>

                <h5>
                <?php if ($retorno_excluir==1){
                   echo '<font color ="#9e0000"> Não foi possível excluir registro. </font><br>';
                }  ?> 
                </h5>



        
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" href="adm.php?acao=diversos_adm&eventos=1" >Close</a>
      </div>
    </div>
  </div>
</div>






     <?php 

      $edicao_eventos = filter_input(INPUT_GET,'edicao_eventos', FILTER_SANITIZE_NUMBER_INT);

       if ($edicao_eventos==1) { ?>

      <script type="text/javascript">
        $(document).ready(function(){ //Abrir a modal pelo JS
          $("#modal_editar_eventos").modal();
        });
      </script>
     <?php }?>





     <?php  //MODAL EXCLUIR

      $excluir_evento = filter_input(INPUT_GET,'excluir_evento', FILTER_SANITIZE_NUMBER_INT);

       if ($excluir_evento==1) { ?>

      <script type="text/javascript">


        $(document).ready(function(){ //Abrir a modal pelo JS
          $("#modal_excluir_eventos").modal();
        });
      </script>

     <?php } ?>




