<?php 
   
   include_once ("../conexao_bd.php");
   @session_start();

 $resultado_registro_pac = 1;
 
         if($resultado_registro_pac==1){

              header("location: ../../../sist_admin/telas_adm/adm.php?acao=pacientes_adm");

           // header('location:../../tela_login.php?erro=1');//MENSAGEM DE ERRO


         }




  ?>         