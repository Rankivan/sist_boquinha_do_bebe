
   $("#aluno_in").hide();
   $("#dentista_in").hide();
   $("#auxiliar_in").hide();

   $("#aluno_in_edit").hide();
   $("#dentista_in_edit").hide();
   $("#auxiliar_in_edit").hide();

  $("#btn_salvar_usu").hide();



       tipo_usuario_select_js = function (){

        if($('#tipo_usu_select').val() == 0 || 'Auxiliar'){

           $("#aluno_in").hide();
           $("#dentista_in").hide();
           $("#auxiliar_in").hide();
          }

         if($('#tipo_usu_select').val() == 'Aluno'){

          $("#aluno_in").show();
          $("#dentista_in").hide();
          $("#auxiliar_in").hide();
           }

         if($('#tipo_usu_select').val() == 'Denstista'){

          $("#aluno_in").hide();
          $("#dentista_in").show();
          $("#auxiliar_in").hide();
           }

         if($('#tipo_usu_select').val() == 'Outro'){

          $("#aluno_in").hide();
          $("#dentista_in").hide();
          $("#auxiliar_in").show();

           }   
      }


             tipo_usuario_select_edit_js = function (){

        if($('#tipo_usu_edit_select').val() == 0 || 'Auxiliar'){

           $("#aluno_in_edit").hide();
           $("#dentista_in_edit").hide();
           $("#auxiliar_in_edit").hide();
           $("#entrada_edit").hide();
          
          }

         if($('#tipo_usu_edit_select').val() == 'Aluno'){

          $("#aluno_in_edit").show();
          $("#dentista_in_edit").hide();
          $("#auxiliar_in_edit").hide();
          $("#entrada_edit").hide();
           }

         if($('#tipo_usu_edit_select').val() == 'Denstista'){

          $("#aluno_in_edit").hide();
          $("#dentista_in_edit").show();
          $("#auxiliar_in_edit").hide();
          $("#entrada_edit").hide();
           }

         if($('#tipo_usu_edit_select').val() == 'Outro'){

          $("#aluno_in_edit").hide();
          $("#dentista_in_edit").hide();
          $("#auxiliar_in_edit").show();
          $("#entrada_edit").hide();

           }   
      }



  
    function btn_editar (){

      $('#input_edit_nome').prop('disabled', false);
      $('#input_edit_sobrenome').prop('disabled', false);
      $('#input_edit_data_nascimento').prop('disabled', false);
      $('#input_edit_data_e_mail').prop('disabled', false);
      $('#input_edit_data_senha').prop('disabled', false);
      $('#input_edit_telefone').prop('disabled', false);
      $('#tipo_usu_edit_select').prop('disabled', false);

          $('#input_edit_add_aluno').prop('disabled', false);
          $('#input_edit_add_cro').prop('disabled', false);
          $('#auxiliar_in_edit').prop('disabled', false);

       $('#input_edit_observacoes').prop('disabled', false);
       $('#input_edit_nivel_acesso').prop('disabled', false);
       $('#input_edit_add_funcao').prop('disabled', false);

       $("#cadastrante_edit_usu").hide();

       $("#btn_editar_usu").hide();
       $("#btn_salvar_usu").show();






    }

      





