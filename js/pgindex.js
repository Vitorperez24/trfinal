
// Função para redirecionar para outra página com base no ID do submenu clicado
function redirectToPage(id) {
    switch (id) {
        case "racoes-cachorro":
            window.location.href = "crracoes.php";
            break;
        case "btnentrar":
            window.location.href = "login.php";
            break;
        case "btncadastrar":
            window.location.href = "cadastro.php";
            break;
        case "btncarrinho":
            document.getElementById('cart-sidebar').style.display = 'block';
            break;
        case "addToCartBtn":
            window.location.href = "pagamento.php";
            break;
        case "petiscos-cachorro":
            window.location.href = "crpetisos.php";
            break;
        case "farmacia-cachorro":
            window.location.href = "crfarma.php";
            break;
        case "coleiras-cachorro":
            window.location.href = "crcoleira.php";
            break;
        case "racoes-gato":
            window.location.href = "gtracoes.php";
            break;
        case "petiscos-gato":
            window.location.href = "gtpetiosos.php";
            break;
        case "farmacia-gato":
            window.location.href = "gtfarma.php";
            break;
        case "coleiras-gato":
            window.location.href = "gtcoleira.php";
            break;
        case "racoes-passaro":
            window.location.href = "pasracoes.php";
            break;
        case "gaiolas-passaro":
            window.location.href = "pasgaio.php";
            break;
        case "acessorios-passaro":
            window.location.href = "pasace.php";
            break;
        case "conheca-dallas":
            window.location.href = "dallasclub.php";
            break;
        case "ofertas-dallas":
            window.location.href = "dallasclub2.php";
            break;
        default:
            console.log("ID não reconhecido: " + id);
            break;
    }
}

// Função auxiliar para adicionar event listener de clique e redirecionar
function addClickListener(elementId, redirectId) {
    document.getElementById(elementId).addEventListener("click", function() {
        redirectToPage(redirectId);
    });
}

// Event listeners para os links do submenu
addClickListener("racoes-cachorro", "racoes-cachorro");
addClickListener("petiscos-cachorro", "petiscos-cachorro");
addClickListener("farmacia-cachorro", "farmacia-cachorro");
addClickListener("coleiras-cachorro", "coleiras-cachorro");
addClickListener("racoes-gato", "racoes-gato");
addClickListener("petiscos-gato", "petiscos-gato");
addClickListener("farmacia-gato", "farmacia-gato");
addClickListener("coleiras-gato", "coleiras-gato");
addClickListener("racoes-passaro", "racoes-passaro");
addClickListener("gaiolas-passaro", "gaiolas-passaro");
addClickListener("acessorios-passaro", "acessorios-passaro");
addClickListener("conheca-dallas", "conheca-dallas");
addClickListener("ofertas-dallas", "ofertas-dallas");

// Event listeners para os botões de login, cadastro e carrinho
addClickListener("btnentrar", "btnentrar");
addClickListener("btncadastrar", "btncadastrar");
addClickListener("btncarrinho", "btncarrinho");

// Seletor para todas as imagens dentro da classe "product-card"
const productImages = document.querySelectorAll('.product-card img');

// Adicionando event listener a cada imagem
productImages.forEach(image => {
    image.addEventListener('click', function() {
        // Aqui você pode definir a página para a qual deseja redirecionar
        window.location.href = 'produtoaberto.php';
    });
});

// Event listener para o botão "Voltar"
document.getElementById("voltar").addEventListener("click", function() {
    document.getElementById('cart-sidebar').style.display = 'none';
});

// Event listener para o botão "Finalizar Compra"
document.getElementById("finalizarCompra").addEventListener("click", function() {
    window.location.href = 'pagamento.php'; // Substitua 'pagamento.php' pelo URL da página desejada
});

document.addEventListener("DOMContentLoaded", function() {
    console.log("Arquivo index.js carregado!");

    // Função para redirecionar
    function redirectToPage(id) {
        switch (id) {
            case "racoes-cachorro":
                window.location.href = "crracoes.html";
                break;
            case "btnentrar":
                window.location.href = "login.html";
                break;
            case "btnCadastrar":
                window.location.href = "cadastro.html";
                break;
            case "btnCarrinho":
                document.getElementById('cart-sidebar').style.display = 'block';
                break;
            case "petiscos-cachorro":
                window.location.href = "crpetisos.html";
                break;
            case "farmacia-cachorro":
                window.location.href = "crfarma.html";
                break;
            case "coleiras-cachorro":
                window.location.href = "crcoleira.html";
                break;
            case "racoes-gato":
                window.location.href = "gtracoes.html";
                break;
            case "petiscos-gato":
                window.location.href = "gtpetiosos.html";
                break;
            case "farmacia-gato":
                window.location.href = "gtfarma.html";
                break;
            case "coleiras-gato":
                window.location.href = "gtcoleira.html";
                break;
            case "racoes-passaro":
                window.location.href = "pasracoes.html";
                break;
            case "gaiolas-passaro":
                window.location.href = "pasgaio.html";
                break;
            case "acessorios-passaro":
                window.location.href = "pasace.html";
                break;
            case "conheca-dallas":
                window.location.href = "dallasclub.html";
                break;
            case "ofertas-dallas":
                window.location.href = "dallasclub2.html";
                break;
            case "btnvoltar": // Alterei para "btnvoltar" para corresponder ao ID correto
                document.getElementById('cart-sidebar').style.display = 'none'; // Fecha o carrinho
                break;    
            default:
                console.log("ID não reconhecido: " + id);
                break;
        }
    }

    // Função para adicionar ouvintes de clique
    function addClickListener(elementId, redirectId) {
        const element = document.getElementById(elementId);
        if (element) {
            element.addEventListener("click", function() {
                redirectToPage(redirectId);
            });
        } else {
            console.log(`Elemento com ID ${elementId} não encontrado.`);
        }
    }

    addClickListener("racoes-cachorro", "racoes-cachorro");
    addClickListener("btnentrar", "btnentrar");
    addClickListener("btnCadastrar", "btnCadastrar");
    addClickListener("btnCarrinho", "btnCarrinho");
    addClickListener("petiscos-cachorro", "petiscos-cachorro");
    addClickListener("farmacia-cachorro", "farmacia-cachorro");
    addClickListener("coleiras-cachorro", "coleiras-cachorro");
    addClickListener("racoes-gato", "racoes-gato");
    addClickListener("petiscos-gato", "petiscos-gato");
    addClickListener("farmacia-gato", "farmacia-gato");
    addClickListener("coleiras-gato", "coleiras-gato");
    addClickListener("racoes-passaro", "racoes-passaro");
    addClickListener("gaiolas-passaro", "gaiolas-passaro");
    addClickListener("acessorios-passaro", "acessorios-passaro");
    addClickListener("conheca-dallas", "conheca-dallas");
    addClickListener("ofertas-dallas", "ofertas-dallas");

    // Adiciona ouvinte de evento para abrir o carrinho
    const btnCarrinho = document.getElementById('btnCarrinho');
    if (btnCarrinho) {
        btnCarrinho.addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById('cart-sidebar').style.display = 'block';
        });
    }

    // Adiciona ouvinte de evento para fechar o carrinho
    const btnVoltar = document.getElementById('btnvoltar');
    if (btnVoltar) {
        btnVoltar.addEventListener("click", function(event) {
            event.preventDefault();
            document.getElementById('cart-sidebar').style.display = 'none';
        });
    }
        // Event listener para o botão "Finalizar Compra"
    document.getElementById("finalizarCompra").addEventListener("click", function() {
        window.location.href = 'pagamento.html'; 
    });

// Recupera os dados do usuário do localStorage, se houver
const user = JSON.parse(localStorage.getItem('user'));
console.log("Usuário recuperado:", user); // Log para verificação

// Verifica se o usuário está logado e atualiza a interface
if (user && user.username) {
    console.log("Usuário logado:", user.username); // Log para verificação

    // Esconder botões de login e cadastro
    document.getElementById('btnentrar').style.display = 'none';
    document.getElementById('btnCadastrar').style.display = 'none';

    // Mostrar nome de usuário
    const userInfo = document.getElementById('user-info');
    userInfo.textContent = `Bem-vindo, ${user.username}`;
    userInfo.style.display = 'inline';

    // Mostrar botão de logout
    const btnLogout = document.getElementById('btnLogout');
    btnLogout.style.display = 'inline'; // Garanta que o botão esteja visível
    btnLogout.addEventListener('click', function() {
        console.log("Botão de logout clicado"); // Log para verificação
        localStorage.removeItem('user');
        window.location.reload(); // Recarregar a página após logout
    });
} else {
    console.log("Nenhum usuário logado"); // Log para verificação
}
});

