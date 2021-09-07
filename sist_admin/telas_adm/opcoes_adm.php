 <!--#######################################_OPÇÕES_########################################-->

 <div style="padding: 10px;">

     <div class="row">
         <div class="col-sm-12">
             <div class="card">
                 <h5 class="card-header"> Inserir patologia </h5>
                 <a href="#" style="color: black" type="button"data-toggle="modal" data-target="#modal_patologia">
                     <div class="card-body">

                         <p class="card-text">Insisra novas patologias para utilizar nos atendimentos</p>
                         <img src="../../imagens/conteudo/problemas.png" style="width: 40px ; height: 40px ;">
                     </div></a>
             </div>
         </div>

     </div>

   <!--#######################################__  __########################################-->

     <form>
         <div class="modal fade" id="modal_patologia" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-scrollable  modal-xl">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="staticBackdropLabel">Cadastrar patologia <img src="../../imagens/conteudo/anexar.png" style="width: 40px ; height: 40px "></h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                     <!--ARRUMAR O BOTÃO POST-->

                     <div class="modal-body" >
                       <?php include('atr_opções/modal_cadastro_patologia.php')?>
                     </div>
                     <div class="modal-footer">
                         <button  class="btn btn-secondary" data-dismiss="modal"> <img src="../../imagens/conteudo/fechar_janela.png" style="width: 30px; height: 30px">Cancelar</button>
                         <button type="submit" class="btn btn-primary" name="btn_cadastrar_patologia" > <img src="../../imagens/conteudo/armazena.png" style="width: 30px; height: 30px"> Cadastrar
                         </button>
                     </div>
                 </div>
             </div>
         </div>
     </form>