<?php
        include "conex2.php";
        
        $nome2 = $_POST["nome"];
        $email2 = $_POST["email"];
        $senha2 = $_POST["senha"];

            if (isset($_POST["email"]) && !empty($email2)) {

                 if (isset($_POST["senha"]) && !empty($senha2)) {

                    if(isset($_POST["nome"]) && !empty($nome2)){

                    $stmt = $conexao2->prepare("INSERT INTO login_agente (nomeCompleto , email_agente, senha) VALUES (:nomeCompleto ,:email_agente, :senha)");

                    $stmt->bindValue(":nomeCompleto", $nome2);
                    $stmt->bindValue(":email_agente",  $email2);
                    $stmt->bindValue(":senha",  $senha2);


                    if ($stmt->execute()) {
                        header("Location: ../");
                        exit;
                    } else {
                        echo "erro";
                    }

                }else{
                    echo "campo nome vazio"; 
                }

                 } else {
                echo "campo senha vazio";
            }

            } else {
                echo "campo email vazio";
            }

    ?>