<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Medicamentos</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <img src="logo/ChatGPT_Image_15_de_mai._de_2025__10_39_50-removebg-preview (1)" id="logo-salus">
    <div id="caixa-formulario">
        <?php 
            $id = $_POST["id"];
            require_once "../conexao.php";

            $stmt = $conexao->prepare("SELECT * FROM medicamento_psicologo WHERE id = :id;");
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $medicamento = $stmt->fetch();
        ?>
        <form action="update.php" id="formulario-cadastro" method="POST">

            <input type="hidden" name="id" value="<?php echo $id?>">

            <label for="cpf">Cartão do SUS do Paciente:</label>
            <input type="number" id="cpf" name="cartaoSUS" class="campo-texto" value="<?php echo $medicamento["cartaoSUS"]?>" required>

            <label for="nome">Nome do Paciente:</label>
            <input type="text" id="nome" name="nomePaciente" class="campo-texto" value="<?php echo $medicamento["nome_paciente"]?>" required>

            <label for="medicamentos">Medicamentos:</label>
            <input type="text" id="medicamentos" name="medicamentos" class="campo-area" value="<?php echo $medicamento["medicamentos"]?>" required>

            <button type="submit" id="botao-enviar">Atualizar</button>
        </form>
    </div>

</body>
</html>
