<?php 

    require "../conexao.php";

    $cartao = $_POST["cartaoSUS"] ?? '';
    if ($cartao) {
        $stmt = $conexao->prepare("DELETE FROM medicamento_psicologo WHERE cartaoSUS = :cartao");
        $stmt->bindValue(":cartao", $cartao);
    
        if ($stmt->execute()) {
            header("Location: ../PlanilhaPsicologo");
        }else {
            echo "Deu errado";
        }
    } else {
        echo "Paciente não encontrado";
    }
    
?>