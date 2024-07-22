<<<<<<< HEAD
<?php
// Incluir arquivo de configuração
include 'config.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verificar se as senhas coincidem
    if ($senha != $confirmar_senha) {
        $erro = "As senhas não coincidem!";
    } else {
        // Hash da senha para armazenamento seguro
        $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

        // Inserir dados no banco de dados usando prepared statement
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, celular, senha) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $email, $celular, $senha_hashed);

        if ($stmt->execute() === TRUE) {
            $sucesso = "Cadastro realizado com sucesso!";
        } else {
            $erro = "Erro: " . $stmt->error;
        }

        // Fechar a conexão
        $stmt->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/login.js" defer></script>
</head>
<body>
  <header>
    <div class="logo-container">
        <img src="img/logodallaspet.PNG" alt="DallasPet Logo" class="logo">
    </div>
    <span class="ambiente-seguro">
        <img src="img/ambiente seguro.PNG" alt="Ambiente Seguro" class="icon">
        Ambiente Seguro
    </span>
  </header>
  
  <div class="container">
    <div class="form-container">
      <h2>Crie sua conta</h2>
      <?php
      if (isset($erro)) {
          echo "<p style='color:red;'>$erro</p>";
      }
      if (isset($sucesso)) {
          echo "<p style='color:green;'>$sucesso</p>";
      }
      ?>
      <form action="cadastro.php" method="post">
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
          <input type="tel" id="celular" name="celular" placeholder="Digite seu Telefone/Celular" required>
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
=======
<?php
// Incluir arquivo de configuração
include 'config.php';

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $confirmar_senha = $_POST['confirmar_senha'];

    // Verificar se as senhas coincidem
    if ($senha != $confirmar_senha) {
        $erro = "As senhas não coincidem!";
    } else {
        // Hash da senha para armazenamento seguro
        $senha_hashed = password_hash($senha, PASSWORD_DEFAULT);

        // Inserir dados no banco de dados usando prepared statement
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, celular, senha) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $email, $celular, $senha_hashed);

        if ($stmt->execute() === TRUE) {
            $sucesso = "Cadastro realizado com sucesso!";
        } else {
            $erro = "Erro: " . $stmt->error;
        }

        // Fechar a conexão
        $stmt->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta</title>
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/login.js" defer></script>
</head>
<body>
  <header>
    <div class="logo-container">
        <img src="img/logodallaspet.PNG" alt="DallasPet Logo" class="logo">
    </div>
    <span class="ambiente-seguro">
        <img src="img/ambiente seguro.PNG" alt="Ambiente Seguro" class="icon">
        Ambiente Seguro
    </span>
  </header>
  
  <div class="container">
    <div class="form-container">
      <h2>Crie sua conta</h2>
      <?php
      if (isset($erro)) {
          echo "<p style='color:red;'>$erro</p>";
      }
      if (isset($sucesso)) {
          echo "<p style='color:green;'>$sucesso</p>";
      }
      ?>
      <form action="cadastro.php" method="post">
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
          <input type="tel" id="celular" name="celular" placeholder="Digite seu Telefone/Celular" required>
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
>>>>>>> 00923980e9edbe82e6b1895f6a70fd5e8358f27d
