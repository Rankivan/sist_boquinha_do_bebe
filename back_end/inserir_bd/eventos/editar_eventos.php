<?php


   include_once ("../../conexao_bd.php");
   @session_start();



      $id_evento_edit              = filter_input(INPUT_POST,'id_evento_edit', FILTER_SANITIZE_STRING);
      $nome_evento_edit            = filter_input(INPUT_POST,'nome_evento_edit', FILTER_SANITIZE_STRING);
      $data_inicio_evento_edit     = filter_input(INPUT_POST,'data_inicio_evento_edit', FILTER_SANITIZE_STRING);
      $horario_inicio_evento_edit  = filter_input(INPUT_POST,'horario_inicio_evento_edit', FILTER_SANITIZE_STRING);
      $data_final_evento_edit      = filter_input(INPUT_POST,'data_final_evento_edit', FILTER_SANITIZE_STRING);
      $horario_final_evento_edit   = filter_input(INPUT_POST,'horario_final_evento_edit', FILTER_SANITIZE_STRING);
      $nome_posto_evento_edit      = filter_input(INPUT_POST,'nome_posto_evento_edit', FILTER_SANITIZE_STRING);
      $observaces_evento_edit      = filter_input(INPUT_POST,'observaces_evento_edit', FILTER_SANITIZE_STRING);
      $presenca_evento_edit        = filter_input(INPUT_POST,'presenca_evento_edit', FILTER_SANITIZE_STRING);
      $cadastrante_evento_edit     = filter_input(INPUT_POST,'cadastrante_evento_edit', FILTER_SANITIZE_STRING);
      $status_evento               = filter_input(INPUT_POST,'status_evento', FILTER_SANITIZE_STRING);
     
   
  /*  echo("id: $id_evento_edit"."<br>"); 
      echo("nome do evento: $nome_evento_edit"."<br>"); 
      echo("inicio: $data_inicio_evento_edit"." $horario_inicio_evento_edit"."<br>"); 
      echo("Fim: $data_final_evento_edit"." $horario_final_evento_edit"."<br>"); 
      echo("Obs: $observaces_evento_edit"."<br>"); 
      echo("Presenca: $presenca_evento_edit"."<br>"); 
      echo("Cadastrante: $cadastrante_evento_edit"."<br>"); */


          $data_inicio_evento_edit_1  =  strtotime($data_inicio_evento_edit);
          $data_final_evento_edit_1   =  strtotime($data_final_evento_edit);
         
          
          //echo $data_inicio_evento.",". $data_inicio_evento_1."<br>";
          //echo $data_final_evento.",". $data_final_evento_1;



              if ($data_inicio_evento_edit_1<=$data_final_evento_edit_1) {
    
    

              $data_base_eventos_edit = new db ();
              $link_eventos_edit = $data_base_eventos_edit->conecta_mysqli();

              $editar_eventos        = "UPDATE eventos_atendimento SET
              nome_evento            = '$nome_evento_edit',
              data_inicio_evento     = '$data_inicio_evento_edit',
              horario_inicio_evento  = '$horario_inicio_evento_edit',
              data_final_evento      = '$data_final_evento_edit',
              horario_final_evento   = '$horario_final_evento_edit',
              local_evento           = '$nome_posto_evento_edit',
              observaces_evento      = '$observaces_evento_edit',
              presenca_evento        = '$presenca_evento_edit',
              status_evento          = '$status_evento',
              cadastrante_evento     = '$cadastrante_evento_edit'
             
              WHERE id_evento ='$id_evento_edit'";

              $resultado_edicao_eventos = mysqli_query($link_eventos_edit,$editar_eventos);
     
             if(mysqli_affected_rows($link_eventos_edit)){

                    
             	  header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&eventos=1&msg_cadastro_evento=4");


              } else {

              
             header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&eventos=1&msg_cadastro_evento=5");
                
              } 

      } else { 


     echo "data de inicio menor";}


?>