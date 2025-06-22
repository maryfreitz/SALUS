<?php
    include "../conexao.php";

    $cartao = $_POST["cartaoSUS"] ?? '';
    $nome = $_POST["nomePaciente"] ?? '';
    $medicamentos = $_POST["medicamentos"] ?? '';


    if ($cartao && $nome && $medicamentos) {
        $stmt = $conexao->prepare("UPDATE medicamento_psicologo SET cartaoSUS = :cartao, nome_paciente = :nome, medicamentos = :medicamentos WHERE medicamentos = :medicamentos");

        $stmt->bindValue(":cartao", $cartao);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":medicamentos", $medicamentos);

        if ($stmt->execute()) {
            header("Location: ../../");
            exit;
        } else {
            header("location: formEDIT.php");;
        }
    } else {
        header("location: formEDIT.php");
    }
?>
