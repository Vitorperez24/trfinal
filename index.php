<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop Marketplace</title>
    <link rel="stylesheet" href="./css/indexpg.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logodallaspet.PNG" alt="Logo do PetShop Marketplace">
            <h1></h1>
        </div>
        <nav>
            <div class="pesquisa">
                <input type="text" placeholder="Pesquisar...">
                <button type="button" class="button">Pesquisar</button>
            </div>
            <div class="user-actions">
                <span id="user-info" style="display: none;"></span>
                <button type="button" id="btnLogout" class="button" style="display: none;">Logout</button>
                <button type="button" id="btnentrar" class="button">Entrar</button>
                <button type="button" id="btnCadastrar" class="button">Cadastrar</button>
                <button type="button" id="btnCarrinho" class="button">🛒</button>
            </div>
        </nav>
    </header>      
    <div class="menu">
        <nav>
            <ul>
                <li><a href="#" id="btncachorro">Cachorro</a>
                    <ul class="submenu">
                        <li><a href="#" id="racoes-cachorro">Rações</a></li>
                        <li><a href="#" id="petiscos-cachorro">Petiscos e Ossos</a></li>
                        <li><a href="#" id="farmacia-cachorro">Farmácia</a></li>
                        <li><a href="#" id="coleiras-cachorro">Coleiras</a></li>
                    </ul>
                </li>
                <li><a href="#" id="btngato">Gato</a>
                    <ul class="submenu">
                        <li><a href="#" id="racoes-gato">Rações</a></li>
                        <li><a href="#" id="petiscos-gato">Petiscos e Ossos</a></li>
                        <li><a href="#" id="farmacia-gato">Farmácia</a></li>
                        <li><a href="#" id="coleiras-gato">Coleiras</a></li>
                    </ul>
                </li>
                <li><a href="#" id="btnpassaro">Pássaro</a>
                    <ul class="submenu">
                        <li><a href="#" id="racoes-passaro">Rações</a></li>
                        <li><a href="#" id="gaiolas-passaro">Gaiolas</a></li>
                        <li><a href="#" id="acessorios-passaro">Acessórios</a></li>
                    </ul>
                </li>
                <li><a href="#">Dallaspet</a>
                    <ul class="submenu">
                        <li><a href="#" id="conheca-dallas">Conheça</a></li>
                        <li><a href="#" id="ofertas-dallas">Ofertas</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <div class="imagem-container">
        <img src="img/qq.PNG" class="imgrl">
        <img src="img/raçoes gato.PNG" class="imgrl">
    </div>

    <hr class="linha-separadora"> <!-- Linha horizontal -->

    <h3 class="textmarca">Marcas Mais bem avaliadas</h3>

    <div class="ofertas-container">
        <div class="ofertas">
            <div class="product">
                <img src="img/Avaliação.PNG" alt="Produto">
            </div>

            <div class="product">
                <img src="img/Avaliação.PNG" alt="Produto">
            </div>

            <div class="product">
                <img src="img/Avaliação.PNG" alt="Produto">
            </div>

            <div class="product">
                <img src="img/Avaliação.PNG" alt="Produto">
            </div>
        </div>
    </div>

    <hr class="linha-separadora2"> <!-- Linha horizontal -->

    <div class="venda">
        <div class="produto">
            <img src="img/Capturar.PNG" alt="Produto 1">
            <h3>Ração Golden Special para Cães Adultos Sabor Frango e Carne</h3>
            <p>R$ 50,00</p>
            <button class="btn-add-to-cart" id="btn1">Adicionar ao Carrinho</button>
        </div>

        <div class="produto">
            <img src="img/Capturar.PNG" alt="Produto 1">
            <h3>Ração Golden Special para Cães Adultos Sabor Frango e Carne</h3>
            <p>R$ 50,00</p>
            <button class="btn-add-to-cart" id="btn2">Adicionar ao Carrinho</button>
        </div>

        <div class="produto">
            <img src="img/Capturar.PNG" alt="Produto 1">
            <h3>Ração Golden Special para Cães Adultos Sabor Frango e Carne</h3>
            <p>R$ 50,00</p>
            <button class="btn-add-to-cart" id="btn3">Adicionar ao Carrinho</button>
        </div>

        <div class="produto">
            <img src="img/Capturar.PNG" alt="Produto 1">
            <h3>Ração Golden Special para Cães Adultos Sabor Frango e Carne</h3>
            <p>R$ 50,00</p>
            <button class="btn-add-to-cart" id="btn4">Adicionar ao Carrinho</button>
        </div>
    </div>

    <aside id="cart-sidebar" class="cart-sidebar">
        <h2>Carrinho</h2>
        <div class="cart-item">
            <img src="img/Capturar.PNG" alt="Ração Golden Special">
            <div class="cart-item-info">
                <p>Ração Golden Special para Cães Adultos Sabor Frango e Carne</p>
                <p>R$ 180,00</p>
                <input type="number" value="1" min="1">
            </div>
        </div>
        <div class="cart-summary">
            <p>SUBTOTAL : <span id="subtotal">R$ 180,00</span></p>
            <button id="btnfinalizar" class="finalizar-compra">Finalizar Compra</button>
            <button id="btnvoltar" class="voltar">Voltar</button>
        </div>
    </aside>

    <footer class="fundo">
        <p>&copy; 2024 Dallaspet Marketplace. Todos os direitos reservados.</p>
    </footer>

    <script src="./js/pgindex.js"></script>
</body>
</html>