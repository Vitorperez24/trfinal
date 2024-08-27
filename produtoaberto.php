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

// Capturar o código do produto da URL
$codigo_produto = isset($_GET['codigo_produto']) ? $_GET['codigo_produto'] : '';

// Selecionar as informações do produto
if ($codigo_produto) {
    $sql = "SELECT nome_produto, preco_produto, nota_produto, imagem_produto, subcategoria_produto 
            FROM produto 
            WHERE codigo_produto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $codigo_produto);
    $stmt->execute();
    $result = $stmt->get_result();

    $produto = $result->fetch_assoc();
    $stmt->close();

    // Buscar produtos relacionados pela mesma subcategoria
    $subcategoria = $produto['subcategoria_produto'];
    $sql_related = "SELECT codigo_produto, nome_produto, preco_produto, imagem_produto 
                    FROM produto 
                    WHERE subcategoria_produto = ? AND codigo_produto != ?
                    LIMIT 4";
    $stmt_related = $conn->prepare($sql_related);
    $stmt_related->bind_param("ss", $subcategoria, $codigo_produto);
    $stmt_related->execute();
    $result_related = $stmt_related->get_result();

    $produtos_relacionados = [];
    while ($row = $result_related->fetch_assoc()) {
        $produtos_relacionados[] = $row;
    }
    $stmt_related->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DallasPet - <?php echo htmlspecialchars($produto['nome_produto']); ?></title>
    <link rel="stylesheet" href="css/produtoaberto.css">
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

    <hr class="linha-separadora"> <!-- Linha horizontal -->


    <main>
        <section class="product-details">
            <div class="product-images">
                <img src="<?php echo htmlspecialchars($produto['imagem_produto']); ?>" alt="<?php echo htmlspecialchars($produto['nome_produto']); ?>">
            </div>
            <div class="product-info">
                <h1><?php echo htmlspecialchars($produto['nome_produto']); ?></h1>
                <div class="rating">
                    <?php echo $produto['nota_produto']; ?> Avaliações
                </div>
                <div class="price">
                    R$ <?php echo number_format($produto['preco_produto'], 2, ',', '.'); ?>
                </div>
                <button class="btn-add-to-cart" 
                    data-product-id="<?php echo $produto['codigo_produto']; ?>"
                    data-product-name="<?php echo htmlspecialchars($produto['nome_produto']); ?>"
                    data-product-price="<?php echo $produto['preco_produto']; ?>"
                    data-product-image="<?php echo htmlspecialchars($produto['imagem_produto']); ?>">Adicionar ao Carrinho</button>
            </div>
        </section>
        <section class="related-products">
    <h2>Produtos Relacionados</h2>
    <div class="product-list">
    <?php foreach ($produtos_relacionados as $relacionado): ?>
    <div class="product-item">
        <a href="produtoaberto.php?codigo_produto=<?php echo urlencode($relacionado['codigo_produto']); ?>&nome_produto=<?php echo urlencode($relacionado['nome_produto']); ?>&categoria_produto=<?php echo urlencode($relacionado['categoria_produto']); ?>&subcategoria_produto=<?php echo urlencode($relacionado['subcategoria_produto']); ?>&preco_produto=<?php echo urlencode($relacionado['preco_produto']); ?>&nota_produto=<?php echo urlencode($relacionado['nota_produto']); ?>&imagem_produto=<?php echo urlencode($relacionado['imagem_produto']); ?>">
            <img src="<?php echo htmlspecialchars($relacionado['imagem_produto']); ?>" alt="<?php echo htmlspecialchars($relacionado['nome_produto']); ?>">
        </a>
        <p><?php echo htmlspecialchars($relacionado['nome_produto']); ?></p>
        <p>R$ <?php echo number_format($relacionado['preco_produto'], 2, ',', '.'); ?></p>
    </div>
<?php endforeach; ?>

</section>

    </main>
    <aside id="cart-sidebar" class="cart-sidebar">
        <h2>Carrinho</h2>
        <div id="cart-items" class="cart-items-container"></div>
        <div class="cart-summary">
            <p>SUBTOTAL : <span id="subtotal">R$ 0,00</span></p>
            <button id="finalizarCompra" class="finalizar-compra">Finalizar Compra</button>
            <button id="btnvoltar" class="voltar">Voltar</button>
        </div>
    </aside>

    <footer>
        <p>&copy; 2024 DallasPet. Todos os direitos reservados.</p>
    </footer>
    <script src="js/produtoaberto.js"></script>
</body>
</html>
