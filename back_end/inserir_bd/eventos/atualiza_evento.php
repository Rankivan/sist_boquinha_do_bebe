



<?php


include_once ("../../conexao_bd.php");
@session_start();



                              $pagina_eventos = filter_input(INPUT_POST,'parametro_retorna_eventos_atualiza', FILTER_SANITIZE_STRING);





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



                                  
                                  // data atual é maior que a data de expiração
                                  if ($timestamp_dt_atual > $timestamp_dt_expira){ // true

                                    $status = "FECHADO";


                                    $data_base_eventos_atualiza = new db ();
                                    $link_eventos_atualiza = $data_base_eventos_atualiza->conecta_mysqli();

                                    $atualiza_eventos = "
                                    UPDATE eventos_atendimento SET
                                    status_evento  = 'FECHADO'
                                    WHERE id_evento = $id_evento ";

                                    $resultado_eventos_atualiza = mysqli_query($link_eventos_atualiza,$atualiza_eventos);




                                  }

                                     if ($timestamp_dt_atual < $timestamp_dt_expira){ // true

                                      $status = "ABERTO";


                                      $data_base_eventos_atualiza = new db ();
                                      $link_eventos_atualiza = $data_base_eventos_atualiza->conecta_mysqli();

                                      $atualiza_eventos = "
                                      UPDATE eventos_atendimento SET
                                      status_evento  = 'ABERTO'
                                      WHERE id_evento = $id_evento ";

                                      $resultado_eventos_atualiza = mysqli_query($link_eventos_atualiza,$atualiza_eventos);



                                    }

                                     if ($timestamp_dt_atual == $timestamp_dt_expira){ // true

                                       if  ( $hora_atual <= $hora_final){

                                         $status = "ABERTO";


                                         $data_base_eventos_atualiza = new db ();
                                         $link_eventos_atualiza = $data_base_eventos_atualiza->conecta_mysqli();

                                         $atualiza_eventos = "
                                         UPDATE eventos_atendimento SET
                                         status_evento  = 'ABERTO'
                                         WHERE id_evento = $id_evento ";

                                         $resultado_eventos_atualiza = mysqli_query($link_eventos_atualiza,$atualiza_eventos);



                                       } else {

                                         $status = "FECHADO";


                                         $data_base_eventos_atualiza = new db ();
                                         $link_eventos_atualiza = $data_base_eventos_atualiza->conecta_mysqli();

                                         $atualiza_eventos = "
                                         UPDATE eventos_atendimento SET
                                         status_evento  = 'FECHADO'
                                         WHERE id_evento = $id_evento ";

                                         $resultado_eventos_atualiza = mysqli_query($link_eventos_atualiza,$atualiza_eventos);

                                       }
                                     }


                                   }



                 //Direciona para :
                  header("location: ../../../sist_admin/telas_adm/adm.php?acao=home_adm");


      
                                  





                                   ?>