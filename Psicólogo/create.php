<?php

    include "conexao.php";
    
    $cartao = $_POST["cartaoSUS"];
    $nome = $_POST["nomePaciente"];
    $medicamentos = $_POST["medicamentos"];

    $stmt = $conexao->prepare("INSERT INTO medicamento_psicologo (cartaoSUS, nome_paciente, medicamentos) VALUES (:cartao, :nome, :medicamentos)");

    $stmt->bindValue(":cartao", $cartao);
    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":medicamentos", $medicamentos);

    if($stmt->execute()) {
        header("Location: ../");
    } else {
        echo "erro no cadastro";
    }
?>
