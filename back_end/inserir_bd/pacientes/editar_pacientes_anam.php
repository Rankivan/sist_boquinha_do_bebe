 <!--_______________________________EDITAR_USUARIOS__________________________________-->
<?php 
   
   include_once ("../../conexao_bd.php");
   @session_start();


//############################# EDITAR PACIENTES #################################
     
// ################Dados do paciente############
 
$id_pac_edit                   = filter_input(INPUT_POST,'id_pac_edit', FILTER_SANITIZE_STRING);
$nome_pac_edit                 = filter_input(INPUT_POST,'nome_pac_edit', FILTER_SANITIZE_STRING);
$sobrenome_pac_edit            = filter_input(INPUT_POST,'sobrenome_pac_edit', FILTER_SANITIZE_STRING);
$data_nascimento_pac_edit      = filter_input(INPUT_POST,'data_nascimento_pac_edit', FILTER_SANITIZE_STRING);

$sexo_pac_edit                 = filter_input(INPUT_POST,'sexo_pac_edit', FILTER_SANITIZE_STRING);
$numero_sus_pac_edit           = filter_input(INPUT_POST,'numero_sus_pac_edit', FILTER_SANITIZE_STRING);
$cidade_pac_edit               = filter_input(INPUT_POST,'cidade_pac_edit', FILTER_SANITIZE_STRING);

$endereco_pac_edit             = filter_input(INPUT_POST,'endereco_pac_edit', FILTER_SANITIZE_STRING);
$bairro_pac_edit               = filter_input(INPUT_POST,'bairro_pac_edit', FILTER_SANITIZE_STRING);
$nome_posto_pac_edit           = filter_input(INPUT_POST,'nome_posto_pac_edit', FILTER_SANITIZE_STRING);

$nome_responsavel_pac_edit     = filter_input(INPUT_POST,'nome_responsavel_pac_edit', FILTER_SANITIZE_STRING);
$telefone_responsavel_pac_edit = filter_input(INPUT_POST,'telefone_responsavel_pac_edit',FILTER_SANITIZE_STRING);
$cpf_responsavel_pac_edit      = filter_input(INPUT_POST,'cpf_responsavel_pac_edit', FILTER_SANITIZE_STRING);
$cadastrante_pac_edit          = filter_input(INPUT_POST,'cadastrante_pac_edit', FILTER_SANITIZE_STRING);

//############## Dados da anamnese#############
$id_anam_edit                 = filter_input(INPUT_POST,'id_anam_edit', FILTER_SANITIZE_STRING);
$local_pre_natal_anam_edit    = filter_input(INPUT_POST,'local_pre_natal_anam_edit', FILTER_SANITIZE_STRING);
$tipo_de_parto_anam_edit      = filter_input(INPUT_POST,'tipo_de_parto_anam_edit', FILTER_SANITIZE_STRING);
$qtd_irmaos_anam_edit         = filter_input(INPUT_POST,'qtd_irmaos_anam_edit', FILTER_SANITIZE_STRING);

$pediatra_resp_anam_edit      = filter_input(INPUT_POST,'pediatra_resp_anam_edit', FILTER_SANITIZE_STRING);
$alim_materna_anam_edit       = filter_input(INPUT_POST,'alim_materna_anam_edit', FILTER_SANITIZE_STRING);

$mamadeira_anam_edit          = filter_input(INPUT_POST,'mamadeira_anam_edit', FILTER_SANITIZE_STRING);
$chupeta_anam_edit            = filter_input(INPUT_POST,'chupeta_anam_edit', FILTER_SANITIZE_STRING);
$chupa_dedo_anam_edit         = filter_input(INPUT_POST,'chupa_dedo_anam_edit', FILTER_SANITIZE_STRING);

$higiene_anam_edit            = filter_input(INPUT_POST,'higiene_anam_edit', FILTER_SANITIZE_STRING);
$hist_carie_familia_anam_edit = filter_input(INPUT_POST,'hist_carie_familia_anam_edit', FILTER_SANITIZE_STRING);

$campo_observacoes_anam_edit = filter_input(INPUT_POST,'campo_observacoes_anam_edit', FILTER_SANITIZE_STRING);

//Estas são duas informações concatenadas para aparecer em uma unica coluna
$uso_remedio_gest_anam_edit   = filter_input(INPUT_POST,'uso_remedio_gest_anam_edit', FILTER_SANITIZE_STRING)
." "
. filter_input(INPUT_POST,'uso_remedio_gest_anam_comp_edit', FILTER_SANITIZE_STRING);

$anomalia_ao_nasc_anam_edit   = filter_input(INPUT_POST,'anomalia_ao_nasc_anam_edit', FILTER_SANITIZE_STRING)
." "
. filter_input(INPUT_POST,'anomalia_ao_nasc_anam_comp_edit', FILTER_SANITIZE_STRING);

$tratam_med_anam_edit         = filter_input(INPUT_POST,'tratam_med_anam_edit', FILTER_SANITIZE_STRING). " "
. filter_input(INPUT_POST,'tratam_med_anam_comp_edit', FILTER_SANITIZE_STRING);

$dificuldade_alim_anam_edit   = filter_input(INPUT_POST,'dificuldade_alim_anam_edit', FILTER_SANITIZE_STRING)
." "
. filter_input(INPUT_POST,'dificuldade_alim_anam_comp_edit', FILTER_SANITIZE_STRING);

$trauma_bucal_anam_edit       = filter_input(INPUT_POST,'trauma_bucal_anam_edit', FILTER_SANITIZE_STRING)
." "
.filter_input(INPUT_POST,'trauma_bucal_anam_comp_edit', FILTER_SANITIZE_STRING);

 //_______________________________________________________________________________________________________
  
  /* echo $id_pac_edit."<br>" ;
   echo $id_anam_edit."<br>" ;
   echo $nome_pac_edit."<br>" ;
   echo $sobrenome_pac_edit."<br>" ;
   echo $data_nascimento_pac_edit."<br>" ;
   echo $sexo_pac_edit."<br>"  ;
   echo $numero_sus_pac_edit."<br>" ;
   echo $cidade_pac_edit."<br>" ;
   echo $endereco_pac_edit."<br>" ;
   echo $bairro_pac_edit."<br>" ;
   echo $nome_posto_pac_edit."<br>" ;
   echo $nome_responsavel_pac_edit."<br>" ;
   echo $telefone_responsavel_pac_edit."<br>" ;
   echo $cpf_responsavel_pac_edit."<br>" ;
   echo $cadastrante_pac_edit."<br><hr>" ;

   echo $local_pre_natal_anam_edit."<br>" ;
   echo $tipo_de_parto_anam_edit."<br>" ;
   echo $qtd_irmaos_anam_edit."<br>" ;
   echo $pediatra_resp_anam_edit."<br>" ;
   echo $alim_materna_anam_edit."<br>" ;
   echo $mamadeira_anam_edit."<br>" ;
   echo $chupeta_anam_edit."<br>" ;
   echo $chupa_dedo_anam_edit."<br>" ;
   echo $higiene_anam_edit."<br>" ;
   echo $hist_carie_familia_anam_edit."<br>" ;
   echo $anomalia_ao_nasc_anam_edit."<br>" ;
   echo $tratam_med_anam_edit."<br>" ;
   echo $dificuldade_alim_anam_edit."<br>" ;
   echo $trauma_bucal_anam_edit."<br>" ;
   echo $campo_observacoes_anam_edit."<br>"; */
            

    
            
              $data_base_edit_pac = new db ();
              $link_edit_pac = $data_base_edit_pac->conecta_mysqli();
              $editar_registros_edit_pac = "UPDATE pacientes SET

               nome_pac                 = '$nome_pac_edit', 
               sobrenome_pac            = '$sobrenome_pac_edit', 
               data_nascimento_pac      = '$data_nascimento_pac_edit', 
               sexo_pac                 = '$sexo_pac_edit', 
               numero_sus_pac           = '$numero_sus_pac_edit',
               cidade_pac               = '$cidade_pac_edit',
               endereco_pac             = '$endereco_pac_edit',
               bairro_pac               = '$bairro_pac_edit',
               nome_posto_pac           = '$nome_posto_pac_edit',
               nome_responsavel_pac     = '$nome_responsavel_pac_edit',
               telefone_responsavel_pac = '$telefone_responsavel_pac_edit',
               cpf_responsavel_pac      = '$cpf_responsavel_pac_edit',
               cadastrante_pac          = '$cadastrante_pac_edit'

               WHERE id_pac ='$id_pac_edit'";
             
            //$inserir_usuarios = "INSERT INTO usuarios () VALUES ('','','','','')";

              $resultado_edicao_pac = mysqli_query($link_edit_pac,$editar_registros_edit_pac);
          
               //__________________________________________________________________________________________
              //$nome_sessão_cadastro = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
              //$_SESSION['nome'] =  $nome_sessão_cadastro;*/
           
            
        
              $data_base_edit_anam_1 = new db ();
              $link_edit_anam_1 = $data_base_edit_anam_1->conecta_mysqli();
              $editar_registros_edit_anam_1 = "UPDATE anamnese SET

               local_pre_natal_anam        =  '$local_pre_natal_anam_edit',
               nome_e_sobren_pac_anam      =  '$nome_pac_edit',
               tipo_de_parto_anam          =  '$tipo_de_parto_anam_edit',
               qtd_irmaos_anam             =  '$qtd_irmaos_anam_edit',
               pediatra_resp_anam_dr       =  '$pediatra_resp_anam_edit',
               alim_materna_anam           =  '$alim_materna_anam_edit',
               mamadeira_anam              =  '$mamadeira_anam_edit',
               chupeta_anam                =  '$chupeta_anam_edit',
               chupa_dedo_anam             =  '$chupa_dedo_anam_edit',
               higiene_anam                =  '$higiene_anam_edit',
               hist_carie_familia_anam     =  '$hist_carie_familia_anam_edit',
               anomalia_ao_nasc_anam       =  '$anomalia_ao_nasc_anam_edit',
               uso_remedio_gest_anam       =  '$uso_remedio_gest_anam_edit',
               tratam_med_anam             =  '$tratam_med_anam_edit',
               dificuldade_alim_anam       =  '$dificuldade_alim_anam_edit',
               trauma_bucal_anam           =  '$trauma_bucal_anam_edit',
               campo_observacoes_anam      =  '$campo_observacoes_anam_edit'
             
               WHERE cod_pac_anam = '$id_pac_edit'";
             
            //$inserir_usuarios = "INSERT INTO usuarios () VALUES ('','','','','')";

              $resultado_edicao_anam_e_pac_1 = mysqli_query($link_edit_anam_1,$editar_registros_edit_anam_1);
              if(mysqli_affected_rows($link_edit_anam_1) || ($link_edit_pac) ){//##DIV 1

                  header("location: ../../../sist_admin/telas_adm/adm.php?acao=pacientes_adm&msg_pac_e_anam_sucess=2");
                 // header('location:../../tela_login.php?erro=1');//MENSAGEM DE ERRO
              } else {//##DIV 1

                   header("location: ../../../sist_admin/telas_adm/adm.php?acao=pacientes_adm&msg_pac_e_anam_erro=2");

               
              }  
        



        

 



 

 


?> 