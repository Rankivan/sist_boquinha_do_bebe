<div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label >Nome da patologia</label>
            <input id="input_edit_nome" type="text" class="form-control" required="" placeholder="Ex: Cárie" name="nome" value="">
        </div>

        <div class="form-group col-md-6">
            <label >Local da patologia</label>
            <select  class="form-control" required=""  onchange="tipo_usuario_select_edit_js()" name="tipo_usuario">

                <option></option>
                <option value="Dente">Dente</option>
                <option value="Lábio superior">Lábio superior</option>
                <option value="Lábio inferior">Lábio inferior</option>
                <option value="Céu da boca">Céu da boca</option>
                <option value="Assoalho bucal">Assoalho bucal</option>
                <option value="lingua">lingua</option>
                <option value="Outros">Outros</option>

            </select>
        </div>

        <div class="form-group col-md-12">
            <label >Observações</label>
            <textarea id="input_edit_nome" type="text" class="form-control" required="" placeholder="Insira as observações" name="nome" value=""></textarea>
        </div>

</div>
</div>