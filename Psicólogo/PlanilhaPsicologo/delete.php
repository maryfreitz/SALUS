<?php 

    require "../conexao.php";

    $id = $_POST["id"] ?? '';

    if (!empty($id)) {
        $stmt = $conexao->prepare("DELETE FROM medicamento_psicologo WHERE id = :id");
        $stmt->bindValue(":id", $id);
    
        if ($stmt->execute()) {
            header("Location: ../PlanilhaPsicologo");
        }else {
            echo "Deu errado";
        }
    } else {
        echo "Paciente não encontrado";
    }
    
?>
