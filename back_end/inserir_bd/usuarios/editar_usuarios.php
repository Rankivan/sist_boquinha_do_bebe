
              <!--_______________________________EDITAR_USUARIOS__________________________________-->
<?php 
   
   include_once ("../../conexao_bd.php");
   @session_start();



     


      $nome               = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
      $sobrenome          = filter_input(INPUT_POST,'sobrenome', FILTER_SANITIZE_STRING);
      $data_nascimento    = filter_input(INPUT_POST,'data_nascimento', FILTER_SANITIZE_STRING);
      $telefone           = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_STRING);
      $tipo_usuario       = filter_input(INPUT_POST,'tipo_usuario', FILTER_SANITIZE_STRING);
      $adicional_usuario  = filter_input(INPUT_POST,'adicional_usuario', FILTER_SANITIZE_STRING);
      $nivel_acesso       = filter_input(INPUT_POST,'nivel_acesso', FILTER_SANITIZE_STRING);
      $observacoes        = filter_input(INPUT_POST,'observacoes', FILTER_SANITIZE_STRING);
      $e_mail             = filter_input(INPUT_POST,'e_mail', FILTER_SANITIZE_STRING);
      $senha              = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);
      $cadastrante        = filter_input(INPUT_POST,'cadastrante', FILTER_SANITIZE_STRING);
      $id_usuario_edit    = filter_input(INPUT_POST,'id_usu_edit', FILTER_SANITIZE_STRING);
      $e_mail             = filter_input(INPUT_POST,'e_mail', FILTER_SANITIZE_STRING);
      $e_mail_confere     = filter_input(INPUT_POST,'e_mail_confere', FILTER_SANITIZE_STRING);

    
      /* echo("id: $id_usuario_edit"); 
       echo("nome: $nome");    //TESTES para saber se estão sendo chamadas
       echo("sobrenome: $sobrenome");
       echo("data_nascimento: $data_nascimento");
       echo("telefone: $telefone");
       echo("tipo_usuario: $tipo_usuario");
       echo("adicional_usuario: $adicional_usuario");
       echo("observacoes: $observacoes");
       echo("nivel_acesso: $nivel_acesso");
       echo("e_mail: $e_mail");
       echo("senha: $senha"); 
       echo("cadastrante: $cadastrante"); 
       echo("senha: $senha");  */
            
               //Verificar se o usuário ja está cadastrado somente quando o email for alterado.
             if ($e_mail_confere != $e_mail ) {
               # code...
             $consulta_email_edit = $pdo->query("select * from usuarios where e_mail = '$e_mail'");
             $dados_dup_edit_usu = $consulta_email_edit->fetchAll(PDO::FETCH_ASSOC);
             $linhas_dup_edit_usu = count($dados_dup_edit_usu); 
              if ($linhas_dup_edit_usu != 0) {

        header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_edita_usu_verifi_erro=1");

              exit();


              } }

          
            
              $data_base = new db ();
              $link = $data_base->conecta_mysqli();
              $editar_usuarios = "UPDATE usuarios SET nome = '$nome', 
              sobrenome = '$sobrenome',
              data_nascimento = '$data_nascimento',
              telefone = '$telefone',
              tipo_usuario = '$tipo_usuario',
              adicional_usuario = '$adicional_usuario',
              nivel_acesso = '$nivel_acesso',
              observacoes = '$observacoes',
              e_mail = '$e_mail',
              senha = '$senha',
              cadastrante = '$cadastrante'
              WHERE id ='$id_usuario_edit'";
             
            //$inserir_usuarios = "INSERT INTO usuarios () VALUES ('','','','','')";

              $resultado_edicao = mysqli_query($link,$editar_usuarios);
              if(mysqli_affected_rows($link)){

                header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_edita_usu_sucess=1");
                 // header('location:../../tela_login.php?erro=1');//MENSAGEM DE ERRO
              } else {

                header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_edita_usu_erro=1");
              } 
               //__________________________________________________________________________________________
              //$nome_sessão_cadastro = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
              //$_SESSION['nome'] =  $nome_sessão_cadastro;


        

 /*

      $nome               = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
      $sobrenome          = filter_input(INPUT_POST,'sobrenome', FILTER_SANITIZE_STRING);
      $data_nascimento    = filter_input(INPUT_POST,'data_nascimento', FILTER_SANITIZE_STRING);
      $telefone           = filter_input(INPUT_POST,'telefone', FILTER_SANITIZE_STRING);
      $tipo_usuario       = filter_input(INPUT_POST,'tipo_usuario', FILTER_SANITIZE_STRING);
      $adicional_usuario  = filter_input(INPUT_POST,'adicional_usuario', FILTER_SANITIZE_STRING);
      $nivel_acesso       = filter_input(INPUT_POST,'nivel_acesso', FILTER_SANITIZE_STRING);
      $observacoes        = filter_input(INPUT_POST,'observacoes', FILTER_SANITIZE_STRING);
      $e_mail             = filter_input(INPUT_POST,'e_mail', FILTER_SANITIZE_STRING);
      $senha              = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_STRING);
      $cadastrante        = filter_input(INPUT_POST,'cadastrante', FILTER_SANITIZE_STRING);

 */

 


?> 