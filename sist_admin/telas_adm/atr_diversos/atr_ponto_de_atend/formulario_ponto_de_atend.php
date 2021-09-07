

<div class="form-row"><!--DIV-->

  <!--__________________-->

  <div class="form-group col-md-4">
    <label >Nome da unidade </label>
    <input type="text" class="form-control" required="" placeholder="insira o nonome do local de atendimento" name="nome_posto">
  </div>


 <!-- <div class="form-group col-md-4">
    <label >Bairro</label>
    <input type="text" class="form-control" placeholder="Insira o bairro de atendimento"name="bairro_posto">
  </div> -->


      <div class="form-group col-md-3"> <!-- Mudar para possuir incrementação via php e bd -->
        <div id="select_bairros_posto">
          <label >Bairro</label>
          <select id="select_postos_js" class="form-control"  name="bairro_posto" disabled>
            <option value=""></option>

               <?php

               $data_base_bairros = new db ();  //Esta é a estrutura para recuperar qualquer dado do Banco de dados
               $link_bairros = $data_base_bairros->conecta_mysqli();

               $consulta_bairro = $pdo->query("SELECT * FROM bairros");//Seleciona o BD bairros
               $dados_bairro = $consulta_bairro->fetchAll(PDO::FETCH_ASSOC);


               for ($i=1; $i < count($dados_bairro); $i++){
                  foreach ($dados_bairro[$i] as $key => $value) {
                   //Comando for e foreach fornece da om loop de leitura em todos os dados do banco de dados.
               }

               $nome_bairro = $dados_bairro[$i]['bairro_nome_bairro'];

               ?>
               <!-- traz o echo dos bairros e após o option  -->
               <option value="<?php echo $nome_bairro?>"> <?php echo $nome_bairro ?> </option>

               <?php } ?>

         </select>
       </div>

       <div id="input_bairro_posto">
        <label >Bairro</label>
        <input id="insere_bairro_man" class="form-control" placeholder="Digite o novo bairro" type="text" name="bairro_posto" disabled>
      </div>

      <div id="botao_bairro_posto_aterna">
        <button type="button" name="" onclick="botao_add_bairro_js()"> <img src="../../imagens/conteudo/cadastro.png" style="width: 30px ; height: 30px ">Digitar novo bairro
        </button>
      </div>

      <div id="botao_bairro_posto_aterna_voltar">
        <button type="button"  name="" onclick="botao_bairro_posto_aterna_voltar()">
          <img src="../../imagens/conteudo/voltar.png" style="width: 30px ; height: 30px "> Cancelar
        </button>
      </div>
      
    </div><!--DIV-->



  <div class="form-group col-md-4">
    <label >Endereço</label>
    <input required="" type="text" class="form-control" placeholder="Endereço para uma eventual consulta" name="endereco_posto">
  </div>

  <div class="form-group col-md-4">
    <label >Telefone</label>
    <input type="text" required="" class="form-control" placeholder="Insira um telefone do local de atendimento" name="telefone_posto">
  </div>
     
  <!--__________________-->
</div>


     <input required="" type="hidden" name="cadastrante_posto" value="<?=$_SESSION['id']?> - <?=$_SESSION['nome_entrada']?>">
