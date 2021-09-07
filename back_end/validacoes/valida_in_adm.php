
 <?php 

                 //____VALIDAÇÃO E AUTENTICAÇÃO DOS USUARIOS___

		   require_once("../conexao_bd.php");
		   @session_start();

       // A função empty é para evitar acessar de maneira indevida pela URL
		   if(empty($_POST['e_mail']) || empty($_POST['senha'])){
		   	header("location:../tela_login.php");
		   }


	       //função PDO para evitar SQL injection

              $e_mail = $_POST ['e_mail'];
              $senha  = $_POST ['senha'];

              //echo $e_mail;
              //echo $senha;



              //A variável $pdo, está sendo gerada pelo arquivo de conexão com o banco de dados
              $consulta = $pdo->prepare("SELECT * from usuarios where e_mail = :e_mail and senha =:senha ");


              $consulta->bindValue(":e_mail",$e_mail);
              $consulta->bindValue(":senha",$senha);
              $consulta->execute();

              //linha que insere o PDO
              $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
              $linhas = count($dados);

              echo "linhas:".$linhas;


              

              if ($linhas>0) {

                //Primeiro registro encontrado
                $_SESSION['e_mail']        = $dados[0]['e_mail'];  
                $_SESSION['senha']         = $dados[0]['senha'];
                $_SESSION['nome_entrada']  = $dados[0]['nome'];
                $_SESSION['nivel_acesso']  = $dados[0]['nivel_acesso'];
                $_SESSION['id']            = $dados[0]['id'];
               

                //$_SESSION['e_mail']  = $e_mail['e_mail'];
                //$_SESSION['senha']   =  $senha['senha'];

                header("location:../../sist_admin/telas_adm/adm.php");
                # code...
              } else {

                header('location:../../tela_login.php?erro=1');//MENSAGEM DE ERRO

              }

             
                

		   ?>