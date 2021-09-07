
$("#btn_voltar_form_js").hide();
$("#btn_salvar_form_js").hide();
$("#cadastrar_anamnese_titulo_js").hide();
$("#formulario_anamnese_js").hide();





 function alterna_tela__modal_pacientes() {
   //alert('Cadastro realizado, agora preencha a anamnese do paciente')

   $("#formulario_pacientes_js").hide();
   $("#cadastrar_paciente_titulo_js").hide();
   $("#cadastrar_anamnese_titulo_js").show();
   $("#formulario_anamnese_js").show();

   $("#btn_avancar_form_js").hide();
   $("#btn_salvar_form_js").show();
   $("#btn_voltar_form_js").show();

 }

 function btn_voltar_tela_pac (){

   $("#formulario_pacientes_js").show();
   $("#cadastrar_paciente_titulo_js").show();
   $("#cadastrar_anamnese_titulo_js").hide();
   $("#formulario_anamnese_js").hide();

   $("#btn_avancar_form_js").show();
   $("#btn_salvar_form_js").hide();
   $("#btn_voltar_form_js").hide();

}