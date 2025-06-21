<?php 

    require "conexao.php";

    $id = $_POST["idVisitado"] ?? "";
    if ($id) {
        $stmt = $conexao->prepare("DELETE FROM visita_domiciliar WHERE id_domicilio = :id");
        $stmt->bindValue(":id", $id);
    
        if ($stmt->execute()) {
            header("Location: ../planilhaV");
        }else {
            echo "Deu errado";
        }
    } else {
        echo "Paciente não encontrado";
    }
    
?>