
<?php

   $formulario_ponto_de_atend = "atr_ponto_de_atend/formulario_ponto_de_atend.php";
   $mensagens_ponto_de_atend = "atr_ponto_de_atend/mensagens_ponto_de_atend.php";

   $formulario_editar_ponto_atend = "atr_ponto_de_atend/formulario_editar_ponto_atend.php";

 ?>

   <!-- Button trigger modal -->


<div id="postos_atend_diversos_js">
  
<div style="padding: 10px;">
   <div class="row">
     <div class="col-sm-6">
       <div class="card">
        <h5 class="card-header"> Inserir novos postos </h5>
        <a href="#" style="color: black" type="button"data-toggle="modal" data-target="#modal_ponto_de_atend"> <div class="card-body">
          
          <p class="card-text">Insisra um novo posto de atendimento</p>
          <img src="../../imagens/conteudo/lista_pacientes.png" style="width: 40px ; height: 40px ;">
        </div></a>
      </div>
    </div>
    
    <div class="col-sm-6">
     <div class="card">
      <h5 class="card-header"> Pesquise por posto </h5>
      <div class="card-body">	    
       <form method="post">
        <div class="input-group mb-2">
          <div class="input-group-prepend">
           <div class="input-group-text"> 
            <button type="submit" name="<?php echo $menu_4;?>"> <img src="../../imagens/conteudo/procurar.png" style="width: 40px ; height: 40px ;"></button></div>
         </div>
         <input name="buscar_posto" style="height: 70px;" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Pesquisar">
       </div>
      </form>
     </div>
   </div>
 </div>

</div> <br>



  <!--#######################################__TABELA__########################################-->
  <div class=" table table-responsive table-sm" >
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nome</th>
          <th scope="col">Bairro</th>
          <th scope="col">telefone</th>
          <th scope="col">Opções</th>

       </tr>
      </thead>
   <tbody>


       <?php 
              //Opreador de buscas aproximadas
              @$buscar_nome_posto = '%'.$_POST['buscar_posto'].'%'; 


         //_____________________________PAGINAÇÂO________________________________

                //Arquivo que criará o sistema de páginação do projeto
                //Envio do número da página via GET
                $pagina_atual_posto = filter_input(INPUT_GET,'posto_atend', FILTER_SANITIZE_NUMBER_INT); 
                //Se ela for vazia será a página 1, senão é igual ao número via GET
                $pagina_posto = (!empty($pagina_atual_posto)) ? $pagina_atual_posto : 1;
                //Definir número de páginas por número de registros
                $quant_de_resultado_por_pag_posto = 5;
                //Cálculo para o início da visualização
                $inicio_list_posto = ($quant_de_resultado_por_pag_posto * $pagina_posto) - $quant_de_resultado_por_pag_posto;
                //Este código puxa os dados referentes ao banco de dados ionformado
                $data_base_postos = new db ();  
                $link_postos = $data_base_postos->conecta_mysqli();
                //Esta é a estrutura para recuperar qualquer dado do Banco de dados

               if(isset($_POST[$menu_4]) and $_POST['buscar_posto'] != '') { // esta é a condição caso exista alguma consulta
                $consulta_postos = $pdo->prepare("SELECT * from posto_atendimento where nome_posto LIKE :nome_posto  ORDER BY id_posto DESC    limit $inicio_list_posto, $quant_de_resultado_por_pag_posto"); 
                $consulta_postos->bindValue(":nome_posto",$buscar_nome_posto);
                $consulta_postos->execute();
                $condicao_de_busca_posto = 1;
                # code...
              } else { // esta é a condição caso não exista nenhuma consulta, retornando para o estado inicial
               $consulta_postos = $pdo->query("SELECT * FROM posto_atendimento ORDER BY id_posto DESC limit $inicio_list_posto, $quant_de_resultado_por_pag_posto ");//Seleciona o BD bairros
                $condicao_de_busca_posto = 0;

             }

                              $dados_postos = $consulta_postos->fetchAll(PDO::FETCH_ASSOC);

                            /*    if ($pagina_atual_posto == 1 && $condicao_de_busca_posto == 1) {
                                $pag_mostrar = 0; // Se estiver pesquisando o valor é zero
                               }

                                 if ($pagina_atual_posto == 1 && $condicao_de_busca_posto == 0) {
                                $pag_mostrar = 1; // Se estiver na primeira página sem pesquisar
                               }

                               if ($pagina_atual_posto > 1 ) {
                                $pag_mostrar = 0; // Caso alterne a página
                               }*/

                               for ($i=0; $i < count($dados_postos); $i++){
                                  foreach ($dados_postos[$i] as $key => $value) {
                                   //Comando for e foreach fornece da om loop de leitura em todos os dados do banco de dados.
                               }
                               $id_posto       = $dados_postos[$i]['id_posto'];
                               $nome_posto     = $dados_postos[$i]['nome_posto'];
                               $bairro_posto   = $dados_postos[$i]['bairro_posto'];
                               $endereco_posto = $dados_postos[$i]['endereco_posto'];
                               $telefone_posto = $dados_postos[$i]['telefone_posto'];

                               

                               ?>
                                <tr>
                                  <th scope="row"> <?php echo  $id_posto ; ?> </th>
                                  <td><?php echo  ($nome_posto) ; ?></td>
                                  <td><?php echo  ($bairro_posto) ; ?></td>
                                  <td><?php echo  ($telefone_posto) ; ?></td>
                                  <td>  
                                      <a  href="adm.php?acao=diversos_adm&posto_atend=1&editar_posto=1&id_posto=<?php echo $id_posto ?>" style="color: black"type="button"><img src="../../imagens/conteudo/olho.png" style="width: 25px ; height: 25px "></a>
                                    </td>
                                  </tr>
                               <?php  }  ?>

        </tbody>
      </table>

    </div>
</div>

          <?php  $data_base_posto = new db ();
                 $link_posto = $data_base_posto->conecta_mysqli(); 

                //Iniciando a paginação e contando os usuários do banco de daodos
                  //Somando a quantidade de registros no bd
                  $result_listagem_posto        = "SELECT count(id_posto) as resultado_posto FROM posto_atendimento"; 
                  $resultado_qtd_rgist_posto    = mysqli_query($link_posto,$result_listagem_posto);
                  $quantidade_total_rgist_posto = mysqli_fetch_assoc($resultado_qtd_rgist_posto);

                //Quantidade de páginas que serão apresentadas nos links
                  $quantidade_paginas_posto = ceil($quantidade_total_rgist_posto['resultado_posto'] / $quant_de_resultado_por_pag_posto);
                //Limitar o número do link de paginação
                  $limite_links_maximo_posto = 2;

           ?>

          
           <!--________________________________________EDITAR_______________________________________________-->

           <?php  /*Comando php para puxar os dados referente ao id
       e executar a edição.*/

     
                          if(isset($_GET['editar_posto']) == 1){
                           $id_posto_edit = $_GET['id_posto']; //Passagem de dados via URL por meio GET
                        
                             //Recuperar dados do usuario a ser editado

                            $resultado_consulta_editar_posto = $pdo->query ("select * from posto_atendimento where id_posto = '$id_posto_edit'");
                             $dados_edit_posto               = $resultado_consulta_editar_posto->fetchAll(PDO::FETCH_ASSOC);

                                 $id_posto       = $dados_edit_posto[0]['id_posto'];
                                 $nome_posto     = $dados_edit_posto[0]['nome_posto'];
                                 $bairro_posto   = $dados_edit_posto[0]['bairro_posto'];
                                 $endereco_posto = $dados_edit_posto[0]['endereco_posto'];
                                 $telefone_posto = $dados_edit_posto[0]['telefone_posto'];


                         /*
                          $objDb = new db ();
                          $link =  $objDb->conecta_mysqli();

                          $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

                          $result_rato = "SELECT * FROM bd_rato WHERE id = '$id'";
                          $resultado_rato = mysqli_query ($link,$result_rato);
                          $row_rato = mysqli_fetch_assoc($resultado_rato);*/
                        }
                      ?>



        <!--______________________________________________________________________________________________-->


<div align="center">

 <?php      
          //BOTÕES DE PAGINAÇÕES
          echo "<a class='btn btn-secondary' href='adm.php?acao=diversos_adm&posto_atend=1'>Primeira</a> ";

          for ($pagina_anterior_posto = $pagina_posto -  $limite_links_maximo_posto; $pagina_anterior_posto<= $pagina_posto -1 ; $pagina_anterior_posto ++  ) { 

            if ($pagina_anterior_posto >= 1 ) {
              echo "<a class='btn btn-primary' href='adm.php?acao=diversos_adm&posto_atend=$pagina_anterior_posto'>$pagina_anterior_posto</a> ";
                } //Conta uma página para trás e para frente
              }
          echo "<a class='btn btn-danger' href='adm.php?acao=diversos_adm&posto_atend=$pagina_posto'> $pagina_posto</a> ";//Página atual

          for ($pagina_posterior_posto = $pagina_posto + 1; $pagina_posterior_posto <= $pagina_posto + $limite_links_maximo_posto ; $pagina_posterior_posto ++  ) { 

            if ($pagina_posterior_posto <= $quantidade_paginas_posto ) {
              echo "<a class='btn btn-primary' href='adm.php?acao=diversos_adm&posto_atend=$pagina_posterior_posto'>$pagina_posterior_posto</a> ";
                } //
              }

          echo "<a class='btn btn-secondary' href='adm.php?acao=diversos_adm&posto_atend=$quantidade_paginas_posto'>Última</a> ";//ultima página
          ?>
          <hr>
           <h5>Total de postos cadastrados = <?php echo  $quantidade_total_rgist_posto['resultado_posto']; ?></h5>



</div>

</div>


<!--#####################################_____MODAL_CADASTRAR_____#################################-->
<form method="post" action="../../back_end/inserir_bd/ponto_atendimento/inserir_ponto_atendimento.php">
 <div class="modal fade" id="modal_ponto_de_atend" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable  modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Inserir ponto de atendimento <img src="../../imagens/conteudo/hospital.png" style="width: 40px ; height: 40px ;"> </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--ARRUMAR O BOTÃO POST-->
          <div class="modal-body" >

            <?php include($formulario_ponto_de_atend); ?>

         </div>
         <div class="modal-footer">
          <button  data-dismiss="modal" class="btn btn-secondary">Fechar</button>
          <button type="submit" class="btn btn-success">Salvar</button>

        </div>
      </div>
    </div>
  </div>
</form>
<!--#####################################_____|||||_____#################################-->




<!--#####################################_____MODAL_EDITAR_____#################################-->
<form method="post" action="../../back_end/inserir_bd/ponto_atendimento/editar_ponto_atendimento.php">
 <div class="modal fade" id="modal_editar_postos" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable  modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Visualizar posto <y style="color:#ba0404"><?php echo $id_posto_edit ?> <img src="../../imagens/conteudo/anexar.png" style="width: 40px ; height: 40px ;"></y></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--ARRUMAR O BOTÃO POST-->
          <div class="modal-body" >


           <?php include($formulario_editar_ponto_atend); ?>
             

         </div>
         <div class="modal-footer">

          <div>
            <a href="adm.php?acao=diversos_adm&posto_atend=1&excluir_posto=1&id_posto=<?php echo $id_posto ?>"  class="btn btn-danger"> Excluir <img src="../../imagens/conteudo/excluir_2.png" style="width: 30px; height: 30px">
            </a >
          </div>
          <div>
            <button id="editar_postos_btn" type="button" onclick="editar_postos_atendimento()"  class="btn btn-primary" name="btn_cadastrar"  > Editar <img src="../../imagens/conteudo/editar_2.png" style="width: 30px; height: 30px"> </button>
          </div> 
          <div>
           <button type="submit" id="salvar_postos_btn" class="btn btn-primary" > Salvar <img src="../../imagens/conteudo/armazena.png" style="width: 30px; height: 30px"> </button> 
          </div> 
          <button type="button"  class="btn btn-secondary" data-dismiss="modal">Fechar <img src="../../imagens/conteudo/fechar_janela.png" style="width: 30px; height: 30px"></button>
         

        </div>
      </div>
    </div>
  </div>
</form>
<!--#####################################_____|||||_____#################################-->


 <!--####################################_MENSAGENS DE ERRO_######################################-->
   
   <?php include($mensagens_ponto_de_atend); ?>

<!--_________________________________________________________________________________________-->