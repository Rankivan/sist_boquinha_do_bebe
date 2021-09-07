<div>

    <h5>Saúde:</h5><br>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Local do pré natal</label>
            <input name="local_pre_natal_anam" type="text" class="form-control" placeholder="Nome da cidade"
                   required="">
        </div>

        <!--__________________________-->

        <div class="form-group col-sm-3">
            <label>Usou remédios na gestação</label>
            <select name="uso_remedio_gest_anam" class="form-control" id="remedio_select_js"
                    onchange="function_remedio_select_js()" required="">
                <option value=""></option>
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
                >
            </select>
        </div>
        <div id="medic_in" class="form-group col-md-5">
            <label style="color: blue">Nome do(s) medicamento(s)</label>
            <input name="uso_remedio_gest_anam_comp" type="text" class="form-control"
                   placeholder="Nome do(s) medicamento(s)">

        </div>


        <!--__________________________-->
    </div>


    <div class="form-row">

        <!--__________________________-->
        <div class="form-group col-md-3">

            <label>Anomalia ao nascer</label>
            <select name="anomalia_ao_nasc_anam" class="form-control" onchange="function_anomalia_select_js()"
                    id="anomalia_select_js" required="">
                <option value=""></option>
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
                >
            </select>
        </div>
        <div id="anomalia_in" class="form-group col-md-5">
            <label style="color: blue">Descrva a anomalia</label>
            <input name="anomalia_ao_nasc_anam_comp" type="text" class="form-control" placeholder="">
        </div>
        <!--__________________________-->


        <!--___________________________-->
        <div class="form-group col-md-3">

            <label> Realiza Tratamento médico</label>
            <select name="tratam_med_anam" class="form-control" id="tratamento_select_js"
                    onchange="function_tratamento_select_js()" required="">
                <option value=""></option>
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
                >
            </select>
        </div>

        <div id="tratamento_in" class="form-group col-md-5">
            <label style="color: blue">Descrva o tratamento </label>
            <input name="tratam_med_anam_comp" type="text" class="form-control" placeholder="Tratamento">
        </div>
        <!--___________________________-->


        <div class="form-group col-md-2">
            <label>Tipo de parto</label>
            <select name="tipo_de_parto_anam" class="form-control" required="">
                <option value=""></option>
                <option value="normal">Normal</option>
                <option value="cesariana">Cesariana</option>
                >
            </select>
        </div>
        <div class="form-group col-md-2">
            <label>Possui irmão(s)</label>
            <select name="qtd_irmaos_anam" class="form-control" required="">
                <option></option>
                <option value="nao">Não</option>
                <option value="apenas um">Apenas um</option>
                <option value="mais de um">Mais de um</option>
                <option value="mais de cinco">Mais de cinco</option>
                >
            </select>
        </div>

        <div class="form-group col-md-4">
            <label>Pediatra responsável</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Dr(a)</span>
                <input name="pediatra_resp_anam" type="text" class="form-control"
                       placeholder="Nome da pediatra rasponsável" required="">
            </div>
        </div>


    </div>
    <hr>

    <h5> Alimentação: </h5> <br>


    <div class="form-row">

        <div class="form-group col-md-4">
            <label>Amamentação materna</label>
            <select name="alim_materna_anam" class="form-control" required="">
                <option value=""></option>
                <option value="sem amamentacao">Sem amamentação</option>
                <option value="sem horario definido">Sem horario definido</option>
                <option value="apenas de dia">Apenas de dia</option>
                <option value="apenas de noite">Apenas de noite</option>
                <option value="dia e noite">Dia e noite</option>

                >
            </select>
        </div>

        <!--___________________________-->

        <div class="form-group col-md-4">
            <label>Dificuldade na amamentação</label>
            <select name="dificuldade_alim_anam" class="form-control" id="amamentacao_select_js"
                    onchange="function_amamentacao_select_js()" required="">
                <option value=""></option>
                <option value="sim">Sim</option>
                <option value="um pouco">Um pouco</option>
                <option value="nao">Não</option>


                >
            </select>
        </div>

        <div id="amamentacao_in" class="form-group col-md-4">
            <label style="color: blue">Descreva dificuldade</label>
            <input name="dificuldade_alim_anam_comp" type="text" class="form-control">
        </div>

        <!--___________________________-->


    </div>


    <div class="form-row">
        <div class="form-group col-md-4">

            <label>Utiliza mamadeira</label>
            <select name="mamadeira_anam" class="form-control" required="">
                <option value=""></option>
                <option value="sim muito">Sim, muito</option>
                <option value="um pouco">Um pouco</option>
                <option value="nao utiliza">Não utiliza</option>
                >
            </select>
        </div>

        <div class="form-group col-md-2">
            <label>Usa chupeta</label>
            <select name="chupeta_anam" class="form-control" required="">
                <option value=""></option>
                <option value="sim muito">Sim, muito</option>
                <option value="um pouco">Um pouco</option>
                <option value="nao utiliza">Não utiliza</option>
                >
            </select>
        </div>

        <div class="form-group col-md-2">
            <label>Chupa o dedo</label>
            <select name="chupa_dedo_anam" class="form-control" required="">
                <option value=""></option>
                <option value="sim muito">Sim, muito</option>
                <option value="um pouco">Um pouco</option>
                <option value="nao utiliza">Não utiliza</option>
                >
            </select>
        </div>


        <div class="form-group col-md-2">
            <label> Possui Higiene</label>
            <select name="higiene_anam" class="form-control" required="">
                <option value=""></option>
                <option value="sim muito">Sim, muito</option>
                <option value="um pouco">Um pouco</option>
                <option value="nao">Não</option>
                >
            </select>
        </div>

    </div>
    <hr>

    <h5>Ocorrencias</h5> <br>

    <div class="form-row">

        <div class="form-group col-md-4">
            <!--___________________________-->
            <label> Traumatismo bucal </label>
            <select name="trauma_bucal_anam" class="form-control" id="trauma_select_js"
                    onchange="function_trauma_select_js()" required="">
                <option value=""></option>
                <option value="nao sabe informar">Não sabe informar</option>
                <option value="nunca ocorreu">Nunca ocorreu</option>
                <option value="sim faz menos de um mes">Sim, faz menos de um mês</option>
                <option value="sim faz mais de um mes">Sim, faz mais de um mês</option>
                <option value="sim faz mais de seis meses">Sim, faz mais de 6 meses</option>

            </select>
        </div>

        <div id="trauma_in" class="form-group col-md-4">
            <label style="color: blue">Descreva o trauma</label>
            <input name="trauma_bucal_anam_comp" type="text" class="form-control">
        </div>
        <!--___________________________-->

        <div class="form-group col-md-4">
            <!--___________________________-->
            <label> Histórico de carie na família</label>
            <select name="hist_carie_familia_anam" class="form-control" required="">
                <option value=""></option>
                <option value="nao sabe informar">Não sabe informar</option>
                <option value="nao">Não</option>
                <option value="sim a mae">Sim, a mãe</option>
                <option value="sim o pai">Sim, o pai</option>
                <option value="sim o pai e mae">Sim, pai e mãe</option>
                <option value="sim irmao(s)">Sim, irmão(s)</option>
                <option value="sim pai mae e irmao(s)">Sim, pai, mãe e irmão(s)</option>

            </select><br>

            <!-- ocultos-->

        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Observações</label>
        <textarea name="campo_observacoes_anam" placeholder="Insira observações inportantes sobre o paciente"
                  class="form-control"></textarea>
    </div>
</div>