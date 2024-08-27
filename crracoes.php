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
$categoria = 'Cachorro'; // Categoria específica para rações de cachorro
$subcategoria = 'rações'; // Exemplo de subcategoria

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
    <title>DallasPet - Rações Cachorro </title>
    <link rel="stylesheet" href="css/crracoes.css">
</head>
<body>
    <header>
    <div class="logo">
        <a href="index.php">
            <img src="img/logodallaspet.PNG" alt="Logo do PetShop Marketplace">
        </a>
        <h1></h1>
    </div>
        <div class="pesquisa">
            <input type="text" placeholder="O que seu pet precisa?">
            <button>Pesquisar</button>
        </div>
        <div class="user-actions">
        <span id="user-info" style="display: none;"></span>
                <button type="button" id="btnLogout" class="button" style="display: none;">Logout</button>
                <button type="button" id="btnentrar" class="button">Entrar</button>
                <button type="button" id="btnCadastrar" class="button">Cadastrar</button>
                <button type="button" id="btnCarrinho" class="button">🛒</button>
            </div>
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
    <h2>Rações para cachorro</h2>
    <p>A seleção de rações para cachorro da DallasPet tem um papel fundamental no processo de cuidado da saúde do seu animal. É crucial proporcionar ao seu companheiro uma alimentação que ajude nas suas necessidades.</p>
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
        <p>&copy; 2024 DallasPet Marketplace. Todos os direitos reservados.</p>
    </footer>

    <script src="js/crracoes.js"></script>
</body>
</html>
