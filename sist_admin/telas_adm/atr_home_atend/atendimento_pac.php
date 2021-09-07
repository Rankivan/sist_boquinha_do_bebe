<?php

$modal_anamnese = 'atr_home_atend/modal_anamnese.php';

function calcularIdade($date)
{

    $time = strtotime($date);
    if ($time === false) {
        return '';
    }

    $year_diff = '';
    $date = date('Y-m-d', $time);
    list($year, $month, $day) = explode('-', $date);
    $year_diff  = date('Y') - $year;
    $month_diff = date('m') - $month;
    $day_diff   = date('d') - $day;
    if ($day_diff < 0 || $month_diff < 0) $year_diff;

    return $year_diff;

}

if (isset($data_nascimento_atender_pac)) {
    # code...
    $dataNascimento = ($data_nascimento_atender_pac); #VARIÁVEL DA TABELA
    $date     = new DateTime($dataNascimento);
    $interval = $date->diff(new DateTime(date('Y-m-d')));

    $anos  = $interval->format('%Y');
    $meses = $interval->format('%m');
    $dias  = $interval->format('%d');
}

?>

<div id="atendimento_pac" style="padding: 10px"><!--DIV inicial-->

    <div class="row">
        <div class="col-sm-2">
            <h3> Paciente N°
                <y style="color: blue "><?php echo $id_atender_pac ?> </y>
            </h3>
        </div>

        <div class="col-sm-3">
            <h3> Nome:
                <y style="color: blue "><?php echo $nome_atender_pac . " " . $sobrenome_atender_pac ?>  </y>
            </h3>
        </div>

        <div class="col-sm-2">
            <h3> Idade:
                <y style="color: blue">

                    <?php
                    if ($anos == 1 && $meses > 1) {
                        echo $anos . " ano" . " e " . ($meses) . " meses";
                    }
                    if ($anos == 1 && $meses == 1) {
                        echo $anos . " ano" . " e " . ($meses) . " mês";
                    }
                    if ($anos > 1 && $meses == 1) {
                        echo $anos . " anos" . " e " . ($meses) . " mês";
                    }
                    if ($anos > 1 && $meses > 1) {
                        echo $anos . " anos" . " e " . ($meses) . " meses";
                    }
                    if ($anos < 1 && $meses == 1) {
                        echo ($meses) . " mês";
                    }
                    if ($anos < 1 && $meses > 1) {
                        echo ($meses) . " meses";
                    }
                    if ($anos < 1 && $meses < 1 && $dias > 1) {
                        echo ($dias) . " dias";
                    }
                    if ($anos < 1 && $meses < 1 && $dias == 1) {
                        echo ($dias) . " dia";
                    }
                    ?>

                </y>
            </h3>
        </div>
    </div>
    <hr>

<div class="row">
    <div class="col-md-4" id="componenteBoca">
        <?php include('../components/boca_component.php') ?>
    </div>
    <div class="col-sm-12 col-md-12 col-xl-6" id="textArea" style=" border-radius: 10px;">
        <div style="padding: 30px">
            <h5>Últimos Atendimentos</h5> <hr>

            <table class="table table-striped">
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
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>

            <div>
                <button type="button" class="btn btn-light" style="background-color: #c8c8c8;"
                        data-toggle="modal" data-target="#histórico_atendimento"> Histórico do Paciente <img src="../../imagens/conteudo/historico.png"
                         style="width: 20px ; height: 20px ;">
                </button>
            </div>

        </div><br>

        <div style="padding: 30px">
            <h5>Menu de opções</h5> <hr>
            <button type="button" class="btn btn-light" style="background-color: #c8c8c8;">Realizar Observações</button>
            <button type="button" class="btn btn-light" style="background-color: #EBCF8C;">Inserir Patologia</button>
            <button type="button" class="btn btn-light" style="background-color: #A2B1F0;" data-toggle="modal"
                    data-target="#modal_anamnese_atendimento">Ficha do Paciente</button>
        </div><br>

        <div style="padding: 30px">
            <h5>Finalizar</h5> <hr>

            <button type="button" class="btn btn-light" style="background-color: #22F05F;">Salvar Atendimento
                <img src="../../imagens/conteudo/armazena.png" style="width: 20px; height: 20px"></button>

        </div><br>

    </div>
</div>

</div><!--DIV fechamento-->

<?php include($modal_anamnese); ?> 