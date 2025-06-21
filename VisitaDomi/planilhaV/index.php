<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Visitas Domiciliares</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="fundo-pagina">

    <div id="cabecalho">
        <img id="logo" src="logo/ChatGPT_Image_15_de_mai._de_2025__10_39_50-removebg-preview (1)">
    </div>

    <h2>Lista de Visitas Domiciliares</h2>

    <table id="tabela-visitas">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Motivo da Visita</th>
                <th>Entregas</th>
                <th>Data</th>
                <th>Agente</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php
            require_once "conexao.php";

            $stmt = $conexao->prepare("SELECT * FROM visita_domiciliar;");
            $stmt->execute();

            while ($rows = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                <tr>
                    <td><?php echo $rows->id_domicilio; ?></td>
                    <td><?php echo $rows->nome; ?></td>
                    <td><?php echo $rows->idade; ?></td>
                    <td><?php echo $rows->motivo_visita; ?></td>
                    <td><?php echo $rows->entregas; ?></td>
                    <td><?php echo $rows->datas; ?></td>
                    <td><?php echo $rows->agente; ?></td>

                    <td class="coluna-acoes">
                        <a href="update.php" class="botao-editar" >✏️</a>

                        <form action="delete.php" method="post" style="display:inline;">
                        <input type="hidden" name="idVisitado" value="<?php echo $rows->id_domicilio; ?>">
                        <button type="submit" class="botao-excluir">🗑️</button>
                        
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
