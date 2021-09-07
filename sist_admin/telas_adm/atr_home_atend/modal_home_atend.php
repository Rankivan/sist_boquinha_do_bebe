


<form method="post" action="../../back_end/inserir_bd/home_atendimentos/home_atendimentos.php">
  <!-- Modal -->
  <div class="modal fade" data-backdrop="static" id="modal_home_atend" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Atender</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


         <label ><h5>Selecione o evento do atendimento</h5></label>
         <select name="nome_evento" type="text" class="form-control"required="">

          <option value=""></option>

                            <?php

                               $data_base_eventos = new db ();  //Esta é a estrutura para recuperar qualquer dado do Banco de dados
                               $link_eventos      = $data_base_eventos->conecta_mysqli();

                               $consulta_eventos = $pdo->query("SELECT * FROM eventos_atendimento where status_evento != 'FECHADO'");//Seleciona o BD bairros
                               $dados_eventos    = $consulta_eventos->fetchAll(PDO::FETCH_ASSOC);


                               for ($i=0; $i < count($dados_eventos); $i++){
                                foreach ($dados_eventos[$i] as $key => $value) {
                                   //Comando for e foreach fornece da om loop de leitura em todos os dados do banco de dados.
                                }

                                $nome_evento   = $dados_eventos[$i]['nome_evento'];
                                $status_evento = $dados_eventos[$i]['status_evento'];
                                ?>

                                <option value="<?php echo($nome_evento)?>"> <?php echo ($nome_evento) ?></option>

                                <!-- traz o echo dos bairros e após o option  -->

                             <?php } ?>

                            </select><br>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Continuar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>

                  <!--#######################################################################################################-->
                  <!--#######################################################################################################-->



<!-- Modal da tela pós escolha do evento -->
<div class="modal fade" data-backdrop="static" id="modal_atender" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><y style="color: #001194"><?php echo $nome_evento ?></y></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class=" table table-responsive table-sm" >
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col"> ID </th>
              <th scope="col"> Nome </th>
              <th scope="col"> N° SUS </th>
              <th scope="col"> Opções </th>
            </tr>
          </thead>
          <tbody>
             <?php

              $evento_consulta     = filter_input(INPUT_GET,'evento_consulta', FILTER_SANITIZE_NUMBER_INT);
              $local_evento        = filter_input(INPUT_GET,'local_evento');
              $id_pac_atend_get    = filter_input(INPUT_GET,'id_pac_atend', FILTER_SANITIZE_NUMBER_INT);

                  $consulta_paciente = $pdo->query("SELECT * from pacientes where nome_posto_pac = '$local_evento'");
                  $dados_paciente    = $consulta_paciente->fetchAll(PDO::FETCH_ASSOC);
                  for ($i=0; $i < count($dados_paciente); $i++){
                          foreach ($dados_paciente[$i] as $key => $value) {
                            }
                            //echo $dados[$i]['nome']."<br><br>";
                            $id_pac_atend          = $dados_paciente[$i]['id_pac'];
                            $nome_pac_atend        = $dados_paciente[$i]['nome_pac'];
                            $sobrenome_pac         = $dados_paciente[$i]['sobrenome_pac'];
                            $nome_posto_pac_atend  = $dados_paciente[$i]['nome_posto_pac'];
                            $numero_sus_pac        = $dados_paciente[$i]['numero_sus_pac'];


                    if ($evento_consulta == 1) { ?>

                     <script type="text/javascript">
                      $(document).ready(function(){ //Abrir a modal pelo JS
                        $("#modal_atender").modal();
                      });
                    </script>

                  <?php  } ?>

                 <?php

                    if ($id_pac_atend_get >=1) { //Trecho que busca dados para a edição

                             $resultado_consulta_atender_pac  = $pdo->query ("select * from pacientes where id_pac = '$id_pac_atend_get'");
                             $dados_atender_pac               = $resultado_consulta_atender_pac->fetchAll(PDO::FETCH_ASSOC);

                                 $id_atender_pac                    = $dados_atender_pac   [0]['id_pac'];
                                 $nome_atender_pac                  = $dados_atender_pac   [0]['nome_pac'];
                                 $sobrenome_atender_pac             = $dados_atender_pac   [0]['sobrenome_pac'];
                                 $cidade_atender_pac                = $dados_atender_pac   [0]['cidade_pac'];
                                 $sexo_atender_pac                  = $dados_atender_pac   [0]['sexo_pac'];
                                 $nome_posto_atender_pac            = $dados_atender_pac   [0]['nome_posto_pac'];
                                 $numero_sus_atender_pac            = $dados_atender_pac   [0]['numero_sus_pac'];
                                 $endereco_atender_pac              = $dados_atender_pac   [0]['endereco_pac'];
                                 $bairro_atender_pac                = $dados_atender_pac   [0]['bairro_pac'];
                                 $nome_responsavel_atender_pac      = $dados_atender_pac   [0]['nome_responsavel_pac'];
                                 $telefone_responsavel_atender_pac  = $dados_atender_pac   [0]['telefone_responsavel_pac'];
                                 $cpf_responsavel_atender_pac       = $dados_atender_pac   [0]['cpf_responsavel_pac'];
                                 $data_nascimento_atender_pac       = $dados_atender_pac   [0]['data_nascimento_pac'];
                                 $cadastrante_atender_pac           = $dados_atender_pac   [0]['cadastrante_pac'];
                                 $presenca_atender_pac              = $dados_atender_pac   [0]['presenca_pac'];
                                 $nome_posto_atender_pac            = $dados_atender_pac   [0]['nome_posto_pac'];
                                 $data_registro_atender_pac         = $dados_atender_pac   [0]['data_registro_pac'];

                                     $resultado_consulta_anam_atender_pac = $pdo->query ("select * from anamnese where cod_pac_anam = '$id_pac_atend_get'");
                                     $dados_anamnese_atend_pac            = $resultado_consulta_anam_atender_pac->fetchAll(PDO::FETCH_ASSOC);
                                     //Ficar atento com o id da anamnese para fazer o inner join por programação

                                     $id_anam_atender_pac                     = $dados_anamnese_atend_pac      [0]['id_anam'];
                                     $nome_e_sobren_pac_anam_atender_pac      = $dados_anamnese_atend_pac      [0]['nome_e_sobren_pac_anam'];
                                     $local_pre_natal_anam_atender_pac        = $dados_anamnese_atend_pac      [0]['local_pre_natal_anam'];
                                     $uso_remedio_gest_anam_atender_pac       = $dados_anamnese_atend_pac      [0]['uso_remedio_gest_anam'];
                                     $anomalia_ao_nasc_anam_atender_pac       = $dados_anamnese_atend_pac      [0]['anomalia_ao_nasc_anam'];
                                     $tratam_med_anam_atender_pac             = $dados_anamnese_atend_pac      [0]['tratam_med_anam'];
                                     $tipo_de_parto_anam_atender_pac          = $dados_anamnese_atend_pac      [0]['tipo_de_parto_anam'];
                                     $qtd_irmaos_anam_atender_pac             = $dados_anamnese_atend_pac      [0]['qtd_irmaos_anam'];
                                     $nome_responsavel_pac_anam_atender_pac   = $dados_anamnese_atend_pac      [0]['nome_responsavel_pac_anam'];
                                     $pediatra_resp_anam_dr_atender_pac       = $dados_anamnese_atend_pac      [0]['pediatra_resp_anam_dr'];
                                     $alim_materna_anam_atender_pac           = $dados_anamnese_atend_pac      [0]['alim_materna_anam'];
                                     $campo_observacoes_anam_atender_pac      = $dados_anamnese_atend_pac      [0]['campo_observacoes_anam'];
                                     $dificuldade_alim_anam_atender_pac       = $dados_anamnese_atend_pac      [0]['dificuldade_alim_anam'];
                                     $mamadeira_anam_atender_pac              = $dados_anamnese_atend_pac      [0]['mamadeira_anam'];
                                     $chupeta_anam_atender_pac                = $dados_anamnese_atend_pac      [0]['chupeta_anam'];
                                     $chupa_dedo_anam_atender_pac             = $dados_anamnese_atend_pac      [0]['chupa_dedo_anam'];
                                     $higiene_anam_atender_pac                = $dados_anamnese_atend_pac      [0]['higiene_anam'];
                                     $trauma_bucal_anam_atender_pac           = $dados_anamnese_atend_pac      [0]['trauma_bucal_anam'];
                                     $hist_carie_familia_anam_atender_pac     = $dados_anamnese_atend_pac      [0]['hist_carie_familia_anam'];
                                     $cadastrante_anam_atender_pac            = $dados_anamnese_atend_pac      [0]['cadastrante_anam'];
                                     $cod_pac_anam_atender_pac                = $dados_anamnese_atend_pac      [0]['cod_pac_anam'];
                                     $data_registro_anam_atender_pac          = $dados_anamnese_atend_pac      [0]['data_registro_anam'];

                            ?>

                            <script type="text/javascript">
                              $(document).ready(function(){ //Abrir a modal pelo JS
                                atendimento_pac();
                              });
                            </script>

                     <?php } ?>

            <tr>
              <th scope="row"><?php echo $id_pac_atend ?></th>
              <td><?php echo $nome_pac_atend." ".$sobrenome_pac ?></td>
              <td><?php echo $numero_sus_pac ?></td>

              <td><a type="button"  onclick="atendimento_pac()" href="?acao=home_adm&evento_consulta=0&local_evento=UBS%20Regional&id_pac_atend=<?php echo $id_pac_atend ?>">
                     Atender <img src="../../imagens/conteudo/odontologia.png" style="width: 20px ; height: 20px ;">
                  </a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
       </div>
      </div>

    </div>
  </div>
</div>
</form>

<!--#######################################################################################################-->
<!--#######################################################################################################-->

