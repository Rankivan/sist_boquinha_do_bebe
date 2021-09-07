


   $('#salvar_evento_btn').hide();

  function btn_editar_evento () {

  $('#salvar_evento_btn').show();
  $('#editar_evento_btn').hide();



    $('#nome_evento_edit').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
 	$('#data_inicio_evento_edit').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
 	$('#horario_inicio_evento_edit').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
 	$('#data_final_evento_edit').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
 	$('#horario_final_evento_edit').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
 	$("#nome_posto_evento_edit").prop('disabled', false);
 	$('#observaces_evento_edit').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
 	$('#presenca_evento_edit').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE

  
  


  }