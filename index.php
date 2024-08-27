<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "dallas_pet";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

// Selecionar apenas os quatro produtos mais bem avaliados
$sql = "SELECT codigo_produto, nome_produto, preco_produto, nota_produto, imagem_produto 
        FROM produto 
        ORDER BY nota_produto DESC 
        LIMIT 4";
$result = $conn->query($sql);

$produtos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $produtos[] = $row;
    }
}

$conn->close();
?>


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
        <a href="index.php">
            <img src="img/logodallaspet.PNG" alt="Logo do PetShop Marketplace">
        </a>
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
    
    <div class="venda">
    <?php foreach ($produtos as $produto): ?>
        <div class="produto">
            <!-- Link na imagem do produto -->
            <a href="produtoaberto.php?codigo_produto=<?php echo $produto['codigo_produto']; ?>">
                <div class="produto-imagem">
                    <img src="<?php echo htmlspecialchars($produto['imagem_produto']); ?>" alt="<?php echo htmlspecialchars($produto['nome_produto']); ?>">
                </div>
            </a>
            
            <!-- Link no nome do produto -->
            <h3>
                <a href="produtoaberto.php?codigo_produto=<?php echo $produto['codigo_produto']; ?>">
                    <?php echo htmlspecialchars($produto['nome_produto']); ?>
                </a>
            </h3>
            
            <p>R$ <?php echo number_format($produto['preco_produto'], 2, ',', '.'); ?></p>
            <button class="btn-add-to-cart" 
                    data-product-id="<?php echo $produto['codigo_produto']; ?>"
                    data-product-name="<?php echo htmlspecialchars($produto['nome_produto']); ?>"
                    data-product-price="<?php echo $produto['preco_produto']; ?>"
                    data-product-image="<?php echo htmlspecialchars($produto['imagem_produto']); ?>">Adicionar ao Carrinho</button>
        </div>
    <?php endforeach; ?>
    </div>



    <aside id="cart-sidebar" class="cart-sidebar">
        <h2>Carrinho</h2>
        <div id="cart-items" class="cart-items-container"></div>
        <div class="cart-summary">
            <p>SUBTOTAL : <span id="subtotal">R$ 0,00</span></p>
            <button id="finalizarCompra" class="finalizar-compra">Finalizar Compra</button>
            <button id="btnvoltar" class="voltar">Voltar</button>
        </div>
    </aside>

    <footer class="fundo">
        <p>&copy; 2024 Dallaspet Marketplace. Todos os direitos reservados.</p>
    </footer>

    <script src="./js/pgindex.js"></script>
</body>
</html>
