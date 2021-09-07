
   texto

  <?php

    session_start();

      unset($_SESSION['e_mail']);
      header('location: ../../tela_login.php');


  ?>