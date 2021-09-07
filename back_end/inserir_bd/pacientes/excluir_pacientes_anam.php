 <!--_______________________________EDITAR_USUARIOS__________________________________-->


<?php

   include_once ("../../conexao_bd.php");
   @session_start();


    $id_excluir_pac = filter_input(INPUT_POST,'id_excluir_pac', FILTER_SANITIZE_STRING);


    
  //echo "id =" .  $id_excluir;  //testes para saber se o id está send chamado
  //($_GET["id_excluir"]);


      $data_base_excluir_pac = new db ();
      $link_excluir_pac = $data_base_excluir_pac->conecta_mysqli();   

       $resultado_excluir_pac ="DELETE from pacientes where id_pac ='$id_excluir_pac'";
       $resultado_excluir_pac = mysqli_query ($link_excluir_pac,$resultado_excluir_pac);


      $data_base_excluir_anam = new db ();
      $link_excluir_anam = $data_base_excluir_anam->conecta_mysqli();   

       $resultado_excluir_anam ="DELETE from anamnese where cod_pac_anam ='$id_excluir_pac'";
       $resultado_excluir_anam = mysqli_query ($link_excluir_anam,$resultado_excluir_anam);



  


     if (mysqli_query ($link_excluir_pac,$resultado_excluir_pac)){

        echo "excluiu 1";

       //header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_exclui_usu_erro=1");

        } else { 

         echo "deu ruim 1";

        }


     if (mysqli_query ($link_excluir_anam,$resultado_excluir_anam)){

         echo "excluiu 2";

       //header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_exclui_usu_erro=1");

        } else { 

         echo "deu ruim 2";


        }


?>