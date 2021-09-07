<?php 
   
   include_once ("../conexao_bd.php");
   @session_start();

 $resultado_registro_posto = 1;
 
         if($resultado_registro_posto==1){

              header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&posto_atend=1");

           // header('location:../../tela_login.php?erro=1');//MENSAGEM DE ERRO


         }




  ?>         