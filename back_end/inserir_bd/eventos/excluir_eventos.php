 <!--_______________________________EDITAR_USUARIOS__________________________________-->


<?php

   include_once ("../../conexao_bd.php");
   @session_start();


    $id_evento_excluir = filter_input(INPUT_POST,'id_evento_excluir', FILTER_SANITIZE_STRING);


    
  //echo "id =" .  $id_excluir;  //testes para saber se o id está send chamado
  //($_GET["id_excluir"]);


      $data_base_evento_excluir = new db ();
      $link_evento_excluir = $data_base_evento_excluir->conecta_mysqli();   

       $resultado_evento_excluir = "DELETE from eventos_atendimento where id_evento ='$id_evento_excluir'";
       $resultado_evento_excluir = mysqli_query ($link_evento_excluir,$resultado_evento_excluir);

     if (mysqli_query ($link_evento_excluir,$resultado_evento_excluir)){

    
 
   header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&eventos=1&retorno_excluir=1");




    } else { 

         

         header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&eventos=1&retorno_excluir=2");
    
      



      }








     




?>