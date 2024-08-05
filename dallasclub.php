<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dallas club</title>
    <link rel="stylesheet" href="css/dallasclub.css">
    <script src="dallasclub.js" defer></script>
</head>
<body>
  <header>
    <div class="logo-container">
      <img class="logo" src="img/logodallaspet.PNG" alt="Dallas Pet Logo">
    </div>
    <div class="ambiente-container">
      <img src="img/ambiente seguro.PNG" alt="Ambiente Seguro">
    </div>
    <span class="ambiente">Ambiente Seguro</span> 
  </header>

  <div class="imgdallas">
    <img class="logo" src="img/Dallasclub.PNG" alt="Dallas Club Logo">
  </div>

  <div class="texto">
    <h1>
      Tudo pro seu pet e vantagens pra você
      O clube de benefícios com ofertas, cupons e benefícios.
      <p></p>
      Quanto mais você usa, mais você economiza e curte o melhor da Dallasclub.
    </h1>
  </div>

  <div class="imgdll">
    <img class="logo" src="img/img dallas.PNG" alt="Dallas Image">
    <button id="dallas2" class="botao">Confira</button>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("dallas2").addEventListener("click", function() {
            window.location.href = "dallasclub2.html";
        });
      });
        </script>
</body>
</html>
