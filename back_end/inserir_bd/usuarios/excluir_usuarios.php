

   <!--_______________________________EDITAR_USUARIOS__________________________________-->


<?php

   include_once ("../../conexao_bd.php");
   @session_start();


    $id_excluir = filter_input(INPUT_POST,'id_excluir', FILTER_SANITIZE_STRING);


    
  //echo "id =" .  $id_excluir;  //testes para saber se o id está send chamado
  //($_GET["id_excluir"]);


      $data_base = new db ();
      $link = $data_base->conecta_mysqli();   
       $resultado_excluir="DELETE from usuarios where id ='$id_excluir'";
       $resultado_excluir = mysqli_query ($link,$resultado_excluir);

     if (mysqli_query ($link,$resultado_excluir)){

    
       header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_exclui_usu_erro=1");



    } else { 

         header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_exclui_usu_sucess=1");

      

      



      }








     




?>