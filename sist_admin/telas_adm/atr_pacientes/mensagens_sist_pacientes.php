  <div align="center">



            <!--################# Inserir ##########################-->

          <h5> <?php if ($msg_pac_e_anam_sucess==1) { ?>
            <script type="text/javascript">
              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_pacientes").modal();
              });
            </script>
            <?php  } ?></h5>

           <h5> <?php if ($msg_pac_e_anam_erro==1) { ?>
            <script type="text/javascript">
              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_pacientes").modal();
              });
            </script>
            <?php  } ?></h5>

            <!--################# EDITAR ##########################-->

             <h5> <?php if ($msg_pac_e_anam_sucess==2) { ?>
            <script type="text/javascript">
              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_pacientes").modal();
              });
            </script>
            <?php  } ?></h5>

           <h5> <?php if ($msg_pac_e_anam_erro==2) { ?>
            <script type="text/javascript">
              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_pacientes").modal();
              });
            </script>
            <?php  } ?></h5>



          <h5> <?php if ($excluir_pac==1) { ?>
            <script type="text/javascript">
              $(document).ready(function(){ //Abrir a modal pelo JS
                $("#msg_excluir_pacientes").modal();
              });
            </script>
            <?php  } ?></h5>


    <div class="modal fade" id="msg_pacientes" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Resultado</h5>
                
              </div>
              <div class="modal-body">

                <!--_________________MSG cadastro ________________-->
                <!--################# Inserir ##########################-->

                <h5>
                <?php if ($msg_pac_e_anam_erro==1){
                   echo '<font color ="#9e0000"> Erro ao cadastrar paciente, entre em contato com o administrador! </font><br>';
                }  ?> 
                </h5>
                <h5>
                <?php if ($msg_pac_e_anam_sucess==1){
                   echo '<font color ="#0e7500">  Paciente cadastrado com sucesso! </font><br>';
                }  ?> 
                </h5>

               <!--################# EDITAR ##########################-->

                  <h5>
                <?php if ($msg_pac_e_anam_erro==2){
                   echo '<font color ="#9e0000"> Nada foi editado! </font><br>';
                }  ?> 
                </h5>
                <h5>
                <?php if ($msg_pac_e_anam_sucess==2){
                   echo '<font color ="#0e7500">  Paciente editado com sucesso! </font><br>';
                }  ?> 
                </h5>

              </div>
              <div class="modal-footer">
                <form method="post" action="../../back_end/inserir_bd/pacientes/fecha_modal_msg_pac_anam.php">
                <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </form>
              </div>
            </div>
          </div>
        </div>

 </div>

    <form method="post" action="../../back_end/inserir_bd/pacientes/excluir_pacientes_anam.php">
     <div class
     ="modal fade" id="msg_excluir_pacientes" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Excluir Paciente N° <?php echo$_GET['id_pac']; ?></h5>
                
              </div>
              <div class="modal-body">

                <h5> Deseja realmente excluir o paciente N° <y style="color: #9e0000 "> <?php echo $_GET['id_pac']; ?></y></h5>

                <input type="hidden" value="<?php echo $_GET['id_pac']; ?>" name="id_excluir_pac">

                  
              </div>
              <div class="modal-footer">
                <form method="post" action="../../back_end/inserir_bd/pacientes/fecha_modal_msg_pac_anam.php">
                <button type="submit" class="btn btn-danger" >Excluir</button>
                <a type="button" href="adm.php?acao=pacientes_adm" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</a>
                </form>
              </div>
            </div>
          </div>
        </div>
   </form>
 </div>