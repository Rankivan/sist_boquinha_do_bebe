<?php 

include_once ("../../conexao_bd.php");
@session_start();


 //_____________________________________POST_POSTO_______________________________

  $nome_posto          = filter_input(INPUT_POST,'nome_posto', FILTER_SANITIZE_STRING);
  $endereco_posto      = filter_input(INPUT_POST,'endereco_posto', FILTER_SANITIZE_STRING);
  $bairro_posto        = filter_input(INPUT_POST,'bairro_posto', FILTER_SANITIZE_STRING);
  $telefone_posto      = filter_input(INPUT_POST,'telefone_posto', FILTER_SANITIZE_STRING);
  $cadastrante_posto   = filter_input(INPUT_POST,'cadastrante_posto', FILTER_SANITIZE_STRING);


  //____________________________________POST_BAIRRO________________________________

   $bairro_nome_bairro   = filter_input(INPUT_POST,'bairro_posto', FILTER_SANITIZE_STRING);
 /* 
      echo $nome_posto ."<br>";
      echo $endereco_posto. "<br>";
      echo $bairro_posto. "<br>";
      echo $telefone_posto ."<br>";
      echo $cadastrante_posto. "<br>";

*/
  $consulta_dup_posto = $pdo->query ("select * from posto_atendimento where nome_posto = '$nome_posto'");
  $dados_dup_posto = $consulta_dup_posto->fetchAll(PDO::FETCH_ASSOC);
  $linhas_dup_posto = count($dados_dup_posto);
  if ($linhas_dup_posto == 0) {/*1*/ //Verificação de repetição do posto

    //###############################################################################################

      $data_base_posto = new db ();
      $link_posto = $data_base_posto->conecta_mysqli();

        $inserir_posto = "INSERT INTO posto_atendimento
        (nome_posto,
        endereco_posto,
        bairro_posto,
        telefone_posto,
        cadastrante_posto,
        data_cad_posto
        ) 
        VALUES                                              
        ('$nome_posto',
        '$endereco_posto',
        '$bairro_posto',
        '$telefone_posto',
        '$cadastrante_posto',
         NOW())";
      //$inserir_usuarios = "INSERT INTO usuarios () VALUES ('','','','','')";

        $resultado_registro_posto = mysqli_query($link_posto,$inserir_posto);
        if(mysqli_insert_id($link_posto)){ /*2*/

                //echo "sucesso ao cadastrar os dados"."<br>";

                //############################################################################

                      $consulta_dup_bairro = $pdo->query ("select * from bairros where bairro_nome_bairro = '$bairro_nome_bairro'");
                      $dados_dup_bairro = $consulta_dup_bairro->fetchAll(PDO::FETCH_ASSOC);
                      $linhas_dup_bairro = count($dados_dup_bairro);
                      if ($linhas_dup_bairro == 0) {/*3*/

                                          $data_base_bairro = new db ();
                                          $link_bairro = $data_base_bairro->conecta_mysqli();

                                           $inserir_bairro = "INSERT INTO bairros
                                            (bairro_nome_bairro,
                                            cadastrante_bairro,
                                            data_cad_bairro
                                            ) 
                                            VALUES                                              
                                           ('$bairro_nome_bairro',
                                            '$cadastrante_posto',
                                             NOW())";

                         

                         // header('location:../../tela_login.php?erro=1');//MENSAGEM DE ERRO

                           header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&posto_atend=1&msg_posto_sucess=1");


                                       

                           $resultado_registro_bairro = mysqli_query($link_bairro,$inserir_bairro);
                           if(mysqli_insert_id($link_bairro)){ echo "sucesso 2";
                           } else {   
                           }

  
                 /*3*/ }else{
                 header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&posto_atend=1&msg_posto_sucess=1");
                               }
//###############################################################################################
    
              /*2*/ } 

//###############################################################################################
/*1*/ }else{


   header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&posto_atend=1&msg_posto_erro=1");
   //echo "Este posto ja existe!";
  }
     //__________________________________________________________________________________________
    //$nome_sessão_cadastro = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
    //$_SESSION['nome'] =  $nome_sessão_cadastro;



?> 




