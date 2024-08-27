document.addEventListener("DOMContentLoaded", function() {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    function redirectToPage(id) {
        const pageMap = {
            "racoes-cachorro": "crracoes.php",
            "btnentrar": "login.php",
            "btnCadastrar": "cadastro.php",
            "btnCarrinho": "cart",
            "petiscos-cachorro": "crpetisos.php",
            "farmacia-cachorro": "crfarma.php",
            "coleiras-cachorro": "crcoleira.php",
            "racoes-gato": "gtracoes.php",
            "petiscos-gato": "gtpetiosos.php",
            "farmacia-gato": "gtfarma.php",
            "coleiras-gato": "gtcoleira.php",
            "racoes-passaro": "pasracoes.php",
            "gaiolas-passaro": "pasgaio.php",
            "acessorios-passaro": "pasace.php",
            "conheca-dallas": "dallasclub.php",
            "ofertas-dallas": "dallasclub2.php",
            "btnvoltar": "close-cart"
        };

        if (pageMap[id] === "cart") {
            document.getElementById('cart-sidebar').style.display = 'block';
        } else if (pageMap[id] === "close-cart") {
            document.getElementById('cart-sidebar').style.display = 'none';
        } else if (pageMap[id]) {
            window.location.href = pageMap[id];
        } else {
            console.log("ID não reconhecido: " + id);
        }
    }

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
    addClickListener("btnvoltar", "btnvoltar");

    function updateCartSidebar() {
        const cartItemsContainer = document.getElementById('cart-items');
        cartItemsContainer.innerHTML = ''; // Limpar carrinho atual
        let subtotal = 0;

        cart.forEach((item, index) => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');

            const itemContent = `
                <img src="${item.image}" alt="${item.name}" style="width: 50px; height: 50px; margin-right: 10px;">
                <div style="display: flex; flex-direction: column; flex-grow: 1;">
                    <p style="font-size: 14px; margin: 5px 0;">${item.name}</p>
                    <p style="font-size: 14px; margin: 5px 0;">R$ ${item.price ? item.price.toFixed(2) : '0.00'}</p>
                    <p style="font-size: 14px; margin: 5px 0;">Quantidade: ${item.quantity}</p>
                </div>
                <button class="remove-from-cart" data-index="${index}" style="background-color: #FF0000; color: white; border: none; cursor: pointer; padding: 5px 10px; border-radius: 5px; transition: background-color 0.3s; margin-left: 10px;">Remover</button>
            `;
            cartItem.innerHTML = itemContent;
            cartItemsContainer.appendChild(cartItem);

            if (item.price) {
                subtotal += item.price * item.quantity;
            }
        });

        document.getElementById('subtotal').textContent = `R$ ${subtotal.toFixed(2)}`;

        const removeButtons = document.querySelectorAll('.remove-from-cart');
        removeButtons.forEach(button => {
            button.addEventListener('click', function() {
                const index = this.dataset.index;
                cart.splice(index, 1);
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartSidebar();
            });
        });
    }

    updateCartSidebar();

    document.querySelectorAll('.btn-add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            const productPrice = parseFloat(this.dataset.productPrice);
            const productImage = this.dataset.productImage;

            const existingItem = cart.find(item => item.id === productId);

            if (existingItem) {
                existingItem.quantity++;
            } else {
                cart.push({
                    id: productId,
                    name: productName,
                    price: productPrice,
                    image: productImage,
                    quantity: 1
                });
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartSidebar();
        });
    });

    document.getElementById('finalizarCompra').addEventListener('click', function() {
        alert('Compra finalizada com sucesso!');
        localStorage.removeItem('cart');
        updateCartSidebar();
    });

    const userInfo = document.getElementById('user-info');
    const btnLogout = document.getElementById('btnLogout');
    const username = localStorage.getItem('username');
    const email = localStorage.getItem('email');

    if (username && email) {
        userInfo.textContent = `Olá, ${username} (${email})`;
        userInfo.style.display = 'inline';
        btnLogout.style.display = 'inline';
        document.getElementById('btnentrar').style.display = 'none';
        document.getElementById('btnCadastrar').style.display = 'none';
    }

    btnLogout.addEventListener('click', function() {
        localStorage.removeItem('username');
        localStorage.removeItem('email');
        window.location.reload();
    });


     // Recupera os dados do usuário do localStorage, se houver
     const user = JSON.parse(localStorage.getItem('user'));
     console.log("Usuário recuperado:", user);
 
     // Verifica se o usuário está logado e atualiza a interface
     if (user && user.username) {
         console.log("Usuário logado:", user.username);
 
         document.getElementById('btnentrar').style.display = 'none';
         document.getElementById('btnCadastrar').style.display = 'none';
 
         const userInfo = document.getElementById('user-info');
         userInfo.textContent = `Bem-vindo, ${user.username}`;
         userInfo.style.display = 'inline';
 
         const btnLogout = document.getElementById('btnLogout');
         btnLogout.style.display = 'inline';
         btnLogout.addEventListener('click', function() {
             console.log("Botão de logout clicado");
             localStorage.removeItem('user');
             window.location.reload();
         });
     } else {
         console.log("Nenhum usuário logado");
     }

    
});
