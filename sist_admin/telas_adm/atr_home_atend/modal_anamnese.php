
 <div class="modal fade" id="modal_anamnese_atendimento" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable  modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"> Informações sobre paciente <img src="../../imagens/conteudo/lista_pacientes.png" style="width: 40px ; height: 40px ;"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--ARRUMAR O BOTÃO POST-->
          <div class="modal-body" >
            <div>

              <h5>Dados pessoais: </h5><br>
               <h6><li>Nome completo:                <y style="color: blue "> <?php echo $nome_e_sobren_pac_anam_atender_pac ?></y></li></h6>
               <h6><li>Cidade de origem:             <y style="color: blue "> <?php echo $cidade_atender_pac                 ?></y></li></h6>
               <h6><li>Local do pré natal:           <y style="color: blue "> <?php echo $local_pre_natal_anam_atender_pac   ?></y></li></h6>
               <h6><li>Data de nascimento:           <y style="color: blue "> <?php echo $data_nascimento_atender_pac        ?></y></li></h6>
               <h6><li>Sexo do paciente:             <y style="color: blue "> <?php echo $sexo_atender_pac                   ?></y></li></h6>
               <h6><li>Nome do posto de atendimento: <y style="color: blue "> <?php echo $nome_posto_atender_pac             ?></y></li></h6>
               <h6><li>Número do SUS:                <y style="color: blue "> <?php echo $numero_sus_atender_pac             ?></y></li></h6>
               <h6><li>Nome do responsável:          <y style="color: blue "> <?php echo $nome_responsavel_atender_pac       ?></y></li></h6>
               <h6><li>Telefone do responsável:      <y style="color: blue "> <?php echo $telefone_responsavel_atender_pac   ?></y></li></h6>

               <hr>

               <h5>Anamnese: </h5><br>
               <h6><li>Id da anamnese:                       <y style="color: blue "> <?php echo $id_anam_atender_pac ?>                </y></li></h6>
               <h6><li>Uso de medicamento na gestação:       <y style="color: blue "> <?php echo $uso_remedio_gest_anam_atender_pac ?>  </y></li></h6>
               <h6><li>Anomalia ao nascer:                   <y style="color: blue "> <?php echo $anomalia_ao_nasc_anam_atender_pac ?>  </y></li></h6>
               <h6><li>Realizou tratamento médico:           <y style="color: blue "> <?php echo $tratam_med_anam_atender_pac ?>        </y></li></h6>
               <h6><li>Tipo de parto:                        <y style="color: blue "> <?php echo $tipo_de_parto_anam_atender_pac ?>     </y></li></h6>
               <h6><li>Quantidade de irmãos:                 <y style="color: blue "> <?php echo $qtd_irmaos_anam_atender_pac ?>        </y></li></h6>
               <h6><li>Pediatra responsável:                 <y style="color: blue "> <?php echo $pediatra_resp_anam_dr_atender_pac ?>  </y></li></h6>
               <h6><li>Alimentação materna:                  <y style="color: blue "> <?php echo $alim_materna_anam_atender_pac ?>      </y></li></h6>
               <h6><li>Dificuldade na alimentação:           <y style="color: blue "> <?php echo $dificuldade_alim_anam_atender_pac ?>  </y></li></h6>
               <h6><li>Uso de mamadeira:                     <y style="color: blue "> <?php echo $mamadeira_anam_atender_pac ?>         </y></li></h6>
               <h6><li>Uso de chupeta:                       <y style="color: blue "> <?php echo $chupeta_anam_atender_pac ?>           </y></li></h6>
               <h6><li>Chupa o dedo:                         <y style="color: blue "> <?php echo $chupa_dedo_anam_atender_pac ?>        </y></li></h6>
               <h6><li>Nível de higiene:                     <y style="color: blue "> <?php echo $higiene_anam_atender_pac ?>           </y></li></h6>
               <h6><li>Ocorrencia de traumas bucais:         <y style="color: blue "> <?php echo $trauma_bucal_anam_atender_pac ?>      </y></li></h6>
               <h6><li>Histórico de cárie na famímia:        <y style="color: blue "> <?php echo $hist_carie_familia_anam_atender_pac ?></y></li></h6>
               <h6><li>Observações:                          <y style="color: blue "> <?php echo $campo_observacoes_anam_atender_pac ?> </y></li></h6>
               <h6><li>data do registro:                     <y style="color: blue "> <?php echo $data_registro_anam_atender_pac ?>     </y></li></h6>
               <h6><li>Cadastrante deste atendimento:        <y style="color: blue "> <?php echo $cadastrante_anam_atender_pac ?>       </y></li></h6>


            </div>
         </div>
         <div class="modal-footer">
           <button class="btn btn-dark"  data-dismiss="modal" > Fechar </button>
        </div>
      </div>
    </div>
  </div>