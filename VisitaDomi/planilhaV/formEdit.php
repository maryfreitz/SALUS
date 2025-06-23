<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário de Visita - Salus</title>
	<link rel="stylesheet" href="edit.css">
</head>
<body>
	<div id="pagina">
		<img src="logo/ChatGPT_Image_15_de_mai._de_2025__10_39_50-removebg-preview (1)" alt="Logo Salus" id="logo">
		<div id="formulario">
        <?php 
            $id = $_POST["id_domicilio"]?? '';
            require_once "conexao.php";

            $stmt = $conexao->prepare("SELECT * FROM visita_domiciliar WHERE id_domicilio = :id");
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            $visitado = $stmt->fetch();
        ?>
			<form action="update.php" method="POST">
				<div class="coluna-esquerda">

				<input type="hidden" name="idVisitado" value="<?php echo $id?? ''?>">

				<label for="nome-visitado">Nome do Visitado:</label>
				<input type="text" id="nome-visitado" name="nomeVisitado" class="campo-texto"value="<?php echo $visitado["nome"]?? ''?>"required>

				<label for="idade-visitado">Idade do Visitado:</label>
				<input type="text" id="idade-visitado" name="idadeVisitado" class="campo-texto"value="<?php echo $visitado["idade"]?? ''?>"required>

				<label for="entregas">Entregas feitas ao Visitado:</label>
				<input type="text" id="entregas" name="entregas" class="campo-texto"value="<?php echo $visitado["entregas"]?? ''?>"required>

				<label for="data-visita">Data da Visita:</label>
				<input type="date" id="data-visita" name="data" class="campo-texto"value="<?php echo $visitado["datas"]?? ''?>"required>

				<label for="agente">Agente Responsável:</label>
				<input type="text" id="agente" name="agenteRespon" class="campo-texto"value="<?php echo $visitado["agente"]?? ''?>"required>
			</div>

			<div class="coluna-direita">
				<label for="motivo">Motivo da Visita:</label>
				<input id="motivo" name="motivoVisita" class="campo-texto-area" value="<?php echo $visitado["motivo_visita"]?? ''?>"required>

				<button type="submit" id="botao-enviar">Atualizar</button>
			</div>	
			</form>

		</div>
	</div>
</body>
</html>
