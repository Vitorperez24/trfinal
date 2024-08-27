<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <header>
    <div class="logo-container">
        <a href="index.php">
          <img src="img/logodallaspet.PNG" alt="DallasPet Logo" class="logo">
        </a>
    </div>
    <span class="ambiente-seguro">
        <img src="img/ambiente seguro.PNG" alt="Ambiente Seguro" class="icon">
        Ambiente Seguro
    </span>
  </header>
  
  <div class="container">
    <div class="form-container">
      <h2>Crie sua conta</h2>
      <form action="php/processa_cadastro.php" method="post">
        <div>
          <label for="nome">Nome completo:</label>
          <input type="text" id="nome" name="nome" placeholder="Digite seu Nome Completo" required>
          <span class="mensagem"></span>
        </div>
        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
          <span class="mensagem"></span>
        </div>
        <div>
          <label for="celular">Celular:</label>
          <input type="text" id="celular" name="celular" placeholder="Digite seu Telefone/Celular" required>
          <span class="mensagem"></span>
        </div>
        <div class="input-container">
          <label for="senha">Senha:</label>
          <input type="password" id="senha" name="senha" placeholder="Digite sua Senha" required>
          <span class="password-toggle-icon"><i class="fas fa-eye"></i></span>
          <span class="mensagem"></span>
        </div>
        <div class="input-container">
          <label for="confirmar-senha">Confirmar senha:</label>
          <input type="password" id="confirmar-senha" name="confirmar_senha" placeholder="Confirme sua Senha" required>
          <span class="password-toggle-icon"><i class="fas fa-eye"></i></span>
          <span class="mensagem"></span>
        </div>
      
        <button class="botao" type="submit">Cadastrar</button>
      </form>
    </div>
    <div class="info-container">
      <h3>Crie uma conta rápido, fácil e gratuito</h3>
      <p>Com a sua conta da Dallaspet você tem acesso a Ofertas exclusivas, descontos, vai gerenciar a sua Assinatura Dallaspet pode acompanhar os seus pedidos e muito mais!</p>
    </div>
  </div>

  <script src="/js/cadastro.js"></script>
  </body>
</html>
