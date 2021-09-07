<div>

    <div class="form-row">
        <div class="form-group col-md-2">
            <label>Primeiro Nome </label>
            <input type="text" class="form-control" required="" placeholder="Ex: Rafael" name="nome">
        </div>
        <div class="form-group col-md-6">
            <label>Sobrenome</label>

            <input type="text" class="form-control" required="" placeholder="Ex: da Silva" name="sobrenome">

        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Data de nascimento</label>
            <input type="date" class="form-control" placeholder="insira a quantidade de itens" required=""
                   name="data_nascimento">
        </div>


        <div class="form-group col-md-4">
            <label>E-mail (usuário)</label>
            <input type="email" class="form-control" placeholder="exemplo@email.com" required="" name="e_mail">
        </div>

        <div class="form-group col-md-4">
            <label>Senha</label>
            <input type="password" class="form-control" placeholder="digite uma senha" required="" name="senha">
        </div>


    </div>


    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Telefone</label>
            <input type="" class="form-control" placeholder="Telefone do usuário" required="" name="telefone">
        </div>


        <div class="form-group col-md-4">
            <label>Tipo de usuário</label>
            <select class="form-control" required="" id="tipo_usu_select" onchange="tipo_usuario_select_js()"
                    name="tipo_usuario">

                <option value="0"></option>
                <option value="Aluno">Aluno</option>
                <option value="Denstista">Dentista</option>
                <option value="Auxiliar">Auxiliar</option>
                <option value="Outro">Outro</option>

            </select>
        </div>

        <div id="aluno_in" class="form-group col-md-4">
            <label> Matricula </label>
            <input class="form-control" placeholder="" name="adicional_usuario">
        </div>


        <div id="dentista_in" class="form-group col-md-4">
            <label> N° CRO </label>
            <input class="form-control" placeholder="" name="adicional_usuario">
        </div>


        <div id="auxiliar_in" class="form-group col-md-4">
            <label> Descreva a função </label>
            <input class="form-control" placeholder="" name="adicional_usuario">
        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Observações</label>
            <input type="text" class="form-control" name="observacoes">
        </div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="administrador" name="nivel_acesso">
            <label class="form-check-label" for="gridCheck">
                Tornar um administrador
            </label>
        </div>
    </div>


    <input type="hidden" name="cadastrante" value="<?= $_SESSION['id'] ?> - <?= $_SESSION['nome_entrada'] ?>">

</div>
<hr>





        



   








