<?php

  if(isset($_POST['submit']))
  {

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $nome = mysqli_real_escape_string($conexao, $nome);
    $email = mysqli_real_escape_string($conexao, $email);
    $telefone = mysqli_real_escape_string($conexao, $telefone);
    $mensagem = mysqli_real_escape_string($conexao, $mensagem);

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,mensagem) VALUES ('$nome','$email','$telefone','$mensagem')");

  }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ellos Design - Teste Full Stack Developer</title>
  <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
  <header>
    <nav class="center">
      <a class="logo" href="#"><strong>Logotipo</strong></a>
      <a class="cta-button" href="#">Contate-nos</a>
    </nav>
  </header>
  <main>
    <div class="main center">
      <div class="textosMain">
        <h1 class="titulo">Aqui vai a sua headline. Foque na transformação que seu produto gera.</h1>
        <p>Utilize esse subtítulo para complementar a sua headline com informações que facilitem o entendimento do produto ou serviço que você está oferecendo. O que você vai entregar.</p>
      </div>
      <div class="formulario">
        <h2 class="titulo">Chamada para ação</h2>
        <form action="index.php " method="POST" id="form">
          <input type="text" name="nome" id="nome" placeholder="Nome" required>
          <input type="email" name="email" id="email" placeholder="Email" required>
          <input type="tel" name="telefone" id="telefone" placeholder="DDD + Telefone" required>
          <textarea name="mensagem" id="mensagem" cols="40" rows="10" placeholder="Como podemos te ajudar ?" required></textarea>
          <button type="submit" name="submit" id="submit-btn" class="btn btn-form">Chamada pra ação</button>
        </form>
      </div>
    </div>
  </main>
  <section class="quemSomos center sectionMargin">
    <picture>
      <img src="./assets/images/alex-kotliarskyi-QBpZGqEMsKg-unsplash.jpg" alt="escritório com pessoas trabalhando em computadores" data-anime="left">
    </picture>
    <div class="textosQuemSomos" data-anime="left">
      <h2 class="titulo">Quem Somos</h2>
      <p>Conteaqui quem você é e como você ajuda as pessoas com seus produtos ou serviços. Ao lado, use uma foto sua ou da empresa . Conte aqui quem você é e como você ajuda as pessoas com seus produtos ou serviço...</p>
    </div>
  </section>
  <section class="servicos">
    <div class="servicosContainer center sectionMargin">
      <h2 class="titulo" data-anime="left">Com este serviço você:</h2>
      <ul class="listaServicos">
        <li data-anime="left">
          <picture>
            <img src="./assets/icons/store-solid.svg" alt="">
          </picture>
          <div class="textosListaServicos">
            <h3>Beneficio do serviço</h3>
            <p>Insira aqui a descrição do beneficio que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
          </div>
        </li>

        <li data-anime="left">
          <picture>
            <img src="./assets/icons/store-solid.svg" alt="">
          </picture>
          <div class="textosListaServicos">
            <h3>Beneficio do serviço</h3>
            <p>Insira aqui a descrição do beneficio que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
          </div>
        </li>

        <li data-anime="left">
          <picture>
            <img src="./assets/icons/store-solid.svg" alt="">
          </picture>
          <div class="textosListaServicos">
            <h3>Beneficio do serviço</h3>
            <p>Insira aqui a descrição do beneficio que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
          </div>
        </li>

        <li data-anime="left">
          <picture>
            <img src="./assets/icons/store-solid.svg" alt="">
          </picture>
          <div class="textosListaServicos">
            <h3>Beneficio do serviço</h3>
            <p>Insira aqui a descrição do beneficio que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
          </div>
        </li>

        <li data-anime="left">
          <picture>
            <img src="./assets/icons/store-solid.svg" alt="">
          </picture>
          <div class="textosListaServicos">
            <h3>Beneficio do serviço</h3>
            <p>Insira aqui a descrição do beneficio que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
          </div>
        </li>

        <li data-anime="left">
          <picture>
            <img src="./assets/icons/store-solid.svg" alt="">
          </picture>
          <div class="textosListaServicos">
            <h3>Beneficio do serviço</h3>
            <p>Insira aqui a descrição do beneficio que seu produto gera. Mais tempo? Mais dinheiro? Economia? Durabilidade? Prazo de atendimento? Preço?</p>
          </div>
        </li>
      </ul>
      <a class="cta-button" href="#">Chamada para ação</a>
    </div>
  </section>
  <section class="perguntasFrequentes center sectionMargin">
    <h2 class="titulo" data-anime="down">Perguntas Frequentes</h2>
    <details data-anime="down">
      <summary>Quando vou começar a ver o resultado das minhas campanhas ?</summary>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit praesentium, labore architecto fugit voluptas voluptatum tempora qui, nihil quia temporibus incidunt minima recusandae aspernatur error quisquam commodi consequatur neque culpa.</p>
    </details>

    <details data-anime="down">
      <summary>Quando vou começar a ver o resultado das minhas campanhas ?</summary>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit praesentium, labore architecto fugit voluptas voluptatum tempora qui, nihil quia temporibus incidunt minima recusandae aspernatur error quisquam commodi consequatur neque culpa.</p>
    </details>

    <details data-anime="down">
      <summary>Quando vou começar a ver o resultado das minhas campanhas ?</summary>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit praesentium, labore architecto fugit voluptas voluptatum tempora qui, nihil quia temporibus incidunt minima recusandae aspernatur error quisquam commodi consequatur neque culpa.</p>
    </details>

    <details data-anime="down">
      <summary>Quando vou começar a ver o resultado das minhas campanhas ?</summary>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit praesentium, labore architecto fugit voluptas voluptatum tempora qui, nihil quia temporibus incidunt minima recusandae aspernatur error quisquam commodi consequatur neque culpa.</p>
    </details>

    <details data-anime="down">
      <summary>Quando vou começar a ver o resultado das minhas campanhas ?</summary>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit praesentium, labore architecto fugit voluptas voluptatum tempora qui, nihil quia temporibus incidunt minima recusandae aspernatur error quisquam commodi consequatur neque culpa.</p>
    </details>
  </section>

  <section class="chamadaFinal sectionMargin">
    <div class="chamadaFinalContainer center">
      <div class="textosFinal" data-anime="left">
        <h2 class="titulo">Faça uma chamada final</h2>
        <p>Essa é uma chamada para ação final. Chegou até aqui e ainda não cadastrou ? Aproveite...</p>
      </div>
      <div class="chamadaFinalDiv" data-anime="left">
        <p>Descrição chamando para uma última ação. Converse com nossa equipe sem compromisso. Não perca a chance de...</p>
        <a href="#">Chamada para ação</a>
        <p class="min">Nossos especialistas vão entrar em contato com você ainda hoje</p>
      </div>
    </div>
  </section>
  <footer>
    <div class="footer center">
      <p>Nome da empresa &copy; todos os Direitos Reservados - 2023</p>
      <p>CNPJ 99.999.999 - 0009-99 | TERMOS DE USO</p>
    </div>
  </footer>
</body>
<script src="./script.js"></script>

</html>