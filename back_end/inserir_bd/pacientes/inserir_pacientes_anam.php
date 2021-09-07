<?php 
   
   include_once ("../../conexao_bd.php");
   @session_start();

    
// ################Dados do paciente############

$nome_pac                 = filter_input(INPUT_POST,'nome_pac', FILTER_SANITIZE_STRING);
$sobrenome_pac            = filter_input(INPUT_POST,'sobrenome_pac', FILTER_SANITIZE_STRING);
$data_nascimento_pac      = filter_input(INPUT_POST,'data_nascimento_pac', FILTER_SANITIZE_STRING);

$sexo_pac                 = filter_input(INPUT_POST,'sexo_pac', FILTER_SANITIZE_STRING);
$numero_sus_pac           = filter_input(INPUT_POST,'numero_sus_pac', FILTER_SANITIZE_STRING);
$cidade_pac               = filter_input(INPUT_POST,'cidade_pac', FILTER_SANITIZE_STRING);

$endereco_pac             = filter_input(INPUT_POST,'endereco_pac', FILTER_SANITIZE_STRING);
$bairro_pac               = filter_input(INPUT_POST,'bairro_pac', FILTER_SANITIZE_STRING);
$nome_posto_pac           = filter_input(INPUT_POST,'nome_posto_pac', FILTER_SANITIZE_STRING);

$nome_responsavel_pac     = filter_input(INPUT_POST,'nome_responsavel_pac', FILTER_SANITIZE_STRING);
$telefone_responsavel_pac = filter_input(INPUT_POST,'telefone_responsavel_pac',FILTER_SANITIZE_STRING);
$cpf_responsavel_pac      = filter_input(INPUT_POST,'cpf_responsavel_pac', FILTER_SANITIZE_STRING);
$cadastrante_pac          = filter_input(INPUT_POST,'cadastrante_pac', FILTER_SANITIZE_STRING);

//############## Dados da anamnese#############

$local_pre_natal_anam    = filter_input(INPUT_POST,'local_pre_natal_anam', FILTER_SANITIZE_STRING);
$tipo_de_parto_anam      = filter_input(INPUT_POST,'tipo_de_parto_anam', FILTER_SANITIZE_STRING);
$qtd_irmaos_anam         = filter_input(INPUT_POST,'qtd_irmaos_anam', FILTER_SANITIZE_STRING);

$pediatra_resp_anam      = filter_input(INPUT_POST,'pediatra_resp_anam', FILTER_SANITIZE_STRING);
$alim_materna_anam       = filter_input(INPUT_POST,'alim_materna_anam', FILTER_SANITIZE_STRING);

$mamadeira_anam          = filter_input(INPUT_POST,'mamadeira_anam', FILTER_SANITIZE_STRING);
$chupeta_anam            = filter_input(INPUT_POST,'chupeta_anam', FILTER_SANITIZE_STRING);
$chupa_dedo_anam         = filter_input(INPUT_POST,'chupa_dedo_anam', FILTER_SANITIZE_STRING);

$higiene_anam            = filter_input(INPUT_POST,'higiene_anam', FILTER_SANITIZE_STRING);
$hist_carie_familia_anam = filter_input(INPUT_POST,'hist_carie_familia_anam', FILTER_SANITIZE_STRING);

$campo_observacoes_anam = filter_input(INPUT_POST,'campo_observacoes_anam', FILTER_SANITIZE_STRING);

//Estas são duas informações concatenadas para aparecer em uma unica coluna
$uso_remedio_gest_anam   = filter_input(INPUT_POST,'uso_remedio_gest_anam', FILTER_SANITIZE_STRING)
.", "
. filter_input(INPUT_POST,'uso_remedio_gest_anam_comp', FILTER_SANITIZE_STRING);

$anomalia_ao_nasc_anam   = filter_input(INPUT_POST,'anomalia_ao_nasc_anam', FILTER_SANITIZE_STRING)
.", "
. filter_input(INPUT_POST,'anomalia_ao_nasc_anam_comp', FILTER_SANITIZE_STRING);

$tratam_med_anam         = filter_input(INPUT_POST,'tratam_med_anam', FILTER_SANITIZE_STRING). ", "
. filter_input(INPUT_POST,'tratam_med_anam_comp', FILTER_SANITIZE_STRING);

$dificuldade_alim_anam   = filter_input(INPUT_POST,'dificuldade_alim_anam', FILTER_SANITIZE_STRING)
.", "
. filter_input(INPUT_POST,'dificuldade_alim_anam_comp', FILTER_SANITIZE_STRING);

$trauma_bucal_anam       = filter_input(INPUT_POST,'trauma_bucal_anam', FILTER_SANITIZE_STRING)
.", "
.filter_input(INPUT_POST,'trauma_bucal_anam_comp', FILTER_SANITIZE_STRING);

 //_______________________________________________________________________________________________________
/*
   echo $nome_pac."<br>" ;
   echo $sobrenome_pac."<br>" ;
   echo $data_nascimento_pac."<br>" ;
   echo $sexo_pac."<br>"  ;
   echo $numero_sus_pac."<br>" ;
   echo $cidade_pac."<br>" ;
   echo $endereco_pac."<br>" ;
   echo $bairro_pac."<br>" ;
   echo $nome_posto_pac."<br>" ;
   echo $nome_responsavel_pac."<br>" ;
   echo $telefone_responsavel_pac."<br>" ;
   echo $cpf_responsavel_pac."<br>" ;
   echo $cadastrante_pac."<br><hr>" ;

   echo $local_pre_natal_anam."<br>" ;
   echo $tipo_de_parto_anam."<br>" ;
   echo $qtd_irmaos_anam."<br>" ;
   echo $pediatra_resp_anam."<br>" ;
   echo $alim_materna_anam."<br>" ;
   echo $mamadeira_anam."<br>" ;
   echo $chupeta_anam."<br>" ;
   echo $chupa_dedo_anam."<br>" ;
   echo $higiene_anam."<br>" ;
   echo $hist_carie_familia_anam."<br>" ;
   echo $anomalia_ao_nasc_anam."<br>" ;
   echo $tratam_med_anam."<br>" ;
   echo $dificuldade_alim_anam."<br>" ;
   echo $trauma_bucal_anam."<br>" ;
   echo $dificuldade_alim_anam."<br>" ;
   echo $campo_observacoes_anam."<br>";

*/

    $presenca_pac = 1; #valor temporário apenas para armazenamento

   //Inserir no banco de dados

    #BANCO DE DADOS DOS PACIENTES
    $data_base_pac = new db ();
    $link_pac = $data_base_pac->conecta_mysqli();

    $inserir_pac = "INSERT INTO pacientes
    (nome_pac,
    sobrenome_pac,
    data_nascimento_pac,
    sexo_pac,
    numero_sus_pac,
    cidade_pac,
    endereco_pac,
    bairro_pac,
    nome_posto_pac,
    nome_responsavel_pac,
    telefone_responsavel_pac,
    cpf_responsavel_pac,
    presenca_pac,
    cadastrante_pac,
    data_registro_pac
    ) 
    VALUES                                              
    ('$nome_pac',
    '$sobrenome_pac',
    '$data_nascimento_pac',
    '$sexo_pac',
    '$numero_sus_pac',
    '$cidade_pac',
    '$endereco_pac',
    '$bairro_pac',
    '$nome_posto_pac',
    '$nome_responsavel_pac',
    '$telefone_responsavel_pac',
    '$cpf_responsavel_pac',
    '$presenca_pac',
    '$cadastrante_pac',
     NOW())";
    #______________________________________

    $resultado_registro_pac = mysqli_query($link_pac,$inserir_pac);
    if(mysqli_insert_id($link_pac)){ echo "sucesso 1 ";

     //#############################################################################

                  //BANCO DE DADOS DE ANAMNESE. RECUPERA O ULTIMO ID DOS PACIENTES
                    $data_base_anam = new db ();  //Esta é a estrutura para recuperar qualquer dado do Banco de dados
                    $link_anam = $data_base_anam->conecta_mysqli();

                    $consulta_id_pac = $pdo->query("SELECT * FROM pacientes ORDER BY id_pac DESC");
                    $dados_id_pac = $consulta_id_pac->fetchAll(PDO::FETCH_ASSOC);
                    $cod_pac_anam = $dados_id_pac[0]['id_pac'];

                                    $nome_e_sobren_pac_anam = ($nome_pac." ".$sobrenome_pac);
                                    //Igualar variavel para aparecer o nome junto na tela de anamnese apenas para conferencia
                                    $pediatra_resp_anam_dr = ("Dr(a)".$pediatra_resp_anam);
                                    //Contatena o dr com o nome do médico, para inserir na tabela de anamnese

                    #INSERIR NO BANCO DE DADOS DE ANAMNESE
                              
                    //CONVERSÃO DE VARIAVEIS DO REGISTRO PACIENTES
                    $nome_responsavel_pac_anam  = $nome_responsavel_pac ;
                    $cadastrante_anam =  $cadastrante_pac;

                    $inserir_anam = "INSERT INTO anamnese
                    (nome_e_sobren_pac_anam,
                    local_pre_natal_anam,
                    uso_remedio_gest_anam,
                    anomalia_ao_nasc_anam,
                    tratam_med_anam,
                    tipo_de_parto_anam,
                    qtd_irmaos_anam,
                    pediatra_resp_anam_dr,
                    alim_materna_anam,
                    dificuldade_alim_anam,
                    mamadeira_anam,
                    chupeta_anam,
                    chupa_dedo_anam,
                    higiene_anam,
                    hist_carie_familia_anam,
                    trauma_bucal_anam,
                    nome_responsavel_pac_anam,
                    cadastrante_anam,
                    campo_observacoes_anam,
                    cod_pac_anam,
                    data_registro_anam
                    ) 
                    VALUES                                              
                    ('$nome_e_sobren_pac_anam',#pac
                    '$local_pre_natal_anam',
                    '$uso_remedio_gest_anam',
                    '$anomalia_ao_nasc_anam',
                    '$tratam_med_anam',
                    '$tipo_de_parto_anam',
                    '$qtd_irmaos_anam',
                    '$pediatra_resp_anam_dr',
                    '$alim_materna_anam',
                    '$dificuldade_alim_anam',
                    '$mamadeira_anam',
                    '$chupeta_anam',
                    '$chupa_dedo_anam',
                    '$higiene_anam',
                    '$hist_carie_familia_anam',
                    '$trauma_bucal_anam',
                    '$nome_responsavel_pac_anam',#pac
                    '$cadastrante_anam',#pac
                    '$campo_observacoes_anam',
                    '$cod_pac_anam',#pac
                     NOW())"; 

                     $resultado_registro_anam = mysqli_query($link_anam,$inserir_anam);
                     if(mysqli_insert_id($link_anam)){ echo "sucesso 2";

                     header("location: ../../../sist_admin/telas_adm/adm.php?acao=pacientes_adm&msg_pac_e_anam_sucess=1");
                     

                        } else{

                     header("location: ../../../sist_admin/telas_adm/adm.php?acao=pacientes_adm&msg_pac_e_anam_erro=1");
                        
                        }


     //#############################################################################

     } else {

      echo "erro 1";



     }




?> 


