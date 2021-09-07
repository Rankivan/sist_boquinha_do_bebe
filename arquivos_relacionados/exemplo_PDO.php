      
                       <!--ESTE CÓDIGO É EM ESTRUTUR PDO-->

<?php

       if(isset($_POST['btn_cadastrar'])){

            $nome                 = $_POST['nome'];
            $sobrenome            = $_POST['sobrenome'];
            $data_nascimento      = $_POST['data_nascimento'];
            $telefone             = $_POST['telefone'];
            $tipo_usuario         = $_POST['tipo_usuario'];
            $adicional_usuario    = $_POST['adicional_usuario'];
            $nivel_acesso         = $_POST['nivel_acesso'];
            $observacoes          = $_POST['observacoes'];
            $e_mail               = $_POST['e_mail'];
            $senha                = $_POST['senha'];
            $cadastrante          = $_POST['cadastrante'];


          //$inserir_usuarios = "INSERT INTO usuarios () VALUES ('','','','','')";
            $consulta = $pdo prepare("INSERT INTO usuarios
                                                 (nome,
                                                 sobrenome,
                                                 data_nascimento,
                                                 telefone,
                                                 tipo_usuario,
                                                 adicional_usuario,
                                                 observacoes,
                                                 nivel_acesso,
                                                 e_mail,
                                                 senha,
                                                 cadastrante,
                                                 data_registro) 
                                                 VALUES                                              
                                                 (:nome,
                                                  :sobrenome,
                                                  :data_nascimento,
                                                  :telefone,
                                                  :tipo_usuario,
                                                  :adicional_usuario,
                                                  :observacoes,
                                                  :nivel_acesso,
                                                  :e_mail,
                                                  :senha,
                                                  :cadastrante,
                                                   NOW())");

              $consulta->bindValue(":nome",$nome);
              $consulta->bindValue(":sobrenome",$sobrenome);
              $consulta->bindValue(":data_nascimento",$data_nascimento);
              $consulta->bindValue(":telefone",$telefone);
              $consulta->bindValue(":tipo_usuario",$tipo_usuario);
              $consulta->bindValue(":adicional_usuario",$adicional_usuario);
              $consulta->bindValue(":observacoes",$observacoes);
              $consulta->bindValue(":nivel_acesso",$nivel_acesso);
              $consulta->bindValue(":e_mail",$e_mail);
              $consulta->bindValue(":senha",$senha);
              $consulta->bindValue(":cadastrante",$cadastrante);
              $consulta->execute();
                                         
       }


     ?>