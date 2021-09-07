  
  <?php
      $entradas_msgs_postos = 'atr_diversos/atr_ponto_de_atend/entrada_msgs_avisos_ponto_atend.php';
      $entradas_msgs_eventos = 'atr_diversos/atr_eventos/entrada_msgs_avisos_eventos.php';

    ?>


<?php include($entradas_msgs_postos); ?>
<?php include($entradas_msgs_eventos); ?>


           
<!--#######################################_DIVERSOS_########################################-->

<div id="conteudo_home_js">
	<div style="padding: 10px" >


		<!--_________________________________-->

		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<h5 class="card-header"> Eventos </h5>
					<a href="adm.php?acao=diversos_adm&eventos=1"  style="color: black"> 
						<div class="card-body">

							<p class="card-text">Administre e cadastre os eventos</p><br>
							<img src="../../imagens/conteudo/evento_1.png" style="width: 40px ; height: 40px ">
						</div></a>
					</div>
				</div>
			<?php 
			$eventos_get = filter_input(INPUT_GET,'eventos', FILTER_SANITIZE_NUMBER_INT);
			if ($eventos_get==1) { ?>

				<script type="text/javascript">
			       $(document).ready(function(){ //Abrir a modal pelo JS
			              onclick(altrna_cadastrar_evento_js());
			       });
			   </script>
			 <?php }?>
				<div class="col-sm-6">
					<div class="card">
						<h5 class="card-header"> Ponto de atendimento </h5>
						<a href="adm.php?acao=diversos_adm&posto_atend=1" onclick="alterna_cadastrar_ponto_atend_js()" style="color: black"> 
							<div class="card-body">

								<p class="card-text">Administre e cadastre os pontos de atendimentos</p><br>
								<img src="../../imagens/conteudo/hospital.png" style="width: 40px ; height: 40px ">
							</div>
						</a>
					</div>
				</div>
			</div>

			<?php 
			$posto_atend_get = filter_input(INPUT_GET,'posto_atend', FILTER_SANITIZE_NUMBER_INT);
			if ($posto_atend_get>=1) { ?>

				<script type="text/javascript">
			       $(document).ready(function(){ //Abrir a modal pelo JS
			              onclick(alterna_cadastrar_ponto_atend_js());
			       });
			   </script>
			 <?php }?>



			<!--_________________________________-->
		</div>
	</div>



      

 <?php include($postos_atend_diversos); ?>
 <?php include($eventos_diversos); ?>

