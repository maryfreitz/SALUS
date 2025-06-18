<?php 
    include ("conexao.php");

    
    $sql = "SELECT * FROM visita_domiciliar ORDER BY id_domicilio DESC";
    $stmt = $pdo->query($sql);
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Visitas - Salus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="fundo-pagina">

    <header id="cabecalho">
        <img id="logo-salus" src="logo_salus.png" alt="Logo Salus">
    </header>

    <main>
        <table id="tabela-visitas">
            <thead>
                <tr>
                    <th id="cabecalho-id">id</th>
                    <th id="cabecalho-nome">nome</th>
                    <th id="cabecalho-idade">idade</th>
                    <th id="cabecalho-motivo">motivo_visita</th>
                    <th id="cabecalho-entregas">entregas</th>
                    <th id="cabecalho-data">data</th>
                    <th id="cabecalho-agente">agente</th>
                    <th id="cabecalho-acoes">ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
        <tr>
            <td><?php echo $nome; ?></td>
            <td><?php echo $idade; ?></td>
            <td><?php echo $entregas; ?></td>
            <td><?php echo $data; ?></td>
            <td><?php echo $agenteRes; ?></td>
            <td><?php echo $motivo; ?></td>
        </tr>
        <?php } ?>
                    <td class="coluna-acoes">
                        <button class="botao-excluir"> <img src="icones/lixeira-Photoroom.png"></button>
                        <button class="botao-editar"> <img src="icones/editar-Photoroom.png"></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

</body>
</html>
