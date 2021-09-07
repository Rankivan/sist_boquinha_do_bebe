           
  <div>

    <h5>Saúde:</h5><br>
               <div class="form-row">
                    <div class="form-group col-md-4">
                      <label >Local do pré natal</label>
                      <input value="<?php echo ($local_pre_natal_anam)?>" id="local_pre_natal_anam" name="local_pre_natal_anam_edit" type="text" class="form-control"  placeholder="Nome da cidade"required="" disabled>
                    </div>

                     <!--__________________________-->

                      <div class="form-group col-sm-3">
                          <label>Usou remédios na gestação</label>
                            <select  id="uso_remedio_gest_anam" name="uso_remedio_gest_anam_edit"  class="form-control"  id="remedio_select_js" onchange="function_remedio_select_js()"required="" disabled>
                              <option value="<?php echo ($uso_remedio_gest_anam)?>"><?php echo ($uso_remedio_gest_anam)?></option>
                              <option value="sim">Sim</option>
                              <option value="nao">Não</option>
                             >
                            </select>   
                      </div>



                      <div  class="form-group col-md-5" id="uso_remedio_gest_anam_comp_1">
                            <label style="color: blue" >Nome do(s) medicamento(s)</label>
                            <input  value="" id="uso_remedio_gest_anam_comp" name="uso_remedio_gest_anam_comp_edit" type="text" class="form-control"  placeholder="Nome do(s) medicamento(s)" disabled>
                      
                      </div>

                      
                    <!--__________________________-->
                  </div>


          <div class="form-row">

                     <!--__________________________-->
                    <div class="form-group col-md-3">
                    
                        <label >Anomalia ao nascer</label>
                            <select id="anomalia_ao_nasc_anam" name="anomalia_ao_nasc_anam_edit"  class="form-control" onchange="function_anomalia_select_js()" id="anomalia_select_js" required="" disabled>
                              <option value="<?php echo ($anomalia_ao_nasc_anam)?>"><?php echo ($anomalia_ao_nasc_anam)?></option>
                              <option value="sim">Sim</option>
                              <option value="nao">Não</option>
                             >
                            </select>
                        </div>
                        <div  class="form-group col-md-5" id="anomalia_ao_nasc_anam_comp_1" >
                          <label style="color: blue" >Descrva a anomalia</label>
                          <input id="anomalia_ao_nasc_anam_comp" name="anomalia_ao_nasc_anam_comp_edit" type="text" class="form-control"  placeholder="Anomalia" disabled>
                        </div>
                       <!--__________________________-->


                   <!--___________________________-->
                    <div class="form-group col-md-3">
                    
                        <label > Realiza Tratamento médico</label>
                            <select id="tratam_med_anam" name="tratam_med_anam_edit" class="form-control" id="tratamento_select_js" onchange="function_tratamento_select_js()" required="" disabled>
                              <option value="<?php echo ($tratam_med_anam)?>"><?php echo ($tratam_med_anam)?></option>
                              <option value="sim">Sim</option>
                              <option value="nao">Não</option>
                             >
                            </select>
                    </div>

                        <div class="form-group col-md-5"  id="tratam_med_anam_comp_1">
                          <label style="color: blue" >Descrva o tratamento </label>
                          <input id="tratam_med_anam_comp" name="tratam_med_anam_comp_edit" type="text" class="form-control"  placeholder="Tratamento" disabled>
                        </div>
                  <!--___________________________-->


                    <div class="form-group col-md-2">
                          <label>Tipo de parto</label>
                          <select id="tipo_de_parto_anam" name="tipo_de_parto_anam_edit"  class="form-control" required="" disabled>
                            <option value="<?php echo ($tipo_de_parto_anam)?>"><?php echo ($tipo_de_parto_anam)?></option>
                            <option value="normal">Normal</option>
                            <option value="cesariana">Cesariana</option>
                           >
                          </select>
                    </div>
                     <div class="form-group col-md-2">
                          <label>Possui irmão(s)</label>
                          <select id="qtd_irmaos_anam" name="qtd_irmaos_anam_edit" class="form-control"required="" disabled>
                            <option value="<?php echo ($qtd_irmaos_anam)?>"><?php echo ($qtd_irmaos_anam)?></option>
                            <option value="nao">Não</option>
                            <option value="apenas um">Apenas um</option>
                            <option value="mais de um">Mais de um</option>
                            <option value="mais de cinco">Mais de cinco</option>
                           >
                          </select>
                    </div>

                    <div class="form-group col-md-4">
                      <label >Pediatra responsável</label>
                      <div class="input-group flex-nowrap">
                       
                        <input value="<?php echo ($pediatra_resp_anam_dr)?>" id="pediatra_resp_anam" name="pediatra_resp_anam_edit" type="text" class="form-control" placeholder="Nome da pediatra rasponsável"required="" disabled>
                      </div>
                    </div>



           </div> <hr>

         <h5> Alimentação: </h5> <br>



                  <div class="form-row">

                    <div class="form-group col-md-4">
                      <label >Amamentação materna</label>
                          <select id="alim_materna_anam" name="alim_materna_anam_edit" class="form-control" required="" disabled>
                            <option value="<?php echo ($alim_materna_anam)?>"><?php echo ($alim_materna_anam)?></option>
                            <option value="sem amamentacao">Sem amamentação</option>
                            <option value="sem horario definido">Sem horario definido</option>
                            <option value="apenas de dia">Apenas de dia</option>
                            <option value="apenas de noite">Apenas de noite</option>
                            <option value="dia e noite">Dia e noite</option>

                           >
                          </select>
                    </div>

                   <!--___________________________-->

                    <div class="form-group col-md-4">
                      <label >Dificuldade na amamentação</label>
                          <select id="dificuldade_alim_anam" name="dificuldade_alim_anam_edit" class="form-control" id="amamentacao_select_js" onchange="function_amamentacao_select_js()"required="" disabled>
                            <option value="<?php echo ($dificuldade_alim_anam)?>"><?php echo ($dificuldade_alim_anam)?></option>
                            <option value="sim">Sim</option>
                            <option value="um pouco">Um pouco</option>
                            <option value="nao">Não</option>
                           

                           >
                          </select>
                    </div>

                    <div  class="form-group col-md-4" id="dificuldade_alim_anam_comp_1">
                      <label style="color: blue" >Descreva dificuldade</label>
                      <input  id="dificuldade_alim_anam_comp" name="dificuldade_alim_anam_comp_edit" type="text" class="form-control" disabled>
                    </div>

                     <!--___________________________-->


                   </div>


                  <div class="form-row">
                    <div class="form-group col-md-4">

                      <label >Utiliza mamadeira</label>
                          <select id="mamadeira_anam" name="mamadeira_anam_edit"  class="form-control"required="" disabled>
                            <option value="<?php echo ($mamadeira_anam)?>"><?php echo ($mamadeira_anam)?></option>
                            <option value="sim muito">Sim, muito</option>
                            <option value="um pouco">Um pouco</option>
                            <option value="nao utiliza">Não utiliza</option>
                           >
                          </select>
                    </div>

                    <div class="form-group col-md-2">
                      <label >Usa chupeta</label>
                        <select id="chupeta_anam" name="chupeta_anam_edit" class="form-control" required="" disabled>
                            <option  value="<?php echo ($chupeta_anam)?>"><?php echo ($chupeta_anam)?></option>
                            <option value="sim muito">Sim, muito</option>
                            <option value="um pouco">Um pouco</option>
                            <option value="nao utiliza">Não utiliza</option>
                           >
                        </select>
                    </div>

                     <div class="form-group col-md-2">
                      <label >Chupa o dedo</label>
                        <select id="chupa_dedo_anam" name="chupa_dedo_anam_edit" class="form-control" required="" disabled>
                            <option value="<?php echo ($chupa_dedo_anam)?>"><?php echo ($chupa_dedo_anam)?></option>
                            <option value="sim muito">Sim, muito</option>
                            <option value="um pouco">Um pouco</option>
                            <option value="nao utiliza">Não utiliza</option>
                           >
                        </select>
                    </div>



                    <div class="form-group col-md-2">
                      <label > Possui Higiene</label>
                       <select  id="higiene_anam" name="higiene_anam_edit"  class="form-control" required="" disabled>
                            <option value="<?php echo ($higiene_anam)?>"><?php echo ($higiene_anam)?></option>
                            <option value="sim muito">Sim, muito</option>
                            <option value="um pouco">Um pouco</option>
                            <option value="nao">Não </option>
                           >
                        </select>
                    </div>

                 </div> <hr>

                 <h5>Ocorrencias</h5> <br>

                 <div class="form-row">

                    <div class="form-group col-md-4">
                       <!--___________________________-->
                      <label > Traumatismo bucal </label>
                        <select id="trauma_bucal_anam" name="trauma_bucal_anam_edit" class="form-control" id="trauma_select_js" onchange="function_trauma_select_js()" required="" disabled>
                            <option value="<?php echo ($trauma_bucal_anam)?>"><?php echo ($trauma_bucal_anam)?></option>
                            <option value="nao sabe informar">Não sabe informar</option>
                            <option value="nunca ocorreu">Nunca ocorreu</option>
                            <option value="sim faz menos de um mes">Sim, faz menos de um mês</option>
                            <option value="sim faz mais de um mes">Sim, faz mais de um mês</option>
                            <option value="sim faz mais de seis meses">Sim, faz mais de 6 meses</option>
                           
                        </select>
                    </div>
                   
                    <div   class="form-group col-md-4" id="trauma_bucal_anam_comp_1">
                      <label style="color: blue" >Descreva o trauma</label>
                      <input id="trauma_bucal_anam_comp" name="trauma_bucal_anam_comp_edit" type="text" class="form-control" disabled>
                    </div>
                     <!--___________________________-->

                    <div class="form-group col-md-4">
                       <!--___________________________-->
                      <label > Histórico de carie na família</label>
                        <select id="hist_carie_familia_anam" name="hist_carie_familia_anam_edit" class="form-control"required="" disabled>
                            <option value="<?php echo ($hist_carie_familia_anam)?>"><?php echo ($hist_carie_familia_anam)?></option>
                            <option value="nao sabe informar">Não sabe informar</option>
                            <option value="nao">Não</option>
                            <option value="sim a mae">Sim, a mãe</option>
                            <option value="sim o pai">Sim, o pai</option>
                            <option value="sim o pai e mae">Sim, pai e mãe</option>
                            <option value="sim irmao(s)">Sim, irmão(s)</option>
                            <option value="sim pai mae e irmao(s)">Sim, pai, mãe e irmão(s)</option>

                        </select><br>

                         <!-- ocultos-->
                       
                    </div>
                 </div>

                 <div class="form-group">
                  <label for="exampleFormControlTextarea1">Observações</label>
                  <textarea name="campo_observacoes_anam_edit"  class="form-control" id="campo_observacoes_anam" rows="3" disabled>
                    <?php echo ($campo_observacoes_anam)?> 
                  </textarea>
                </div>

                <input type="hidden" name="id_anam_edit" value="<?php echo $id_anam ?>">

                
         </div>