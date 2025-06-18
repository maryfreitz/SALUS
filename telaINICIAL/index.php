<?php
  if (isset($_POST['botaoV'])) {
    header("Location: VisitaDomi");
    exit();
  }

  if (isset($_POST['planlhaVisitas'])) {
    header("Location: ../planilhaV");
    exit();
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Salus</title>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>
  <nav class="menu-lateral">
      <div class="perfil">
          <div class="icone-perfil">
            <img src="logo/Captura de tela 2025-06-09 101353-Photoroom" class="imagem-perfil"/>
          </div>
          <p class="nome-agente">Agente Maria Adriane</p>
      </div>

    <div class="sessao">
          <p class="titulo-sessao">Cadastrar</p>

          <form action="VisitaDomi" method="POST">
            <button id="botao" type="submit" name="botaoV">Visita Domiciliar</button>
          </form>
            
            <button id="botao">Bolsa Família</button>
            <button id="Ultimo-botao">Psicólogo</button>
    </div>

      <hr class="divisor"/>

      <div class="sessao">
          <p class="titulo-sessao">Acesso a Planilhas</p>
          <form action="planilha/index.php" method="POST">
            <button id="botao" type="submit" name="planilhaVisitas">Planilha Visitas</button>
            <button id="botao">Planilha Bolsa Família</button>
            <button id="botao">Planilha Psicólogo</button>
          </form>
      </div>
  </nav>

  <div class="conteudo-principal">
    <div>

    <nav class="menu-superior">
        <a href="#" id="home" >Home</a>
        <a href="#">Sobre</a>
        <a href="#">Serviços</a>
        <a href="#">Contato</a>
        <div class="logo">
        <img src="logo/ChatGPT_Image_15_de_mai._de_2025__10_39_50-removebg-preview (1).png" alt="Logo Salus" class="imagem-logo"/>
      </div>
    </nav>
    </div>

      <div class="cartoes">
        <div class="cartao">
          <h2>Pacientes</h2>
          <p class="valor">100</p>
          <p>Cadastrados no Psicólogo</p>
        </div>
        <div class="cartao">
          <h2>Medicamentos</h2>
          <p class="valor">300</p>
          <p>Cadastrados</p>
        </div>
        <div class="cartao">
          <h2>Famílias</h2>
          <p class="valor">68</p>
          <p>Cadastrados no Programa Bolsa Família</p>
        </div>
        <div class="cartao">
          <h2>Visitas</h2>
          <p class="valor">200</p>
          <p>Realizadas</p>
        </div>
      </div>
</body>
</html>
