<?php
        include "conex.php";

        $email = $_POST["email"];
        $senha = $_POST["senha"];

            if (isset($_POST["email"]) && !empty($email)) {

                 if (isset($_POST["senha"]) && !empty($senha)) {

                    $stmt = $conexao->prepare("INSERT INTO login_agente (email_agente , senha) VALUES (:email_agente ,:senha_agente)");

                    $stmt->bindValue(":email_agente", $email);
                    $stmt->bindValue(":senha_agente", $senha);

                    if ($stmt->execute()) {
                        echo "<p style='color: green;'>Dados cadastrados com sucesso!</p>";
                    } else {
                        echo "<p style='color: red;'>Erro ao tentar efetivar cadastro.</p>";
                    }

                 } else {
                echo "campo senha vazio";
            }

            } else {
                echo "campo email vazio";
            }

    ?>