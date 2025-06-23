<?php

    include "conexao.php";
    
    $nome = $_POST["nomeVisitado"];
    $idade = $_POST["idadeVisitado"];
    $entregas = $_POST["entregas"];
    $data = $_POST["data"];
    $agenteRes = $_POST["agenteRespon"];
    $motivo = $_POST["motivoVisita"];

    $stmt = $conexao->prepare("INSERT INTO visita_domiciliar (nome, idade, motivo_visita, entregas, datas, agente) VALUES (:nome, :idade, :motivoVisita, :entregas, :datas, :agente)");

    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":idade", $idade);
    $stmt->bindValue(":motivoVisita", $motivo);
    $stmt->bindValue(":entregas", $entregas);
    $stmt->bindValue(":datas", $data);
    $stmt->bindValue(":agente", $agenteRes);

    if($stmt->execute()) {
        header("Location: ../");
    } else {
        echo "erro no cadastro";
    }
?>
