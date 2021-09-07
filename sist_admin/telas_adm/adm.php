

    <!--________________CÓDIGO PHP_________________________-->

<?php 
    require_once("../../back_end/conexao_bd.php");
     @session_start();
      if(!isset($_SESSION['e_mail'])) {
      header('location:../../tela_login.php');
 }

     $menu_1 = 'home_adm';
     $menu_2 = 'usuarios_adm'; 
     $menu_3 = 'pacientes_adm';
     $menu_4 = 'diversos_adm';
     $menu_5 = 'opcoes_adm';

  
    // Verifica se o menu está ativo

              if (@$_GET['acao'] == $menu_1 ) {   
              $menu_1_ativo = 'active';}

              elseif (@$_GET['acao'] == $menu_2) {
              $menu_2_ativo = 'active';}

              elseif (@$_GET['acao'] == $menu_3) {
              $menu_3_ativo = 'active';}

              elseif (@$_GET['acao'] == $menu_4) {
              $menu_4_ativo = 'active';}

              elseif (@$_GET['acao'] == $menu_5) {
              $menu_5_ativo = 'active';}
               else { 

              $menu_1_ativo = 'active';

             }

              //____________Barra de navegação________________

             $barra_navegacao = 'barra_navegacao.php';

              //____________Telas da área HOME_________________

              //____________Telas da área USUARIOS_________________
              //____________Telas da área PACIENTES_________________
              //____________Telas da área DIVERSOS_________________

              $eventos_diversos      = 'atr_diversos/eventos_diversos.php';
              $postos_atend_diversos = 'atr_diversos/ponto_atend_diversos.php';

              //____________Telas da área OPÇÕES_________________
    ?>

             <!--___________________________________________________-->

<!DOCTYPE html>

 <html lang="pt-br">
 <head>
  
   <meta http-equiv="Content-Type" content="text/html;" charset="utf-8">

   
	<title> Boquinha do Bebê </title>


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	      <link href="css/bootstrap.min.css" rel="stylesheet">
        <link  rel = "ícone de atalho"  href = "../../imagens/five_icon/five_icon_web/favicon.ico"  type = "image / x-icon" > 
        <link rel="icon" href="../../imagens/five_icon/five_icon_web/favicon.ico" />
	 
	      <meta name="viewport" content="width=device-width, initial-scale=0.8">

        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"> </script>

        <link rel="stylesheet" type="text/css" href="../estilos_css_adm/tela_adm_1.css">


        <link href='atr_diversos/atr_calendario/main.css' rel='stylesheet'/>




</head>
<!--___________________________________________________________________________________-->
<!--___________________________________________________________________________________-->

<body style="background-color:#e5e3e3">
  <div><!--geral-->

    	<!--vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv-->
      <!--__________________________________BARRA_NAV___________________________________-->
        <div>

          <?php include($barra_navegacao); ?>

       </div> <!-- /CONTAINER -->

    <!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
  </div><!--geral-->
</body>
</html>
<!--___________________________________________________________________________________-->
<!--___________________________________________________________________________________-->





<!--______________________________REFERENCIA SCRIPTS___________________________________-->


<!--___________GERAL____________-->


<!--___________HOME____________-->
 <script src ="../js_adm/atr_home_atendimentos_js/atendimento.js"></script>
<!--<script src ="../js_adm/atr_home_atendimentos_js/atendimento.js"></script>-->
<!-- este caminho foi adicionado na tela modal_home_atend -->

<!--___________USUÁRIOS____________-->
<script src ="../js_adm/atr_usuarios_js/cadastro_usuarios_0022.js"></script>


<!--___________PACIENTES____________-->
<script src ="../js_adm/atr_pacientes_js/cadastro_pacientes_0111.js"></script>
<script src ="../js_adm/atr_pacientes_js/cadastro_anamnese_01.js"></script>
<script src ="../js_adm/atr_pacientes_js/editar_anamnese_pacientes_0121.js"></script>


<!--___________DIVERSOS____________-->

<script src ="../js_adm/atr_diversos_js/postos_atendimento_01.js"></script>
<script src ="../js_adm/atr_diversos_js/atr_eventos_01.js"></script>

<!--___________OPÇÕES____________-->





    









  


       