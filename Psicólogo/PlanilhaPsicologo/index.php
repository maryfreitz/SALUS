<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Visitas Domiciliares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="fundo-pagina">

    <a href="../../" id="botao-voltar">← Voltar</a>


    <div id="cabecalho">
        <img id="logo" src="logo/ChatGPT_Image_15_de_mai._de_2025__10_39_50-removebg-preview (1)">
    </div>

    <h2>Lista de Medicamentos do Psicólogo</h2>

    <table id="tabela-psicologo">
        <thead>
            <tr>
                <th>CartaoSUS</th>
                <th>Nome</th>
                <th>Medicamentos</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php
            require_once "../conexao.php";

            $stmt = $conexao->prepare("SELECT * FROM medicamento_psicologo;");
            $stmt->execute();

            while ($rows = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                <tr>
                    <td><?php echo $rows->cartaoSUS; ?></td>
                    <td><?php echo $rows->nome_paciente; ?></td>
                    <td><?php echo $rows->medicamentos; ?></td>

                    <td class="coluna-acoes">
                        <form action="formEDIT.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $rows->id;?>">
                            <button type="submit" class="botao-editar">✏️</button>
                        </form>

                        <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $rows->id; ?>">
                        <button type="submit" class="botao-excluir">🗑️</button>
                        
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
