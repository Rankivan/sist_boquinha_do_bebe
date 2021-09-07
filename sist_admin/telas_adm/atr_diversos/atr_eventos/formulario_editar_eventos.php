

<div class="form-row"><!--DIV-->

  <!--__________________-->

  <div class="form-group col-md-6">
    <label >Nome do evento </label>
    <input type="text" value="<?php echo($nome_evento) ?>" id="nome_evento_edit" name="nome_evento_edit" class="form-control" placeholder="Insira o nome do evento a ser criado" disabled  required="" >
  </div>

  <!--__________________-->
</div>



<div class="form-row"><!--DIV-->

  <!--__________________-->

  <div class="form-group col-md-3">
    <label >Data de inicio</label>
    <input value="<?php echo($data_inicio_evento) ?>" id="data_inicio_evento_edit" type="date" class="form-control" placeholder="coloque o dia em que irá acontecer o evento" name="data_inicio_evento_edit" disabled  required="">
  </div>

  <div class="form-group col-md-3">
    <label >Horário de inicio </label>
    <input  id="horario_inicio_evento_edit" value="<?php echo($horario_inicio_evento) ?>" type="time"  class="form-control" placeholder="" name="horario_inicio_evento_edit" disabled  required="">
  </div>


  <!--__________________-->
</div>


<div class="form-row"><!--DIV-->

  <!--__________________-->


  <div class="form-group col-md-3">
    <label >Data final</label>
    <input value="<?php echo($data_final_evento) ?>" type="date" class="form-control" placeholder="coloque o dia em que irá acontecer o evento" name="data_final_evento_edit" id="data_final_evento_edit" disabled  required="">
  </div>

  <div class="form-group col-md-3">
    <label > até o horário final </label>
    <input id="horario_final_evento_edit" value="<?php echo($horario_final_evento) ?>" type="time"  class="form-control" placeholder="" name="horario_final_evento_edit" disabled  required="">
  </div>


  <!--__________________-->
</div>

<div class="form-row">
             <div class="form-group col-md-6"><!--MODIFICAR-->
                      <label > Local do evento </label>
                      <select id="nome_posto_evento_edit" name="nome_posto_evento_edit" type="text" name="local_evento" class="form-control" disabled  required=""> 

                        <option value="<?php echo($local_evento)?>" > <?php echo($local_evento)?></option>

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
                               <option value="<?php echo utf8_encode($nome_posto)?>"> <?php echo utf8_encode($nome_posto) ?> </option>

                           <?php } ?>




                      </select>
                    </div>


</div>



<div class="form-row"><!--DIV-->

  <!--__________________-->


 <div class="form-group col-md-6">
    <label > Observações </label>
    <textarea id="observaces_evento_edit" type="text" class="form-control" placeholder="" name="observaces_evento_edit"
    disabled ><?php echo($observaces_evento) ?></textarea> 
  </div>

<!--__________________-->
</div>


<div class="form-row"><!--DIV-->

  <!--__________________-->


  <div class="form-check">
  
    <div>
      
   <h5>   Marcar presença para: </h5>

    </div> 

    <div style="margin-left: 20px">
  <input id="presenca_evento_edit" name="presenca_evento_edit" class="form-check-input" type="checkbox" value="1" checked  disabled>
  <label class="form-check-label" for="defaultCheck1">
     Pacientes
  </label>



</div>
</div>

   <input type="hidden" value="<?=$_SESSION['id']?> - <?=$_SESSION['nome_entrada']?>" name="cadastrante_evento_edit"required="" >

   <input type="hidden" value="<?php echo $id_evento ?>" name="id_evento_edit" required="" >




  <!--__________________-->
</div><br>




<!--####################### Codigo PHP  para o a checagem do box #############################-->

     <?php
       if ($presenca_evento == 1)  { ?>
           <script type="text/javascript">
             //$("#checked_on").show();
             //$("#checked_off").hide();
             $('#presenca_evento_edit').prop('checked', true);
           /* window.onload = function()
            {
                document.getElementById("meuElemento").click();
            }*/  //Este código clica automaticamente em um botão         
           </script>

     <?php }   if ($presenca_evento != 1)  { ?>
             <script type="text/javascript">
              $('#presenca_evento_edit').prop('checked', false);

             //$("#checked_on").hide();
             //$("#checked_off").show();
           </script>    
    <?php } ?>