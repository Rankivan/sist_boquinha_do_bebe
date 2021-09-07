           
           <!-- IF ternario para testar informações impressos em tela -->
       <?php 
       
       
       $formulario_usuarios   = 'atr_usuarios/formulario_usuarios.php';
       $formulario_editar_usu = 'atr_usuarios/formulario_editar_usu.php';
       $mensagens_sist_usu    = 'atr_usuarios/mensagens_sist_usu.php';


              //_________________MSG cadastro ________________//
       $msg_usu_sucess =  isset ($_GET ['msg_usu_sucess']) ? $_GET ['msg_usu_sucess']: 0 ; 
       $msg_usu_erro =  isset ($_GET ['msg_usu_erro']) ? $_GET ['msg_usu_erro']: 0 ; 
       
              //_________________MSG editar ________________//
       $msg_edita_usu_sucess =  isset ($_GET ['msg_edita_usu_sucess']) ? $_GET ['msg_edita_usu_sucess']: 0 ; 
       $msg_edita_usu_erro =  isset ($_GET ['msg_edita_usu_erro']) ? $_GET ['msg_edita_usu_erro']: 0 ; 

       $msg_edita_usu_verifi_erro =  isset ($_GET ['msg_edita_usu_verifi_erro']) ? $_GET ['msg_edita_usu_verifi_erro']: 0 ; 

       $msg =  isset ($_GET ['msg']) ? $_GET ['msg']: 0 ; 

       $msg_exclui_usu_sucess =  isset ($_GET['msg_exclui_usu_sucess']) ? $_GET ['msg_exclui_usu_sucess']: 0 ; 

       $msg_exclui_usu_erro =  isset ($_GET['msg_exclui_usu_erro']) ? $_GET ['msg_exclui_usu_erro']: 0 ;


       
       ?>


  <!--#######################################__USUÁRIOS__########################################-->


  <div style="padding: 10px;">

   <div class="row">
     <div class="col-sm-6">
       <div class="card">
        <h5 class="card-header"> Inserir usuários </h5>
        <a href="#" style="color: black" type="button"data-toggle="modal" data-target="#modal_usuarios">
         <div class="card-body">

          <p class="card-text">Insisra novos usuários no sistema e defina as suas permissões</p>
          <img src="../../imagens/conteudo/cadastro.png" style="width: 40px ; height: 40px ;">
        </div></a>
      </div>
    </div>

    <div class="col-sm-6">
     <div class="card">
      <h5 class="card-header"> Pesquisar usuários </h5>
      <div class="card-body">	    
        <form method="post">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
             <div class="input-group-text"> 
              <button  type="submit" name="<?php echo $menu_2; ?>"> <img src="../../imagens/conteudo/procurar.png" style="width: 40px ; height: 40px ;" ></button></div>
            </div>
            <input name="buscar" style="height: 70px;" type="text" class="form-control"placeholder="Pesquisar">
          </div>
        </form> 

      </div> 
    </div>
  </div>
</div> <br>


<div> <!-- Mensagens de retorno, cadastros e edições -->  
<?php include($mensagens_sist_usu); ?>
</div>

  

  <!--#######################################__TABELA__########################################-->

<div class="table table-responsive table-sm" >
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col"> N°     </th>
          <th scope="col"> Nome   </th>
          <th scope="col"> Função </th>
          <th scope="col"> Nível  </th>
          <th scope="col"> Opções </th>

        </tr>
      </thead>
      <tbody>

        <?php 
               @$buscar_nome = '%'.$_POST['buscar'].'%'; // Busca aproximada usando % com operador LIKE

                  //_____________________________PAGINAÇÂO________________________________

                //Arquivo que criará o sistema de páginação do projeto
                //Envio do número da página via GET
                $pagina_atual_usu = filter_input(INPUT_GET,'pagina_usu', FILTER_SANITIZE_NUMBER_INT); 
                //Se ela for vazia será a página 1, senão é igual ao número via GET
                $pagina_usu = (!empty($pagina_atual_usu)) ? $pagina_atual_usu : 1;
                //Definir número de páginas por número de registros
                $quant_de_resultado_por_pag = 5;
                //Cálculo para o início da visualização
                $inicio_list_usu = ($quant_de_resultado_por_pag * $pagina_usu) - $quant_de_resultado_por_pag;




               if (isset($_POST[$menu_2]) and $_POST['buscar'] != '') {
                $consulta = $pdo->prepare("SELECT * from usuarios where nome LIKE :nome ORDER BY id DESC limit $inicio_list_usu, $quant_de_resultado_por_pag"); 
                $consulta->bindValue(":nome",$buscar_nome);
                $consulta->execute();
                # code...
              } else {

          
                //Comando de consulta no banco de dados
                $consulta = $pdo->query("SELECT * from usuarios ORDER BY id DESC  limit  $inicio_list_usu, $quant_de_resultado_por_pag ");
              }
                $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
              //Este código conta e repassa as linhas da tabela "usuarios"
              //É um cópigo padrão da estrutura "PDO"
              for ($i=0; $i < count($dados); $i++){
              foreach ($dados[$i] as $key => $value) {
                  //echo $key."-".$value."<br>"; //Apresenta todos os valores das colunas
                  # code...
                }
                //echo $dados[$i]['nome']."<br><br>";
                $id                = $dados[$i]['id'];
                $nome              = $dados[$i]['nome'];
                $sobrenome         = $dados[$i]['sobrenome'];
                $data_nascimento   = $dados[$i]['data_nascimento'];
                $telefone          = $dados[$i]['telefone'];
                $tipo_usuario      = $dados[$i]['tipo_usuario'];
                $adicional_usuario = $dados[$i]['adicional_usuario'];
                $observacoes       = $dados[$i]['observacoes'];
                $nivel_acesso      = $dados[$i]['nivel_acesso'];
                $e_mail            = $dados[$i]['e_mail'];
                $senha             = $dados[$i]['senha'];
                $data_registro     = $dados[$i]['data_registro'];

                //$linhas = count($dados);//conta quantos registros  por página
    
                  ?>


      <!--Tabela de dados front end -->
        <tr> 
          <th scope="row"><?php echo ($id); ?></th>
          <td><?php echo ($nome); ?> <?php echo ($sobrenome);?></td>
          <td><?php echo ($tipo_usuario); ?></td>
          <td><?php echo ($nivel_acesso); ?></td>
           <td>
            <a href="adm.php?acao=usuarios_adm&funcao=editar&id=<?php echo $id ?>" style="color: black" ><img src="../../imagens/conteudo/olho.png" style="width: 25px ; height: 25px "></a>
           </td>
        </tr>
            <?php  }  ?>
      </tbody>
    </table>
</div>

                 <?php  $data_base = new db ();
                 $link = $data_base->conecta_mysqli(); 

                //Iniciando a paginação e contando os usuários do banco de daodos
                  //Somando a quantidade de registros no bd
                  $result_listagem = "SELECT count(ID) as resultado FROM usuarios"; 
                  $resultado_qtd_rgist = mysqli_query($link,$result_listagem);
                  $quantidade_total_rgist = mysqli_fetch_assoc($resultado_qtd_rgist);

                //Quantidade de páginas que serão apresentadas nos links
                  $quantidade_paginas = ceil($quantidade_total_rgist['resultado'] / $quant_de_resultado_por_pag);
                //Limitar o número do link de paginação
                  $limite_links_maximo = 2;

                 ?>


  <!--#######################################__ __########################################-->


<!--#######################################__ EDITAR USUARIOS __########################################-->
<?php  /*Comando php para puxar os dados referente ao id
       e executar a edição.*/

     
    if(isset($_GET['funcao'])=='editar'){
     $id_usuario_edit = $_GET['id']; //Passagem de dados via URL por meio GET
  
       //Recuperar dados do usuario a ser editado

      $resultado_consulta_editar = $pdo->query ("select * from usuarios where id = '$id_usuario_edit'");
       $dados_edit = $resultado_consulta_editar->fetchAll(PDO::FETCH_ASSOC);

       $nome               = $dados_edit[0]['nome'];
       $sobrenome          = $dados_edit[0]['sobrenome'];
       $data_nascimento    = $dados_edit[0]['data_nascimento'];
       $telefone           = $dados_edit[0]['telefone'];
       $tipo_usuario       = $dados_edit[0]['tipo_usuario'];
       $adicional_usuario  = $dados_edit[0]['adicional_usuario'];
       $observacoes        = $dados_edit[0]['observacoes'];
       $nivel_acesso       = $dados_edit[0]['nivel_acesso'];
       $e_mail             = $dados_edit[0]['e_mail'];
       $senha              = $dados_edit[0]['senha'];
       $cadastrante        = $dados_edit[0]['cadastrante'];
       $id_usu_edit        = $dados_edit[0]['id'];

       $e_mail_novo        = $dados_edit[0]['e_mail'];


   /*
    $objDb = new db ();
    $link =  $objDb->conecta_mysqli();

    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

    $result_rato = "SELECT * FROM bd_rato WHERE id = '$id'";
    $resultado_rato = mysqli_query ($link,$result_rato);
    $row_rato = mysqli_fetch_assoc($resultado_rato);*/
  
?>

    <script type="text/javascript">


       $(document).ready(function(){ //Abrir a modal pelo JS
        $("#modal_editar_usuarios").modal();
      });
   </script>
<?php }?>


<!--#################################__ Confirma exclusão __########################################-->
 
   <!-- Abre a modal de confirmação de exclusaão -->

                <h5>
                <?php if ($msg==1){ ?>
                    <script type="text/javascript">
                      $(document).ready(function(){ //Abrir a modal pelo JS
                      $("#modal_confirma_excluir_usuarios").modal();
                      });
                    </script>

                <?php }  ?> 
              </h5>


<!--#######################################__ __########################################-->

 <!--#################################__ PAGINAÇÃO __########################################-->

<div align="center">

 <?php
          echo "<a class='btn btn-secondary' href='adm.php?acao=usuarios_adm&pagina_usu=1'>Primeira</a> ";//Primeira página
          for ($pagina_anterior_usu = $pagina_usu -  $limite_links_maximo; $pagina_anterior_usu <= $pagina_usu -1 ; $pagina_anterior_usu ++  ) { 

            if ($pagina_anterior_usu >= 1 ) {
              echo "<a class='btn btn-primary' href='adm.php?acao=usuarios_adm&pagina_usu=$pagina_anterior_usu'>$pagina_anterior_usu</a> ";
                } //Conta uma página para trás e para frente
              }
          echo "<a class='btn btn-danger' href='adm.php?acao=usuarios_adm&pagina_usu=$pagina_usu'> $pagina_usu</a> ";//Página atual

          for ($pagina_posterior_usu = $pagina_usu + 1; $pagina_posterior_usu <= $pagina_usu + $limite_links_maximo ; $pagina_posterior_usu ++  ) { 

            if ($pagina_posterior_usu <= $quantidade_paginas ) {
              echo "<a class='btn btn-primary' href='adm.php?acao=usuarios_adm&pagina_usu=$pagina_posterior_usu'>$pagina_posterior_usu</a> ";
                } //
              }

          echo "<a class='btn btn-secondary' href='adm.php?acao=usuarios_adm&pagina_usu=$quantidade_paginas'>Última</a> ";//ultima página
          ?>
<hr>
 <h5>Total de usuários = <y><?php echo $quantidade_total_rgist['resultado']; ?></h5></y>
</div>

  <!--#######################################__ __########################################-->


   <!-- #########################_Modal_Cadastrar_usuario_######################### -->
   <form method="post" action="../../back_end/inserir_bd/usuarios/inserir_usuarios_bd.php">
     <div class="modal fade" id="modal_usuarios" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable  modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Cadastrar usuarios <img src="../../imagens/conteudo/anexar.png" style="width: 40px ; height: 40px "></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--ARRUMAR O BOTÃO POST-->
          
          <div class="modal-body" >
           <?php //REPASSAGEM DE CONTEUDO VIA PHP ?> 
           <?php include($formulario_usuarios); ?>
         </div>
         <div class="modal-footer">
          <button  class="btn btn-secondary" data-dismiss="modal"> <img src="../../imagens/conteudo/fechar_janela.png" style="width: 30px; height: 30px">Cancelar</button>
          <button type="submit" class="btn btn-primary" name="btn_cadastrar" > <img src="../../imagens/conteudo/armazena.png" style="width: 30px; height: 30px"> Cadastrar
          </button>
        </div>
      </div>
    </div>
  </div>
</form>

        <!-- #########################________######################### -->
   
   <!-- #########################_Modal_editar_usuario_######################### -->

   <form method="post" action="../../back_end/inserir_bd/usuarios/editar_usuarios.php">
     <div class="modal fade" id="modal_editar_usuarios" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable  modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Visualizar dados do N° <y style="color: red"> <?php echo $_GET['id'];  ?></y> <img src="../../imagens/conteudo/anexar.png" style="width: 40px ; height: 40px "></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--ARRUMAR O BOTÃO POST-->
          <div class="modal-body" >
           <?php //REPASSAGEM DE CONTEUDO VIA PHP ?> 
           <?php include($formulario_editar_usu); ?>
         </div>
         <div class="modal-footer">
          
            <a href="adm.php?acao=usuarios_adm&msg=1&id=<?php echo $id_usu_edit  ?>"  class="btn btn-danger">Excluir <img src="../../imagens/conteudo/excluir_2.png" style="width: 30px; height: 30px">
            </a>
         
          
            <button id="btn_editar_usu" type="button" onclick="btn_editar();"  class="btn btn-primary" name="btn_cadastrar"  > Editar <img src="../../imagens/conteudo/editar_2.png" style="width: 30px; height: 30px"> </button>
           
          
            <button id="btn_salvar_usu" type="submit"  class="btn btn-primary" > Salvar <img src="../../imagens/conteudo/armazena.png" style="width: 30px; height: 30px"> </button>
         
          
          <a href="adm.php?acao=usuarios_adm" class="btn btn-secondary" >Fechar <img src="../../imagens/conteudo/fechar_janela.png" style="width: 30px; height: 30px"></a>
          
        </div>
      </div>
    </div>
  </div>
</form>

        <!-- #########################________######################### -->


