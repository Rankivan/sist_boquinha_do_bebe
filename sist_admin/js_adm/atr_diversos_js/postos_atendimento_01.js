
 	 
 	
 
    $("#input_edita_bairro_posto").hide();
    $("#botao_bairro_editar_voltar").hide();
    $("#botao_editar_novo_bairro").hide();
    $("#salvar_postos_btn").hide();

    


   $("#input_bairro_posto").hide();
   $("#botao_bairro_posto_aterna_voltar").hide();
   $('#select_postos_js').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
    


   $("#postos_atend_diversos_js").hide();
   $("#eventos_diversos_js").hide();

   
 
  



 function botao_add_bairro_editar_js (){


 	  $('#select_edita_postos_js').prop('disabled', true);//ESTE CÓDIGO RETIRA O DISABLE
 	  $('#insere_bairro_man_editar').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE

      $("#input_edita_bairro_posto").show();
      $("#botao_bairro_editar_voltar").show();

      $("#select_bairros_edita").hide();
      $("#botao_editar_novo_bairro").hide();

 }

 function botao_bairro_posto_aterna_voltar_editar (){

 	  $('#select_edita_postos_js').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
 	  $('#insere_bairro_man_editar').prop('disabled', true);//ESTE CÓDIGO RETIRA O DISABLE


      $("#input_edita_bairro_posto").hide();
      $("#botao_bairro_editar_voltar").hide();

      $("#select_bairros_edita").show();
      $("#botao_editar_novo_bairro").show();
 }

 function editar_postos_atendimento(){

 	$("#botao_editar_novo_bairro").show();
 	$('#nome_posto_edit').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
 	$('#select_edita_postos_js').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
 	$('#endereco_posto_edit').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
 	$('#telefone_posto_edit').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
   $("#salvar_postos_btn").show();
   $("#editar_postos_btn").hide();

 }


  function fechar_editar_postos_atendimento(){

  $("#botao_editar_novo_bairro").hide();
  $('#nome_posto_edit').prop('disabled', true);//ESTE CÓDIGO RETIRA O DISABLE
  $('#select_edita_postos_js').prop('disabled', true);//ESTE CÓDIGO RETIRA O DISABLE
  $('#endereco_posto_edit').prop('disabled', true);//ESTE CÓDIGO RETIRA O DISABLE
  $('#telefone_posto_edit').prop('disabled', true);//ESTE CÓDIGO RETIRA O DISABLE
 }




     function alterna_cadastrar_ponto_atend_js(){

    $("#postos_atend_diversos_js").show();
    $("#conteudo_home_js").hide();
    $("#eventos_diversos_js").hide();




   }


   function botao_add_bairro_js (){

    $("#select_bairros_posto").hide();
    $("#botao_bairro_posto_aterna").hide();
    $("#input_bairro_posto").show();
    $("#botao_bairro_posto_aterna_voltar").show();

    $('#insere_bairro_man').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
    $('#select_postos_js').prop('disabled', true);//ESTE CÓDIGO Ativa O DISABLE

   }

   function botao_bairro_posto_aterna_voltar (){

    $("#select_bairros_posto").show();
    $("#botao_bairro_posto_aterna").show();
    $("#input_bairro_posto").hide();
    $("#botao_bairro_posto_aterna_voltar").hide();

     $('#insere_bairro_man').prop('disabled', true);//ESTE CÓDIGO Ativa O DISABLE
     $('#select_postos_js').prop('disabled', false);//ESTE CÓDIGO RETIRA O DISABLE
    

   }



   function altrna_cadastrar_evento_js(){

    
    $("#conteudo_home_js").hide();
    $("#eventos_diversos_js").show();


   }


