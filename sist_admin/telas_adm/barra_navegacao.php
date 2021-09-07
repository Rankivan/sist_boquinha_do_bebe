<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"> <img id="img_bebe_adm_logo_01_css" src="../../imagens/bebe_area_adm.png"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">

        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">

                <a class="nav-link <?php echo $menu_1_ativo ?>" type="button" onclick="atualiza_evento()" role="tab"
                   aria-controls="v-pills-home" aria-selected="false"><h6>Atender <img
                                src="../../imagens/conteudo/atendimento.png" style="width:30px; height:30px;"></h6></a>

                <script type="text/javascript">//FUNÇÃO JS PARA ENVIAR FORMULÁRIO E ATUALIZAR STATUS DO EVENTO
                  function atualiza_evento() {
                    document.getElementById('atualiza_eventos').submit();
                  }
                </script>

            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo $menu_2_ativo ?>" href="adm.php?acao=<?php echo $menu_2 ?>" role="tab"
                   aria-controls="v-pills-home" aria-selected="false"><h6>Usuários <img
                                src="../../imagens/conteudo/usu_nav.png" style="width:30px; height:30px;"></h6></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $menu_3_ativo ?>" href="adm.php?acao=<?php echo $menu_3 ?>" role="tab"
                   aria-controls="v-pills-home" aria-selected="false"><h6>Pacientes <img
                                src="../../imagens/conteudo/bebe.png" style="width:30px; height:30px;"></h6></a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo $menu_4_ativo ?>" href="adm.php?acao=<?php echo $menu_4 ?>" role="tab"
                   aria-controls="v-pills-home" aria-selected="false"><h6>Diversos <img
                                src="../../imagens/conteudo/solido.png" style="width:30px; height:30px;"></h6></a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo $menu_5_ativo ?>" href="adm.php?acao=<?php echo $menu_5 ?>" role="tab"
                   aria-controls="v-pills-home" aria-selected="false"><h6> Opções <img
                                src="../../imagens/conteudo/config.png" style="width:30px; height:30px;"></h6></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" type="button" class="btn btn-primary" data-toggle="modal"
                   data-target="#modalExemplo"><h6> Sair <img src="../../imagens/conteudo/sair.png"
                                                              style="width:30px; height:30px;"></h6></a>
            </li>

        </ul>
    </div>
    <!--  PARTE QUE MOSTRA O NOME E O NIVEL DE ACESSO  -->
    <div style="margin-right: 20px;">
        <h5>
            <y style="color:#2346db">

                <?= $_SESSION['id'] ?> - <?= $_SESSION['nome_entrada'] ?> <!--Retorna o ID e o nome-->

                <!--Verifica se o usuário é ADM ou não-->
                (<?php if ($_SESSION['nivel_acesso'] == "administrador") {
                    echo "administrador";
                } else {
                    echo "usu_comum";
                }
                ?>)
            </y>
        </h5>
    </div>

        </nav> <!-- /NAV_BAR -->
        
          <hr>                
            <div>

              <!--________________CÓDIGO PHP_________________________-->
                <?php

                   if (@$_GET['acao'] == $menu_1 ) {   
                        include_once ($menu_1.".php");}
                      elseif (@$_GET['acao'] == $menu_2)  {
                        include_once ($menu_2.".php");}
                      elseif (@$_GET['acao'] == $menu_3)  {
                        include_once ($menu_3.".php");}
                      elseif (@$_GET['acao'] == $menu_4)  {
                        include_once ($menu_4.".php");}
                      elseif (@$_GET['acao'] == $menu_5)  {
                        include_once ($menu_5.".php");}
                   
                         else { 

                        include_once ($menu_1.".php");

                       }
                   ?>
               <!--_________________________________________________-->
          </div>


 
        <!-- Modal de confirmação de saida do sistema -->
      <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
           aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Sair desta sessão</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                      <h6>Você deseja realmente sair do sistema?</h6>
                  </div>
                  <div class="modal-footer">

                      <a type="button" class="btn btn-danger"
                         href="../../back_end/validacoes/quebra_sessao.php">Sair</a>

                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Não sair</button>
                  </div>
              </div>
          </div>
      </div>


      <form method="post" action="../../back_end/inserir_bd/eventos/atualiza_evento.php" id="atualiza_eventos">

      </form>