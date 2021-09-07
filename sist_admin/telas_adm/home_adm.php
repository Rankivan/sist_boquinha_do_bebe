<?php $modal_home_atend = 'atr_home_atend/modal_home_atend.php'; ?>
<?php $atendimento_pac = 'atr_home_atend/atendimento_pac.php'; ?>

<!--#######################################__HOME__########################################-->

<div id="tela_home_atend"><!--Modal de abertura-->

    <div style="padding: 10px">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <h5 class="card-header"> Atendimento </h5>
                    <a data-toggle="modal" data-target="#modal_home_atend" style="color: black">
                        <div class="card-body">
                            <p class="card-text">Realize novos atendimentos e cadastre novos pacientes</p>
                            <img src="../../imagens/conteudo/odontologia.png" style="width: 40px ; height: 40px ">
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <h5 class="card-header"> Pesquisar atendimento </h5>
                    <div class="card-body">

                        <form method="post">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <button type="submit" name="<?php echo $menu_3; ?>"><img
                                                    src="../../imagens/conteudo/procurar.png"
                                                    style="width: 40px ; height: 40px ;"></button>
                                    </div>
                                </div>
                                <input name="buscar_pac" style="height: 70px;" type="text" class="form-control"
                                       placeholder="Pesquisar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <table class="table table-striped  table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>

        <!--___________modal____________-->

    </div>
</div><!--Modal de fechamento-->

<!--#######################################__  __########################################-->

<?php include($modal_home_atend); ?>
<?php include($atendimento_pac); ?>

