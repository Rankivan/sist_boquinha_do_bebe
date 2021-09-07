 <!--##############################_CADASTRAR_##################################-->

     <!-- ESTA MODAL NÃO DEVERIA FICAR AQUI, PORÉM SÓ FUNCIONA AQUI -->
	 <?php 
	 $msg_posto_erro = filter_input(INPUT_GET,'msg_posto_erro', FILTER_SANITIZE_NUMBER_INT);

			 if ($msg_posto_erro==1) { ?>

			<script type="text/javascript">
				$(document).ready(function(){ //Abrir a modal pelo JS
					$("#msg_posto").modal();
				});
			</script>
	<?php }?> 

     <!-- ESTA MODAL NÃO DEVERIA FICAR AQUI, PORÉM SÓ FUNCIONA AQUI -->
   <?php 
	 $msg_posto_sucess = filter_input(INPUT_GET,'msg_posto_sucess', FILTER_SANITIZE_NUMBER_INT);

			 if ($msg_posto_sucess==1) { ?>

			<script type="text/javascript">
				$(document).ready(function(){ //Abrir a modal pelo JS
					$("#msg_posto").modal();
				});
			</script>
	<?php }?> 

     <!-- ESTA MODAL NÃO DEVERIA FICAR AQUI, PORÉM SÓ FUNCIONA AQUI -->
	 <?php 
	 $editar_posto = filter_input(INPUT_GET,'editar_posto', FILTER_SANITIZE_NUMBER_INT);

			 if ($editar_posto==1) { ?>

			<script type="text/javascript">
				$(document).ready(function(){ //Abrir a modal pelo JS
					$("#modal_editar_postos").modal();
				});
			</script>
	<?php }?>


      <!--##############################_EDITAR_##################################-->



	   <!-- ESTA MODAL NÃO DEVERIA FICAR AQUI, PORÉM SÓ FUNCIONA AQUI -->
	 <?php 
	 $msg_posto_sucess_edit = filter_input(INPUT_GET,'msg_posto_sucess_edit', FILTER_SANITIZE_NUMBER_INT);

			 if ($msg_posto_sucess_edit==1) { ?>

			<script type="text/javascript">
				$(document).ready(function(){ //Abrir a modal pelo JS
					$("#msg_posto").modal();
				});
			</script>
	<?php }?> 

		     <!-- ESTA MODAL NÃO DEVERIA FICAR AQUI, PORÉM SÓ FUNCIONA AQUI -->
	 <?php 
	 $msg_posto_sucess_edit = filter_input(INPUT_GET,'msg_posto_sucess_edit', FILTER_SANITIZE_NUMBER_INT);

			 if ($msg_posto_sucess_edit==2) { ?>

			<script type="text/javascript">
				$(document).ready(function(){ //Abrir a modal pelo JS
					$("#msg_posto").modal();
				});
			</script>
	<?php }?> 


		     <!-- ESTA MODAL NÃO DEVERIA FICAR AQUI, PORÉM SÓ FUNCIONA AQUI -->
	 <?php 
	 $msg_posto_erro_edit = filter_input(INPUT_GET,'msg_posto_erro_edit', FILTER_SANITIZE_NUMBER_INT);

			 if ($msg_posto_erro_edit==1) { ?>

			<script type="text/javascript">
				$(document).ready(function(){ //Abrir a modal pelo JS
					$("#msg_posto").modal();
				});
			</script>
	<?php }?> 


    <!--################################################################-->

    <!--###########################_EXCLUIR_#################################-->
	 <?php 
	 $excluir_posto = filter_input(INPUT_GET,'excluir_posto', FILTER_SANITIZE_NUMBER_INT);

			 if ($excluir_posto==1) { ?>

			<script type="text/javascript">
				$(document).ready(function(){ //Abrir a modal pelo JS
					$("#msg_posto_excluir").modal();
				});
			</script>
	<?php }?>



		 <?php 
		 
	 $msg_exclui_posto_sucess = filter_input(INPUT_GET,'msg_exclui_posto_sucess', FILTER_SANITIZE_NUMBER_INT);

			 if ($msg_exclui_posto_sucess==1) { ?>

			<script type="text/javascript">
				$(document).ready(function(){ //Abrir a modal pelo JS
					$("#msg_posto").modal();
				});
			</script>
	<?php }?>
		 <?php 
		 
	 $msg_exclui_posto_erro = filter_input(INPUT_GET,'msg_exclui_posto_erro', FILTER_SANITIZE_NUMBER_INT);

			 if ($msg_exclui_posto_erro==1) { ?>

			<script type="text/javascript">
				$(document).ready(function(){ //Abrir a modal pelo JS
					$("#msg_posto").modal();
				});
			</script>
	<?php }?>


	