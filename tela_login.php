<?php $erro = isset ($_GET ['erro']) ? $_GET ['erro'] : 0; ?>
<!-- IF ternario para testar informações impressos em tela -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> Boquinha do Bebê </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=0.6">
    <link rel="ícone de atalho" href="imagens/five_icon/five_icon_web/favicon.ico" type="image / x-icon">
    <link rel="icon" href="imagens/five_icon/five_icon_web/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="geral_estilos/tela_login_1.css">

</head>
<!--___________________________________________________________________________________-->
<!--___________________________________________________________________________________-->
<body id="cor_fundo_css">
<div>
    <!--vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv-->
    <div align="center">
        <div id="campo_login_1_css">
            <div id="img_bebe_position_css">
                <img id="img_bebe_1_css" src="imagens/boquinha_bebe_logo.png">

            </div>
            <!-- CORRIGIR PARA CELULAR -->
            <div style="position: absolute; margin-left: 100px;margin-top: 20px;">
                <h6> <?php if ($erro == 1) {
                        echo '<font color ="#db0000">  Usuário ou senha invalido(s) </font><br>';
                        echo '<font color ="#db0000">  Tente novamente ou recupere a sua conta. </font>';
                    } ?></h6>
            </div>
            <form action="back_end/validacoes/valida_in_adm.php" method="post">
                <div id="inputs" class="form-group">
                    <input class="form-control" type="email" placeholder="Insira o seu login" required=""
                           id="input_css_1" name="e_mail">
                    <br>
                    <input class="form-control" id="input_css_1" type="password" placeholder="Insira a sua senha"
                           required="" name="senha">
                    <hr>
                    <div>
                        <h5 style="color: blue" id="checkbox_txt_css">
                            <input id="check_box_css_2" type="checkbox"> Salvar estes dados </h5>
                    </div>
                    <div style="padding: 20px">
                        <button id="btn_login_css" class="btn btn-primary btn-lg btn-block" type="submit"> LOGIN
                        </button>
                        <br>
                    </div>
                    <a href=""><h6 id="btn_login_css">Recuperar a minha conta</h6></a>
                </div>
            </form>
        </div>
    </div>
    <!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
</div>
</body>
<!--___________________________________________________________________________________-->
<!--___________________________________________________________________________________-->
</html>




       