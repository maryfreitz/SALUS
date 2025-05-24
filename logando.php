<?php
    include('conex.php'); 

    if (isset($_POST['email']) && isset($_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $stmt = $conexao->prepare("SELECT * FROM login_agente WHERE email_agente = :email AND senha = :senha");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        if ($stmt->rowCount() === 1) {
            $agente = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_agente'] = $agente['id_agente'];
            $_SESSION['email_agente'] = $agente['email_agente'];

            header("Location: telainicial.html");
            exit;
        } else {
            header("Location: erro.html");
        }
    }
?>
