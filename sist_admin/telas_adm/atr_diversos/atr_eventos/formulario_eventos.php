




<div class="form-row"><!--DIV-->

  <!--__________________-->

  <div class="form-group col-md-6">
    <label >Nome do evento </label>
    <input type="text" name="nome_evento" class="form-control" placeholder="Insira o nome do evento a ser criado"  required="">
  </div>

  <!--__________________-->
</div>



<div class="form-row"><!--DIV-->

  <!--__________________-->

  <div class="form-group col-md-3">
    <label >Data de inicio</label>
    <input  type="date" class="form-control" placeholder="coloque o dia em que irá acontecer o evento" name="data_inicio_evento"  required="">
  </div>

  <div class="form-group col-md-3">
    <label >Horário de inicio </label>
    <input type="time"  class="form-control" placeholder="" name="horario_inicio_evento"  required="">
  </div>


  <!--__________________-->
</div>


<div class="form-row"><!--DIV-->

  <!--__________________-->


  <div class="form-group col-md-3">
    <label >Data final</label>
    <input  type="date" class="form-control" placeholder="coloque o dia em que irá acontecer o evento" name="data_final_evento"  required="">
  </div>

  <div class="form-group col-md-3">
    <label > até o horário final </label>
    <input type="time"  class="form-control" placeholder="" name="horario_final_evento"  required="">
  </div>


  <!--__________________-->
</div>

<div class="form-row">
             <div class="form-group col-md-6"><!--MODIFICAR-->
                      <label > Local do evento </label>
                      <select name="nome_posto_pac" type="text" name="local_evento" class="form-control"  required=""> 

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
                               <option value="<?php echo utf8_encode($nome_posto)?>"> <?php echo utf8_encode($nome_posto) ?> </option>

                           <?php } ?>




                      </select>
                    </div>


</div>



<div class="form-row"><!--DIV-->

  <!--__________________-->


 <div class="form-group col-md-6">
    <label > Observações </label>
    <textarea type="text"  class="form-control" placeholder="" name="observaces_evento"
    ></textarea> 
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
  <input name="presenca_evento" class="form-check-input" type="checkbox" value="1" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
     Pacientes
  </label>



</div>
</div>

   <input type="hidden" value="<?=$_SESSION['id']?> - <?=$_SESSION['nome_entrada']?>" name="cadastrante_evento" required="">


  <!--__________________-->
</div><br>
