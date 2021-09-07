<?php


   include_once ("../../conexao_bd.php");
   @session_start();



     

      $id_posto_edit            = filter_input(INPUT_POST,'id_posto_edit', FILTER_SANITIZE_STRING);
      $nome_posto_edit          = filter_input(INPUT_POST,'nome_posto_edit', FILTER_SANITIZE_STRING);
      $bairro_posto_edit        = filter_input(INPUT_POST,'bairro_posto_edit', FILTER_SANITIZE_STRING);
      $endereco_posto_edit      = filter_input(INPUT_POST,'endereco_posto_edit', FILTER_SANITIZE_STRING);
      $telefone_posto_edit      = filter_input(INPUT_POST,'telefone_posto_edit', FILTER_SANITIZE_STRING);
      $cadastrante_posto_edit   = filter_input(INPUT_POST,'cadastrante_posto_edit', FILTER_SANITIZE_STRING);



   /*
      echo("id: $id_posto_edit"."<br>"); 
      echo("nome do posto: $nome_posto_edit"."<br>"); 
      echo("bairro: $bairro_posto_edit"."<br>"); 
      echo("endereço: $endereco_posto_edit"."<br>"); 
      echo("telefone: $telefone_posto_edit"."<br>"); 
      echo("cadastrante: $cadastrante_posto_edit"."<br>"); 
    */

              $data_base_postos_edit = new db ();
              $link_postos_edit = $data_base_postos_edit->conecta_mysqli();

              $editar_postos = "UPDATE posto_atendimento SET
              nome_posto = '$nome_posto_edit',
              bairro_posto = '$bairro_posto_edit',
              endereco_posto = '$endereco_posto_edit',
              telefone_posto = '$telefone_posto_edit',
              cadastrante_posto = '$cadastrante_posto_edit'
              WHERE id_posto ='$id_posto_edit'";


              $resultado_edicao_posto = mysqli_query($link_postos_edit,$editar_postos);
     
             if(mysqli_affected_rows($link_postos_edit)){

                    
             	 echo "sucesso Atualizou os postos ";

                //############################################################################

			                      $consulta_dup_bairro_edit = $pdo->query ("select * from bairros where bairro_nome_bairro = '$bairro_posto_edit'");
			                      $dados_dup_bairro_edit = $consulta_dup_bairro_edit->fetchAll(PDO::FETCH_ASSOC);
			                      $linhas_dup_bairro_edit = count($dados_dup_bairro_edit);
			                      if ($linhas_dup_bairro_edit == 0) {/*3*/

			                                          $data_base_bairro_edit = new db ();
			                                          $link_bairro_edit = $data_base_bairro_edit->conecta_mysqli();

			                                           $inserir_bairro_edit = "INSERT INTO bairros
			                                            (bairro_nome_bairro,
			                                            cadastrante_bairro,
			                                            data_cad_bairro
			                                            ) 
			                                            VALUES                                              
			                                           ('$bairro_posto_edit',
			                                            '$cadastrante_posto_edit',
			                                             NOW())";

			                         
                                              

			                           $resultado_registro_bairro_edit = mysqli_query($link_bairro_edit,$inserir_bairro_edit);
			                           if(mysqli_insert_id($link_bairro_edit)){ 

                                  header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&posto_atend=1&msg_posto_sucess_edit=1");

                                  echo "sucesso Inseriu o bairro";
			                           } else {   
			                           	
			                           }

               //###################################################################################

			                   }else{

                           header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&posto_atend=1&msg_posto_sucess_edit=2");

			                   	echo "erro o bairro já existe";
			                   }
 

              } else {

              	  header("location: ../../../sist_admin/telas_adm/adm.php?acao=diversos_adm&posto_atend=1&msg_posto_erro_edit=1");

                
              } 


?>