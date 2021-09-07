



<?php

$formulario_editar_paciente = 'atr_pacientes/formulario_editar_paciente.php';
$formulario_editar_anamnese = 'atr_pacientes/formulario_editar_anamnese.php';


?>

<form method="post" action="../../back_end/inserir_bd/pacientes/editar_pacientes_anam.php" >
    <div class="modal fade" id="editar_pacientes" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable  modal-xl">
        <div class="modal-content">
          <div class="modal-header">

      <div id="titulo_editar_paciente">
        <h5> Editar paciente <img src="../../imagens/conteudo/anexar.png" style="width: 40px ; height: 40px "> </h5>
      </div>    

       <div id="titulo_editar_anamnese">
        <h5> Editar ficha de anamnese <img src="../../imagens/conteudo/anexar.png" style="width: 40px ; height: 40px "> </h5>
      </div>  

          
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

         <div id="editar_pacientes_js">
             <?php include($formulario_editar_paciente); ?> 
         </div>
         <div id="editar_anamnese_js">
             <?php include($formulario_editar_anamnese); ?> 
         </div>

         </div>

         <div class="modal-footer">

           <div id="btn_ver_anamnese">
            <button type="button" class="btn btn-warning" onclick="alterna_edit_anam();"> <img src="../../imagens/conteudo/anexar.png" style="width: 30px ; height: 30px "> Ver anamnese </button>
           </div>

            <div id="btn_voltar_cadastro">
            <button type="button" class="btn btn-light" onclick="alterna_voltar_edit_pac();" > Voltar a ver cadastro  <img src="../../imagens/conteudo/voltar.png" style="width: 30px ; height: 30px "> </button>
           </div>

           <div>
            <a href="adm.php?acao=pacientes_adm&excluir_pac=1&id_pac=<?php echo $id_pac ?>"  class="btn btn-danger"  > <img src="../../imagens/conteudo/excluir_2.png" style="width: 30px ; height: 30px "> Excluir </a>
           </div>

           <div id="btn_editar_paciente">
            <button type="button" class="btn btn-primary" onclick="btn_editar_anam_disabled()" > <img src="../../imagens/conteudo/cadastro.png" style="width: 30px ; height: 30px "> Editar </button>
           </div>

            <div id="btn_salvar_paciente">
            <button type="submit" class="btn btn-primary" onclick="btn_editar_anam_disabled()" > <img src="../../imagens/conteudo/armazena.png" style="width: 30px ; height: 30px "> Salvar </button>
           </div>

           <div>
            <a href="adm.php?acao=pacientes_adm" type="button" class="btn btn-secondary" > <img src="../../imagens/conteudo/fechar_janela.png" style="width: 30px ; height: 30px "> Fechar </a>
           </div>

           
        

       </div>
     </div>
   </div>
 </div>
</form> 