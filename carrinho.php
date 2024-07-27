<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DallasPet - Carrinho</title>
    <link rel="stylesheet" href="css/carrinho.css">
</head>
<body>
    <header>
        <div class="logo-container">
          <img class="logo" src="img/logodallaspet.PNG">
        </div>
        
      </header>
    <main>
        <h1>Carrinho</h1>
        <div class="cart-container">
            <div class="cart-items">
                <div class="cart-item">
                    <img src="img/Capturar.PNG" alt="Ração Golden Special">
                    <div class="item-details">
                        <select>
                            <option>Selecione o tamanho: 20kg</option>
                        </select>
                        <p>Ração Golden Special para Cães Adultos Sabor Frango e Carne</p>
                    </div>
                    <div class="item-price">R$138,00</div>
                    <div class="item-quantity">2</div>
                    <div class="item-total">R$276,00</div>
                </div>
            </div>
            <div class="cart-summary">
                <h2>Resumo do pedido</h2>
                <p>Valor produtos (1 item): <span>R$276,00</span></p>
                <p>Total descontos: <span>R$0,00</span></p>
                <h3>Total: <span>R$276,00</span></h3>
                <button type="button" class="button" id="pgbotao">Ir para pagamento</button>
                <button type="button" class="button" id="pginicial">Escolher mais produtos</button>
            </div>
        </div>

    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("pgbotao").addEventListener("click", function() {
                window.location.href = "pagamento.php";
            });
            document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("pgbotao").addEventListener("click", function() {
                window.location.href = "pagamento.php";
            });
            });
            
            });
            

    </script>
</body>
</html>
