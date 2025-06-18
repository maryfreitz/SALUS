<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário de Visita - Salus</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="pagina">
		<img src="logo/ChatGPT_Image_15_de_mai._de_2025__10_39_50-removebg-preview (1)" alt="Logo Salus" id="logo">
		<div id="formulario">
			<form action="create.php" method="post">
				<div class="coluna-esquerda">
				<label for="nome-visitado">Nome do Visitado:</label>
				<input type="text" id="nome-visitado" name="nomeVisitado" class="campo-texto">

				<label for="idade-visitado">Idade do Visitado:</label>
				<input type="text" id="idade-visitado" name="idadeVisitado" class="campo-texto">

				<label for="entregas">Entregas feitas ao Visitado:</label>
				<input type="text" id="entregas" name="entregas" class="campo-texto">

				<label for="data-visita">Data da Visita:</label>
				<input type="date" id="data-visita" name="data" class="campo-texto">

				<label for="agente">Agente Responsável:</label>
				<input type="text" id="agente" name="agenteRespon" class="campo-texto">
			</div>

			<div class="coluna-direita">
				<label for="motivo">Motivo da Visita:</label>
				<textarea id="motivo" name="motivoVisita" class="campo-texto-area"></textarea>

				<button id="botao-enviar">Enviar</button>
			</div>	
			</form>

		</div>
	</div>
</body>
</html>
