
<?php 
   
   include_once ("../conexao_bd.php");
   @session_start();

 $resultado_registro_usu = 1;
 
         if($resultado_registro_usu==1){

              header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm");

           // header('location:../../tela_login.php?erro=1');//MENSAGEM DE ERRO


         }




  ?>         