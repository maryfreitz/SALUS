<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Medicamentos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="logo/ChatGPT_Image_15_de_mai._de_2025__10_39_50-removebg-preview (1)" id="logo-salus">
    <div id="caixa-formulario">

        <form action="delete.php" id="formulario-cadastro" method="POST">
            
            <label for="cpf">Cartão do SUS do Paciente:</label>
            <input type="number" id="cpf" name="cartaoSUS" class="campo-texto"required>

            <label for="nome">Nome do Paciente:</label>
            <input type="text" id="nome" name="nomePaciente" class="campo-texto"required>

            <label for="medicamentos">Medicamentos:</label>
            <textarea type="text" id="medicamentos" name="medicamentos" class="campo-area" required></textarea>

            <button type="submit" id="botao-enviar">Enviar</button>
        </form>
    </div>

</body>
</html>
