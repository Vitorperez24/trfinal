<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/js/pglogin.js" defer></script>
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
    <main>
        <div class="login-container">
            <h2>Acesse sua conta</h2>
            <form id="loginForm" action="php/processa_login.php" method="post">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                <label for="senha">Senha</label>
                <div class="password-container">
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                    <span class="password-toggle-icon" onclick="togglePasswordVisibility('senha')">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                <button type="submit">Entrar</button>
                <a href="recsenha.html" id="esqueceuSenhaLink" class="esqueceu-senha">Esqueceu sua senha?</a>
            </form>
        </div>
        <div class="cadastro-container">
            <h2>Cadastre sua conta é rápido, fácil e gratuito!</h2>
            <p>
                Com a sua conta você tem acesso a ofertas exclusivas, descontos,
                acompanhar os seus pedidos e muito mais!
            </p>
            <button type="button" id="btnCadastrar">Cadastrar</button>
        </div>
    </main>
</body>
</html>
