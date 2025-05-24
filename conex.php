<?php
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=agentedesaúde;charset=utf8mb4", "root", "Aluno");
    } catch (PDOException $erro) {
        echo "Erro: " . $erro->getMessage();
    }
?>
