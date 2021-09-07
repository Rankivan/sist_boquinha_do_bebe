
<?php


include_once ("../../conexao_bd.php");
@session_start();



    $nome_evento  = filter_input(INPUT_POST,'nome_evento', FILTER_SANITIZE_STRING);

    //echo $nome_evento;

  
      $consulta_evento = $pdo->query("SELECT * from eventos_atendimento where nome_evento = '$nome_evento' and status_evento != 'FECHADO'");
      $dados_evento = $consulta_evento->fetchAll(PDO::FETCH_ASSOC);
      for ($i=0; $i < count($dados_evento); $i++){
              foreach ($dados_evento[$i] as $key => $value) {
                }
                //echo $dados[$i]['nome']."<br><br>";
                $id_evento  = $dados_evento[$i]['id_evento'];
                $local_evento  = $dados_evento[$i]['local_evento'];

 
} 


        

        header("location: ../../../sist_admin/telas_adm/adm.php?acao=home_adm&evento_consulta=1&local_evento=$local_evento");










