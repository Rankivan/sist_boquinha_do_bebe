<?php

   include_once ("../../conexao_bd.php");
   @session_start();


    $id_posto_excluir = filter_input(INPUT_POST,'id_posto_excluir', FILTER_SANITIZE_STRING);


    
  //echo "id =" .  $id_excluir;  //testes para saber se o id está send chamado
  //($_GET["id_excluir"]);


      $data_base_excluir_posto = new db ();
      $link_excluir_posto = $data_base_excluir_posto->conecta_mysqli();   
       $resultado_excluir_posto ="DELETE from posto_atendimento where id_posto ='$id_posto_excluir'";
       $resultado_excluir_posto = mysqli_query ($link_excluir_posto,$resultado_excluir_posto);

     if (mysqli_query ($link_excluir_posto,$resultado_excluir_posto)){

        header("location: ../../../sist_admin/telas_adm/adm.php?diversos_adm&posto_atend=1&msg_exclui_posto_erro=1");


       //header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_exclui_usu_erro=1");

    } else { 

    header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&posto_atend=1&msg_exclui_posto_sucess=1");



      }




?>