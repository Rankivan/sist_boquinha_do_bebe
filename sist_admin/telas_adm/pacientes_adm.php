 

<?php

$formulario_pacientes = 'atr_pacientes/formulario_pacientes.php';
$formulario_anamnese = 'atr_pacientes/formulario_anamnese.php';
$mensagens_sist_pacientes = 'atr_pacientes/mensagens_sist_pacientes.php';
$editar_pacientes = 'atr_pacientes/editar_pacientes.php';

//__________________MENSAGENS DE AVISOS_____________________

$msg_pac_e_anam_sucess = isset ($_GET ['msg_pac_e_anam_sucess']) ? $_GET ['msg_pac_e_anam_sucess'] : 0;
$msg_pac_e_anam_erro = isset ($_GET ['msg_pac_e_anam_erro']) ? $_GET ['msg_pac_e_anam_erro'] : 0;
$excluir_pac = isset ($_GET ['excluir_pac']) ? $_GET ['excluir_pac'] : 0;

// __________________________________________________________________

// FUNÇÃO PARA CALCULAR A IDADE DO PACIENTE
 //TEM QUE SER EM CIMA DO CÓDIGO

 function calcularIdade($date){

    $time = strtotime($date);
    if($time === false){
      return '';
    }
 
    $year_diff = '';
    $date = date('Y-m-d', $time);
    list($year,$month,$day) = explode('-',$date);
    $year_diff = date('Y') - $year;
    $month_diff = date('m') - $month;
    $day_diff = date('d') - $day;
    if ($day_diff < 0 || $month_diff < 0) $year_diff;
 
    return $year_diff;

  }
//____________________________________________

?>

 <div style="padding: 10px;">

   <div class="row">
     <div class="col-sm-6">
       <div class="card">
        <h5 class="card-header"> Inserir pacientes </h5>
        <a href="#" style="color: black" type="button"data-toggle="modal" data-target="#modal_pacientes"> <div class="card-body">
          
          <p class="card-text">Insisra novos pacientes no sistema e realize atendimentos</p>
          <img src="../../imagens/conteudo/lista_pacientes.png" style="width: 40px ; height: 40px ;">
        </div></a>
      </div>
    </div>
    
    <div class="col-sm-6">
     <div class="card">
      <h5 class="card-header"> Pesquisar pacientes </h5>
      <div class="card-body">	    
        
         <form method="post">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
             <div class="input-group-text"> 
              <button  type="submit" name="<?php echo $menu_3; ?>"> <img src="../../imagens/conteudo/procurar.png" style="width: 40px ; height: 40px ;" ></button></div>
            </div>
            <input name="buscar_pac" style="height: 70px;" type="text" class="form-control"placeholder="Pesquisar">
          </div>
        </form>
       </div>
     </div>
   </div>
 </div>
<br>




<!--_________________________________________________________________________________________-->

  <!--#######################################__TABELA__########################################-->
  <div class=" table table-responsive table-sm" >
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nome </th>
          <th scope="col">idade</th>
          
          <th scope="col">telefone</th>
          <th scope="col">Posto </th>
          <th scope="col"> Opções </th>

        </tr>
      </thead>
      <tbody>

       <?php  @$buscar_pac = '%'.$_POST['buscar_pac'].'%';

        //_____________________________PAGINAÇÂO________________________________

                //Arquivo que criará o sistema de páginação do projeto
                //Envio do número da página via GET
                $pagina_atual_pac = filter_input(INPUT_GET,'pagina_pac', FILTER_SANITIZE_NUMBER_INT); 
                //Se ela for vazia será a página 1, senão é igual ao número via GET
                $pagina_pac = (!empty($pagina_atual_pac)) ? $pagina_atual_pac : 1;
                //Definir número de páginas por número de registros
                $quant_de_resultado_por_pag_pac = 5;
                //Cálculo para o início da visualização
                $inicio_list_pac = ($quant_de_resultado_por_pag_pac * $pagina_pac) - $quant_de_resultado_por_pag_pac;
                //Este código puxa os dados referentes ao banco de dados ionformado


                if (isset($_POST[$menu_3]) and $_POST['buscar_pac'] != '') {
                $consulta_pac = $pdo->prepare("SELECT * from pacientes where nome_pac LIKE :nome_pac  
                  ORDER BY id_pac DESC
                  limit  $inicio_list_pac, $quant_de_resultado_por_pag_pac "); 
                $consulta_pac->bindValue(":nome_pac",$buscar_pac); 
                $consulta_pac->execute();


                }else{ 


               $consulta_pac = $pdo->query("SELECT * FROM pacientes ORDER BY id_pac DESC limit $inicio_list_pac, $quant_de_resultado_por_pag_pac ");//Seleciona o BD bairros
                }

               $dados_pacientes = $consulta_pac->fetchAll(PDO::FETCH_ASSOC);

               for ($i=0; $i < count($dados_pacientes); $i++){
                  foreach ($dados_pacientes[$i] as $key => $value) {
                   //Comando for e foreach fornece da om loop de leitura em todos os dados do banco de dados.
               }

               $id_pac                   = $dados_pacientes[$i]['id_pac'];
               $nome_pac                 = $dados_pacientes[$i]['nome_pac'];
               $sobrenome_pac            = $dados_pacientes[$i]['sobrenome_pac'];
               $sexo_pac                 = $dados_pacientes[$i]['sexo_pac'];
               $numero_sus_pac           = $dados_pacientes[$i]['numero_sus_pac'];
               $cidade_pac               = $dados_pacientes[$i]['cidade_pac'];
               $endereco_pac             = $dados_pacientes[$i]['endereco_pac'];
               $bairro_pac               = $dados_pacientes[$i]['bairro_pac'];
               $nome_responsavel_pac     = $dados_pacientes[$i]['nome_responsavel_pac'];
               $telefone_responsavel_pac = $dados_pacientes[$i]['telefone_responsavel_pac'];
               $cpf_responsavel_pac      = $dados_pacientes[$i]['cpf_responsavel_pac'];
               $data_nascimento_pac      = $dados_pacientes[$i]['data_nascimento_pac'];
               $cadastrante_pac          = $dados_pacientes[$i]['cadastrante_pac'];
               $presenca_pac             = $dados_pacientes[$i]['presenca_pac'];
               $nome_posto_pac           = $dados_pacientes[$i]['nome_posto_pac'];
               $data_registro_pac        = $dados_pacientes[$i]['data_registro_pac'];

              // __________________________________________________________________

              // FUNÇÃO PARA CALCULAR A IDADE DO PACIENTE
              $dataNascimento = ($data_nascimento_pac); #VARIÁVEL DA TABELA
              $date           = new DateTime($dataNascimento);
              $interval       = $date->diff( new DateTime( date('Y-m-d') ) );

                   $anos  = $interval->format  ('%Y');
                   $meses = $interval->format ('%m');
                   $dias  = $interval->format  ('%d');

                  //echo $interval->format( '%Y anos e %m mese(s)' );
              /*
                 um ano e x meses
                 um ano e um mes
                 x anos e um mes
                 x anos e x meses
                 0 e um mes
                 0 e x meses
                 0 e x dias
                 0 e um dia 
              */
              //_____________________________________________________________
 ?>
                <tr>
                  <th scope="row"> <?php echo  $id_pac ; ?> </th>
                  <td><?php echo ($nome_pac) ; ?></td>
                  <td><?php 
                          if ($anos == 1 && $meses > 1) {
                            echo $anos." ano"." e ".($meses)." meses" ; } 
                          if ($anos == 1 && $meses == 1) {
                            echo $anos." ano"." e ".($meses)." mês" ; }
                          if ($anos > 1 && $meses == 1) {
                            echo $anos." anos"." e ".($meses)." mês" ; }
                          if ($anos > 1 && $meses > 1) {
                            echo $anos." anos"." e ".($meses)." meses" ; }
                          if ($anos < 1 && $meses == 1) {
                            echo ($meses)." mês" ; }
                          if ($anos < 1 && $meses > 1) {
                            echo ($meses)." meses" ; }
                          if ($anos < 1 && $meses < 1 && $dias > 1) {
                            echo ($dias)." dias" ; }
                          if ($anos < 1 && $meses < 1 && $dias == 1) {
                            echo ($dias)." dia" ; }
                             ?> </td>
                  <td><?php echo ($telefone_responsavel_pac ) ; ?></td>
                  <td><?php echo ($nome_posto_pac ) ; ?></td>
                  <td><?php  ?><a href="adm.php?acao=pacientes_adm&editar_pac=1&id_pac=<?php echo $id_pac ?>" style="color: black" ><img src="../../imagens/conteudo/olho.png" style="width: 25px ; height: 25px "></a></h6></td>

              </tr>
               <?php  } ?>
        </tbody>
      </table>
    </div>

        <?php  /*Comando php para puxar os dados referente ao id
               e executar a edição.*/
             
            if(isset($_GET['editar_pac'])== 1){
             $id_paciente_edit = $_GET['id_pac']; //Passagem de dados via URL por meio GET
          
               //Recuperar dados do usuario a ser editado

              $resultado_consulta_editar_pac = $pdo->query ("select * from pacientes where id_pac = '$id_paciente_edit'");
               $dados_pacientes_edit         = $resultado_consulta_editar_pac->fetchAll(PDO::FETCH_ASSOC);

               $id_pac                   = $dados_pacientes_edit   [0]['id_pac'];
               $nome_pac                 = $dados_pacientes_edit   [0]['nome_pac'];
               $sobrenome_pac            = $dados_pacientes_edit   [0]['sobrenome_pac'];
               $sexo_pac                 = $dados_pacientes_edit   [0]['sexo_pac'];
               $numero_sus_pac           = $dados_pacientes_edit   [0]['numero_sus_pac'];
               $cidade_pac               = $dados_pacientes_edit   [0]['cidade_pac'];
               $endereco_pac             = $dados_pacientes_edit   [0]['endereco_pac'];
               $bairro_pac               = $dados_pacientes_edit   [0]['bairro_pac'];
               $nome_responsavel_pac     = $dados_pacientes_edit   [0]['nome_responsavel_pac'];
               $telefone_responsavel_pac = $dados_pacientes_edit   [0]['telefone_responsavel_pac'];
               $cpf_responsavel_pac      = $dados_pacientes_edit   [0]['cpf_responsavel_pac'];
               $data_nascimento_pac      = $dados_pacientes_edit   [0]['data_nascimento_pac'];
               $cadastrante_pac          = $dados_pacientes_edit   [0]['cadastrante_pac'];
               $presenca_pac             = $dados_pacientes_edit   [0]['presenca_pac'];
               $nome_posto_pac           = $dados_pacientes_edit   [0]['nome_posto_pac'];
               $data_registro_pac        = $dados_pacientes_edit   [0]['data_registro_pac'];


             $resultado_consulta_editar_anam = $pdo->query ("select * from anamnese where cod_pac_anam = '$id_paciente_edit'");
             $dados_anamnese_edit            = $resultado_consulta_editar_anam->fetchAll(PDO::FETCH_ASSOC);
             //Ficar atento com o id da anamnese para fazer o inner join por programação


                 $id_anam                     = $dados_anamnese_edit      [0]['id_anam'];
                 $nome_e_sobren_pac_anam      = $dados_anamnese_edit      [0]['nome_e_sobren_pac_anam'];
                 $local_pre_natal_anam        = $dados_anamnese_edit      [0]['local_pre_natal_anam'];
                 $uso_remedio_gest_anam       = $dados_anamnese_edit      [0]['uso_remedio_gest_anam'];
                 $anomalia_ao_nasc_anam       = $dados_anamnese_edit      [0]['anomalia_ao_nasc_anam'];
                 $tratam_med_anam             = $dados_anamnese_edit      [0]['tratam_med_anam'];
                 $tipo_de_parto_anam          = $dados_anamnese_edit      [0]['tipo_de_parto_anam'];
                 $qtd_irmaos_anam             = $dados_anamnese_edit      [0]['qtd_irmaos_anam'];
                 $nome_responsavel_pac_anam   = $dados_anamnese_edit      [0]['nome_responsavel_pac_anam'];
                 $pediatra_resp_anam_dr       = $dados_anamnese_edit      [0]['pediatra_resp_anam_dr'];
                 $alim_materna_anam           = $dados_anamnese_edit      [0]['alim_materna_anam'];
                 $campo_observacoes_anam      = $dados_anamnese_edit      [0]['campo_observacoes_anam'];
                 $dificuldade_alim_anam       = $dados_anamnese_edit      [0]['dificuldade_alim_anam'];
                 $mamadeira_anam              = $dados_anamnese_edit      [0]['mamadeira_anam'];
                 $chupeta_anam                = $dados_anamnese_edit      [0]['chupeta_anam'];
                 $chupa_dedo_anam             = $dados_anamnese_edit      [0]['chupa_dedo_anam'];
                 $higiene_anam                = $dados_anamnese_edit      [0]['higiene_anam'];
                 $trauma_bucal_anam           = $dados_anamnese_edit      [0]['trauma_bucal_anam'];
                 $hist_carie_familia_anam     = $dados_anamnese_edit      [0]['hist_carie_familia_anam'];
                 $cadastrante_anam            = $dados_anamnese_edit      [0]['cadastrante_anam'];
                 $cod_pac_anam                = $dados_anamnese_edit      [0]['cod_pac_anam'];
                 $data_registro_anam          = $dados_anamnese_edit      [0]['data_registro_anam'];
               

           /*
            $objDb = new db ();
            $link =  $objDb->conecta_mysqli();

            $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

            $result_rato = "SELECT * FROM bd_rato WHERE id = '$id'";
            $resultado_rato = mysqli_query ($link,$result_rato);
            $row_rato = mysqli_fetch_assoc($resultado_rato);*/



          }
          
        ?>

        <?php   
                 $data_base_pac_2 = new db ();
                 $link_pac_2      = $data_base_pac_2->conecta_mysqli(); 

                  //Iniciando a paginação e contando os usuários do banco de daodos
                  //Somando a quantidade de registros no bd
                  $result_listagem_pac        = "SELECT count(id_pac) as resultado_pac FROM pacientes"; 
                  $resultado_qtd_rgist_pac    = mysqli_query($link_pac_2,$result_listagem_pac);
                  $quantidade_total_rgist_pac = mysqli_fetch_assoc($resultado_qtd_rgist_pac);

                //Quantidade de páginas que serão apresentadas nos links
                  $quantidade_paginas_pac  = ceil($quantidade_total_rgist_pac['resultado_pac'] / $quant_de_resultado_por_pag_pac);
                //Limitar o número do link de paginação
                  $limite_links_maximo_pac = 2;

           ?>

<div align="center">

 <?php      
          //BOTÕES DE PAGINAÇÕES
          echo "<a class='btn btn-secondary' href='adm.php?acao=pacientes_adm&pagina_pac=1'>Primeira</a> ";

          for ($pagina_anterior_pac = $pagina_pac -  $limite_links_maximo_pac; $pagina_anterior_pac<= $pagina_pac -1 ; $pagina_anterior_pac ++  ) { 

            if ($pagina_anterior_pac >= 1 ) {
              echo "<a class='btn btn-primary' href='adm.php?acao=pacientes_adm&pagina_pac=$pagina_anterior_pac'>$pagina_anterior_pac</a> ";
                } //Conta uma página para trás e para frente
              }
          echo "<a class='btn btn-danger' href='adm.php?acao=pacientes_adm&pagina_pac=$pagina_pac'> $pagina_pac</a> ";//Página atual

          for ($pagina_posterior_pac = $pagina_pac + 1; $pagina_posterior_pac <= $pagina_pac + $limite_links_maximo_pac ; $pagina_posterior_pac ++  ) { 

            if ($pagina_posterior_pac <= $quantidade_paginas_pac ) {
              echo "<a class='btn btn-primary' href='adm.php?acao=pacientes_adm&pagina_pac=$pagina_posterior_pac'>$pagina_posterior_pac</a> ";
                } //
              }

          echo "<a class='btn btn-secondary' href='adm.php?acao=pacientes_adm&pagina_pac=$quantidade_paginas_pac'>Última</a> ";//ultima página
          ?>
          <hr>
           <h5>Total de postos cadastrados = <?php echo  $quantidade_total_rgist_pac['resultado_pac']; ?></h5>



</div>


  <!--#######################################__ __########################################-->


    <!-- #########################_Modal_######################### -->

  <form method="post" action="../../back_end/inserir_bd/pacientes/inserir_pacientes_anam.php">
    <div class="modal fade" id="modal_pacientes" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable  modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="cadastrar_paciente_titulo_js">Cadastrar pacientes <img src="../../imagens/conteudo/anexar.png" style="width: 40px ; height: 40px "></h5>
            <h5 class="modal-title" id="cadastrar_anamnese_titulo_js">Cadastrar anamnese <img src="../../imagens/conteudo/analise.png" style="width: 40px ; height: 40px "></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div id="formulario_pacientes_js">
             <?php include($formulario_pacientes); ?> 
           </div>

           <div id="formulario_anamnese_js">
             <?php include($formulario_anamnese); ?>
           </div>



         </div>

         <div class="modal-footer">

            <div id="btn_voltar_form_js">
            <button type="button"value="voltar" class="btn btn-dark
             " onclick="btn_voltar_tela_pac()"> <img src="../../imagens/conteudo/voltar.png" style="width: 20px ; height: 20px ">Voltar</button>
           </div>

           <div>
            <button type="button" class="btn btn-secondary" data-dismiss="modal"> <img src="../../imagens/conteudo/fechar_janela.png" style="width: 20px ; height: 20px "> Cancelar</button>
           </div>

            <div id="btn_avancar_form_js">
             <button type="button" class="btn btn-primary" onclick="alterna_tela__modal_pacientes()">Avançar <img src="../../imagens/conteudo/seta_direita_2.png" style="width: 25px ; height: 25px "></button>
            </div>

         <div id="btn_salvar_form_js">
           <button type="submit" name="btn_cadastrar_pac" class="btn btn-success"><img src="../../imagens/conteudo/armazena.png" style="width: 25px ; height: 25px ">Salvar</button>
         </div>

       </div>

     </div>
   </div>
 </div>
</form> 


 <?php //ESTE É O CHAMADO JS PARA EDIÇÃO DOS PACIENTES
   $editar_pac = filter_input(INPUT_GET,'editar_pac', FILTER_SANITIZE_NUMBER_INT);

       if ($editar_pac == 1) { ?>

      <script type="text/javascript">
        $(document).ready(function(){ //Abrir a modal pelo JS
          $("#editar_pacientes").modal();
        });
      </script>
  <?php }?> 



        <!-- #########################________######################### -->

    <!-- #########################___Editar_pacientes___######################### -->

   <?php include($editar_pacientes); ?> 

    <!-- #########################________######################### -->

    <!--####################################_MENSAGENS DE ERRO_######################################-->

     <?php include($mensagens_sist_pacientes); ?> 