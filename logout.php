<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    session_destroy();

    header("Location: ../codigoSalus/index.html");
?>
