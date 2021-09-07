


$("#titulo_editar_anamnese").hide();
$("#btn_voltar_cadastro").hide();
$("#editar_anamnese_js").hide();
$("#btn_salvar_paciente").hide();

$("#uso_remedio_gest_anam_comp_1").hide();
$("#tratam_med_anam_comp_1").hide();
$("#anomalia_ao_nasc_anam_comp_1").hide();
$("#dificuldade_alim_anam_comp_1").hide();
$("#trauma_bucal_anam_comp_1").hide();



function alterna_edit_anam (){

$("#editar_pacientes_js").hide();
$("#editar_anamnese_js").show();
$("#btn_ver_anamnese").hide();
$("#btn_voltar_cadastro").show();
$("#titulo_editar_anamnese").show();
$("#titulo_editar_paciente").hide();

}


function alterna_voltar_edit_pac (){

$("#editar_pacientes_js").show();
$("#editar_anamnese_js").hide();
$("#btn_ver_anamnese").show();
$("#btn_voltar_cadastro").hide();
$("#titulo_editar_anamnese").hide();
$("#titulo_editar_paciente").show();


}




 function btn_editar_anam_disabled (){

      $('#nome_pac_editar').prop('disabled', false);
      $('#sobrenome_pac_editar').prop('disabled', false);

      $('#data_nascimento_pac_editar').prop('disabled', false);
      $('#sexo_pac_editar').prop('disabled', false);

      $('#numero_sus_pac_editar').prop('disabled', false);
      $('#cidade_pac_editar').prop('disabled', false);

      $('#endereco_pac_editar').prop('disabled', false);
      $('#bairro_pac_editar').prop('disabled', false);

      $('#nome_posto_pac_editar').prop('disabled', false);
      $('#nome_responsavel_pac_editar').prop('disabled', false);

      $('#telefone_responsavel_pac_editar').prop('disabled', false);
      $('#cpf_responsavel_pac_editar').prop('disabled', false);

    

    //#####################_ANAMNESE_######################


      $('#local_pre_natal_anam').prop('disabled', false);
      $('#uso_remedio_gest_anam').prop('disabled', false);

      $('#uso_remedio_gest_anam_comp').prop('disabled', false);
      $('#anomalia_ao_nasc_anam').prop('disabled', false);

      $('#anomalia_ao_nasc_anam_comp').prop('disabled', false);
      $('#tratam_med_anam').prop('disabled', false);

      $('#tratam_med_anam_comp').prop('disabled', false);
      $('#tipo_de_parto_anam').prop('disabled', false);

      $('#qtd_irmaos_anam').prop('disabled', false);
      $('#pediatra_resp_anam').prop('disabled', false);

      $('#alim_materna_anam').prop('disabled', false);
      $('#dificuldade_alim_anam').prop('disabled', false);

      $('#dificuldade_alim_anam_comp').prop('disabled', false);
      $('#trauma_bucal_anam_comp').prop('disabled', false);

      
      $('#amamentacao_in').prop('disabled', false);
      $('#mamadeira_anam').prop('disabled', false);

      $('#chupeta_anam').prop('disabled', false);
      $('#chupa_dedo_anam').prop('disabled', false);

      $('#higiene_anam').prop('disabled', false);
      $('#trauma_bucal_anam').prop('disabled', false);

      $('#trauma_bucal_anam_comp').prop('disabled', false);
      $('#hist_carie_familia_anam').prop('disabled', false);

      $('#campo_observacoes_anam').prop('disabled', false);
      
      $("#btn_editar_paciente").hide();
      $("#btn_salvar_paciente").show();



      $("#uso_remedio_gest_anam_comp_1").show();
      $("#tratam_med_anam_comp_1").show();
      $("#anomalia_ao_nasc_anam_comp_1").show();
      $("#dificuldade_alim_anam_comp_1").show();
      $("#trauma_bucal_anam_comp_1").show();

     
    
    }


