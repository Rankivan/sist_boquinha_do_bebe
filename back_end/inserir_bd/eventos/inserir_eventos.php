<?php 
   
   include_once ("../../conexao_bd.php");
   @session_start();



      $nome_evento               = filter_input(INPUT_POST,'nome_evento', FILTER_SANITIZE_STRING);
      $data_inicio_evento        = filter_input(INPUT_POST,'data_inicio_evento', FILTER_SANITIZE_STRING);
      $horario_inicio_evento     = filter_input(INPUT_POST,'horario_inicio_evento', FILTER_SANITIZE_STRING);
      $data_final_evento         = filter_input(INPUT_POST,'data_final_evento', FILTER_SANITIZE_STRING);
      $horario_final_evento      = filter_input(INPUT_POST,'horario_final_evento', FILTER_SANITIZE_STRING);
      $nome_posto_pac            = filter_input(INPUT_POST,'nome_posto_pac', FILTER_SANITIZE_STRING);
      $observaces_evento         = filter_input(INPUT_POST,'observaces_evento', FILTER_SANITIZE_STRING);
      $presenca_evento           = filter_input(INPUT_POST,'presenca_evento', FILTER_SANITIZE_STRING);
      $cadastrante_evento        = filter_input(INPUT_POST,'cadastrante_evento', FILTER_SANITIZE_STRING);
   

          $data_inicio_evento_1  =  strtotime($data_inicio_evento);
          $data_final_evento_1   =  strtotime($data_final_evento);
         
          
          //echo $data_inicio_evento.",". $data_inicio_evento_1."<br>";
          //echo $data_final_evento.",". $data_final_evento_1;

       $consulta_dup_eventos = $pdo->query ("select * from eventos_atendimento where status_evento != 'FECHADO' AND nome_evento = '$nome_evento'");
       $dados_dup_eventos = $consulta_dup_eventos->fetchAll(PDO::FETCH_ASSOC);
       $linhas_dup_eventos = count($dados_dup_eventos);

       if ($linhas_dup_eventos == 0) {

              if ($data_inicio_evento_1<=$data_final_evento_1) {
                # code...
                    $data_base_event = new db ();
                    $link_event = $data_base_event->conecta_mysqli();
                    $inserir_usuarios_event = "INSERT INTO eventos_atendimento
                    (nome_evento,
                    data_inicio_evento,
                    horario_inicio_evento,
                    data_final_evento,
                    horario_final_evento,
                    local_evento,
                    observaces_evento,
                    presenca_evento,
                    cadastrante_evento,
                    data_de_cadastro_evento) 
                    VALUES                                              
                    ('$nome_evento',
                    '$data_inicio_evento',
                    '$horario_inicio_evento',
                    '$data_final_evento',
                    '$horario_final_evento',
                    '$nome_posto_pac',
                    '$observaces_evento',
                    '$presenca_evento',
                    '$cadastrante_evento',
                     NOW())";
                  //$inserir_usuarios = "INSERT INTO usuarios () VALUES ('','','','','')";

                    $resultado_registro_event = mysqli_query($link_event,$inserir_usuarios_event);
                    if(mysqli_insert_id($link_event)){

                      header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&eventos=1&msg_cadastro_evento=1");
                       // header('location:../../tela_login.php?erro=1');//MENSAGEM DE ERRO
                    } else {

                        header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&eventos=1&msg_cadastro_evento=2");
                    }
                     //__________________________________________________________________________________________
                    //$nome_sessão_cadastro = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
                    //$_SESSION['nome'] =  $nome_sessão_cadastro;
                   } else{

                  header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&eventos=1&msg_cadastro_evento=3");

                   }

          } else {


            header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&eventos=1&msg_cadastro_evento=2");


          }








?> 


