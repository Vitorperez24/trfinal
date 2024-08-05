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

// Definir a categoria e subcategoria de produtos
$categoria = 'Gato'; // Categoria específica para rações de cachorro
$subcategoria = 'petiscos'; // Exemplo de subcategoria

$sql = "SELECT codigo_produto, nome_produto, preco_produto, nota_produto, imagem_produto 
        FROM produto 
        WHERE categoria_produto = ? AND subcategoria_produto = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $categoria, $subcategoria);
$stmt->execute();
$result = $stmt->get_result();

$produtos = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $produtos[] = $row;
    }
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DallasPet - Petiscos e Ossos </title>
    <link rel="stylesheet" href="css/gtpetosos.css">
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
    <main>
        <aside class="sidebar">
            <h2>Filtrar Produtos</h2>
            <div class="filter-section">
                <h3>Preço</h3>
                <ul>
                    <li><input type="checkbox"> R$ 50,00 - R$ 75,00</li>
                    <li><input type="checkbox"> R$ 75,00 - R$ 100,00</li>
                    <li><input type="checkbox"> R$ 100,00 - R$ 125,00</li>
                    <li><input type="checkbox"> R$ 125,00 - R$ 150,00</li>
                    <li><input type="checkbox"> R$ 150,00 - R$ 200,00</li>
                </ul>
            </div>
            <div class="filter-section">
                <h3>Marcas</h3>
                <ul>
                    <li><input type="checkbox"> Pedigree</li>
                    <li><input type="checkbox"> Golden</li>
                    <li><input type="checkbox"> Premier</li>
                    <li><input type="checkbox"> Royal Canin</li>
                    <li><input type="checkbox"> Outros</li>
                </ul>
            </div>
            <div class="filter-section">
                <h3>Idade</h3>
                <ul>
                    <li><input type="checkbox"> Filhote</li>
                    <li><input type="checkbox"> Adulto</li>
                </ul>
            </div>
        </aside>
        <section class="product-list">
            <h2>Petiscos e Ossos </h2>
            <p>A seleção de rações para cachorro da DallasPet tem um papel fundamental no processo de cuidado da saúde do seu animal. É crucial proporcionar ao seu companheiro uma alimentação que ajude nas suas necessidades.</p>
            <div class="product-grid">
        <?php foreach ($produtos as $produto): ?>
            <div class="product-card">
                <img src="<?php echo htmlspecialchars($produto['imagem_produto']); ?>" alt="<?php echo htmlspecialchars($produto['nome_produto']); ?>">
                <p><?php echo htmlspecialchars($produto['nome_produto']); ?></p>
                <p>R$ <?php echo number_format($produto['preco_produto'], 2, ',', '.'); ?></p>
                <p>Nota: <?php echo number_format($produto['nota_produto'], 1, ',', '.'); ?></p>
                <button class="btn-add-to-cart" 
                        data-product-id="<?php echo $produto['codigo_produto']; ?>"
                        data-product-name="<?php echo htmlspecialchars($produto['nome_produto']); ?>"
                        data-product-price="<?php echo $produto['preco_produto']; ?>"
                        data-product-image="<?php echo htmlspecialchars($produto['imagem_produto']); ?>">Adicionar ao Carrinho</button>
            </div>
        <?php endforeach; ?>
    </div>
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

    <footer class="fundo">
        <p>&copy; 2024 Dallaspet Marketplace. Todos os direitos reservados.</p>
    </footer>
    <script src="js/gtpetosos.js"></script>
</body>
</html>
