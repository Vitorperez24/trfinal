<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="stylesheet" href="css/pagamento.css">
</head>
<body>
    <header>
        <div class="logo-container">
            <img class="logo" src="img/logodallaspet.PNG">
        </div>
        <div class="ambiente-container">
            <img src="img/ambiente seguro.PNG">
        </div>
        <span class="ambiente">Ambiente Seguro</span> 
    </header>

    <div class="form-container-wrapper">
        <section class="form-container-left">
            <h2>Informações de Endereço</h2>
            <form>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>

                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required><br><br>

                <label for="cidade">Cidade:</label>
                <input type="text" id="cidade" name="cidade" required><br><br>

                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" required><br><br>

                <button type="submit">Continuar para o pagamento</button>
            </form>
        </section>

        <div class="vertical-line"></div> <!-- Linha vertical -->

        <section class="form-container-right">
            <h2>Método de Pagamento</h2>
            <p>Selecione o método de pagamento:</p>
            <button id="pagarPix">Pagar com Pix</button>
        </section>
    </div>
    <script>
    document.getElementById('pagarPix').addEventListener('click', function() {
            window.location.href = 'https://nubank.com.br/cobrar/7tcca/66ce37f3-ed18-4c51-8d87-22da07c23d1a';
        });
        </script>
        

</html>
