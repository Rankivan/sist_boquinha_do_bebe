
<?php

       $formulario_eventos  = 'atr_eventos/formulario_eventos.php';
       $formulario_editar_eventos  = 'atr_eventos/formulario_editar_eventos.php';
?>





<div id="eventos_diversos_js">
  <!--___________-->

 <div style="padding: 10px;">
   <div class="row">
     <div class="col-sm-6">
       <div class="card">
        <h5 class="card-header"> Inserir novos eventos </h5>
        <a href="#" style="color: black" type="button" data-toggle="modal" data-target="#inserir_eventos"> <div class="card-body">
          
          <p class="card-text">Insisra um novo evento no sistema</p>
          <img src="../../imagens/conteudo/cronograma.png" style="width: 40px ; height: 40px ;">
        </div></a>
      </div>
    </div>
    
    <div class="col-sm-6">
     <div class="card">
      <h5 class="card-header"> Pesquise por evento </h5>
      <div class="card-body">	    
        
        <div class="input-group mb-2">
          <div class="input-group-prepend">
           <div class="input-group-text"> <a href=""> <img src="../../imagens/conteudo/procurar.png" style="width: 40px ; height: 40px ;"></a></div>
         </div>
         <input style="height: 70px;" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Pesquisar">
       </div>
     </div>
   </div>
 </div>

</div> <br>




 <!--####################################_MENSAGENS DE ERRO_######################################-->



<!--_________________________________________________________________________________________-->

  <!--#######################################__TABELA__########################################-->
  <div class=" table table-responsive table-sm" >
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nome </th>
          <th scope="col">Local</th>
          <th scope="col">Inicio</th>
          <th scope="col">Encerramento</th>
          <th scope="col"> Opções </th>

        </tr>
      </thead>
      <tbody>
             <?php

                           $consulta_eventos = $pdo->query("SELECT * FROM eventos_atendimento ORDER BY id_evento DESC ");//Seleciona o BD bairros
                         

                              $dados_eventos = $consulta_eventos->fetchAll(PDO::FETCH_ASSOC);


                               for ($i=0; $i < count($dados_eventos); $i++){
                                  foreach ($dados_eventos[$i] as $key => $value) {
                                   //Comando for e foreach fornece da om loop de leitura em todos os dados do banco de dados.
                               }
                               $id_evento                      = $dados_eventos[$i]['id_evento'];
                               $nome_evento                    = $dados_eventos[$i]['nome_evento'];
                               
                               $horario_inicio_evento          = $dados_eventos[$i]['horario_inicio_evento'];
                               $horario_final_evento           = $dados_eventos[$i]['horario_final_evento'];

                               $local_evento                   = $dados_eventos[$i]['local_evento'];
                               $observaces_evento              = $dados_eventos[$i]['observaces_evento'];
                               $presenca_evento                = $dados_eventos[$i]['presenca_evento'];
                               $cadastrante_evento             = $dados_eventos[$i]['cadastrante_evento'];
                               $data_de_cadastro_evento        = $dados_eventos[$i]['data_de_cadastro_evento'];

                               $data_inicio_evento             = $dados_eventos[$i]['data_inicio_evento'];
                               $data_final_evento              = $dados_eventos[$i]['data_final_evento'];


                             
                                  date_default_timezone_set('America/Sao_Paulo'); 

                                  $data_inicial_1 = date("d/m/Y", strtotime ($data_inicio_evento));

                                  $data_atual    = date("Y-m-d"); //data atual
                                  $timestamp_dt_atual   = strtotime($data_atual); //converte para timestamp Unix

                                  $data_final    = $data_final_evento; //data de expiração do anúncio
                                  $timestamp_dt_expira  = strtotime($data_final); //converte para timestamp Unix

                                  $hora_atual   = date('H:i'); //data atual
                                  $timestamp_hr_atual   = strtotime($hora_atual);

                                  $hora_final   = date($horario_final_evento); //data atual
                                  $timestamp_hr_final  = strtotime($hora_final);

                               ?>
                                <tr>
                                  <th scope="row"> <h6> <?php echo  $id_evento ; ?> </h6> </th>
                                  <td><?php echo  ($nome_evento) ; ?></td>
                                  <td><?php echo  ($local_evento) ; ?></td>
                                  <td><h6><?php echo  ($data_inicial_1) ; ?></h6></td>
                                  <td><h6><?php 


                                  // data atual é maior que a data de expiração
                                  if ($timestamp_dt_atual > $timestamp_dt_expira){ // true
                                    echo '<font color ="#b50000">  FECHADO </font>';
                                    $status = "FECHADO";
                                  }

                                     if ($timestamp_dt_atual < $timestamp_dt_expira){ // true
                                    echo '<font color ="#117800">  ABERTO </font>';
                                    $status = "ABERTO";
                                  }

                                     if (($timestamp_dt_atual == $timestamp_dt_expira)){ // true

                                     if  ( $hora_atual < $hora_final){
                                         echo '<font color ="#117800">  ABERTO </font>';
                                         $status = "ABERTO";

                                         } else {
                                         echo '<font color ="#b50000"> FECHADO </font>';
                                         $status = "FECHADO";

                                      }
                                  }

  
                           ?>


                         </h5>


                       </td>
                       <td>  
                        <a  href="adm.php?acao=diversos_adm&eventos=1&edicao_eventos=1&id_evento=<?php echo($id_evento) ?>" style="color: black"type="button"><img src="../../imagens/conteudo/olho.png" style="width: 25px ; height: 25px "></a>
                      </td>
                    </tr>
                  <?php  }  ?>
                </tbody>
              </table>
            </div>

          </div>




<!--#######################################__ EDITAR USUARIOS __########################################-->
<?php  /*Comando php para puxar os dados referente ao id
       e executar a edição.*/

     
    if(isset($_GET['edicao_eventos'])==1){
     $id_evento_edit = $_GET['id_evento']; //Passagem de dados via URL por meio GET
  
       //Recuperar dados do usuario a ser editado

      $resultado_consulta_evento_edit = $pdo->query ("select * from eventos_atendimento where id_evento = '$id_evento_edit'");
       $dados_evento_edit = $resultado_consulta_evento_edit->fetchAll(PDO::FETCH_ASSOC);

               $id_evento                      = $dados_evento_edit[0]['id_evento'];
               $nome_evento                    = $dados_evento_edit[0]['nome_evento'];
               $data_inicio_evento             = $dados_evento_edit[0]['data_inicio_evento'];
               $horario_inicio_evento          = $dados_evento_edit[0]['horario_inicio_evento'];
               $data_final_evento              = $dados_evento_edit[0]['data_final_evento'];
               $horario_final_evento           = $dados_evento_edit[0]['horario_final_evento'];
               $local_evento                   = $dados_evento_edit[0]['local_evento'];
               $observaces_evento              = $dados_evento_edit[0]['observaces_evento'];
               $presenca_evento                = $dados_evento_edit[0]['presenca_evento'];
               $cadastrante_evento             = $dados_evento_edit[0]['cadastrante_evento'];
               $data_de_cadastro_evento        = $dados_evento_edit[0]['data_de_cadastro_evento'];


               $data_inicial_1 = date("d/m/Y", strtotime ($data_inicio_evento));
               $data_final_1   = date("d/m/Y", strtotime ($data_final_evento));

  }
  
?>


<!--___________-->
</div>



<form method="post" action="../../back_end/inserir_bd/eventos/inserir_eventos.php" >
 <div class="modal fade" id="inserir_eventos" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable  modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Inserir um novo evento <img src="../../imagens/conteudo/calendario_editar.png" style="width: 40px ; height: 40px ;"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--ARRUMAR O BOTÃO POST-->
          <div class="modal-body" >

            <?php include($formulario_eventos); ?>

         </div>
         <div class="modal-footer">

           <button class="btn btn-dark"  data-dismiss="modal" > Fechar </button>
          <button class="btn btn-success" type="submit">Criar</button>
         
        </div>
      </div>
    </div>
  </div>
</form>




<!--################### Eventos atendimento Editar ######################### -->




 <form method="post" action="../../back_end/inserir_bd/eventos/editar_eventos.php">
     <div class="modal fade" id="modal_editar_eventos" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable  modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Visualizar eventos N° <y style="color: #9e0000"> <?php echo $id_evento ?> </y> <img src="../../imagens/conteudo/data_limite.png" style="width: 40px ; height: 40px "></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--ARRUMAR O BOTÃO POST-->
          <div class="modal-body" >

            <?php include($formulario_editar_eventos);   ?>
           
         </div>
         <div class="modal-footer">
          
            <a href="adm.php?acao=diversos_adm&eventos=1&excluir_evento=1&id_evento=<?php echo($id_evento) ?>"  class="btn btn-danger">Excluir <img src="../../imagens/conteudo/excluir_2.png" style="width: 30px; height: 30px">
            </a>
          
            <a id="editar_evento_btn"  class="btn btn-primary" onclick="btn_editar_evento();"> Editar <img src="../../imagens/conteudo/editar_2.png" style="width: 30px; height: 30px"> </a>
          
            <button id="salvar_evento_btn" type="submit"  class="btn btn-primary" > Salvar <img src="../../imagens/conteudo/armazena.png" style="width: 30px; height: 30px"> </button>

          <a class="btn btn-secondary" href="adm.php?acao=diversos_adm&eventos=1" >Fechar <img src="../../imagens/conteudo/fechar_janela.png" style="width: 30px; height: 30px"></a>
          
        </div>
      </div>
    </div>
  </div>
</form>






  <!-- MODAL EXCLUIR -->
<form method="post" action="../../back_end/inserir_bd/eventos/excluir_eventos.php">
  <div class="modal fade" id="modal_excluir_eventos" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">EXCLUIR N° <y style='color: #9e0000'><?php echo $_GET['id_evento'] ?></y> </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

           <h5>       Deseja realmente excluir o evento N°  <font color ="#9e0000">   <?php echo $_GET['id_evento'] ?></font> </h5>
            <br>
                  <input type="hidden" value="<?php echo $_GET['id_evento'] ?>" name="id_evento_excluir">
        </div>
        <div class="modal-footer">
         
          <button  type="submit" class="btn btn-danger">Excluir</button>
          <a type="button" class="btn btn-secondary" href="adm.php?acao=diversos_adm&eventos=1">Fechar</a>


        </div>
      </div>
    </div>
  </div>
</form>






