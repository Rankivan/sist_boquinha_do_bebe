

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
     
    
      
      // data e hora serão definidos na entrada de dados

      //$VARIAVEL      = filter_input(INPUT_POST,'', FILTER_SANITIZE_STRING);

         /*if(isset($_POST['administrador'])) {  //Teste para saber se é adm ou não
            $nivel_acesso = var_dump('administrador');
          } else {
            $nivel_acesso = var_dump( "não é 'administrador'");
          }*/

       /*echo("nome: $nome");    //TESTES para saber se estão sendo chamadas
       echo("sobrenome: $sobrenome");
       echo("data_nascimento: $data_nascimento");
       echo("telefone: $telefone");
       echo("tipo_usuario: $tipo_usuario");
       echo("adicional_usuario: $adicional_usuario");
       echo("observacoes: $observacoes");
       echo("nivel_acesso: $nivel_acesso");
       echo("e_mail: $e_mail");
       echo("senha: $senha"); */


      //VERIFICA SE USUÁRIO JÁ EXISTE
      $consulta_dup_usu = $pdo->query ("select * from usuarios where e_mail = '$e_mail'");

       $dados_dup_usu = $consulta_dup_usu->fetchAll(PDO::FETCH_ASSOC);
       $linhas_dup_usu = count($dados_dup_usu);

       if ($linhas_dup_usu == 0) {
         # code...
       
              $data_base = new db ();
              $link = $data_base->conecta_mysqli();
              $inserir_usuarios = "INSERT INTO usuarios
              (nome,
              sobrenome,
              data_nascimento,
              telefone,
              tipo_usuario,
              adicional_usuario,
              observacoes,
              nivel_acesso,
              e_mail,
              senha,
              cadastrante,
              data_registro) 
              VALUES                                              
              ('$nome',
              '$sobrenome',
              '$data_nascimento',
              '$telefone',
              '$tipo_usuario',
              '$adicional_usuario',
              '$observacoes',
              '$nivel_acesso',
              '$e_mail',
              '$senha',
              '$cadastrante',
              NOW())";
            //$inserir_usuarios = "INSERT INTO usuarios () VALUES ('','','','','')";

              $resultado_registro = mysqli_query($link,$inserir_usuarios);
              if(mysqli_insert_id($link)){

                header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_usu_sucess=1");
                 // header('location:../../tela_login.php?erro=1');//MENSAGEM DE ERRO
              } else {

                header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_usu_erro=1");
              }
               //__________________________________________________________________________________________
              //$nome_sessão_cadastro = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
              //$_SESSION['nome'] =  $nome_sessão_cadastro;
        } else {

         header("location: ../../../sist_admin/telas_adm/adm.php?acao=usuarios_adm&msg_usu_erro=2");

        }







?> 










