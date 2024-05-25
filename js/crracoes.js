// Função para redirecionar para outra página com base no ID do submenu clicado
function redirectToPage(id) {
    switch (id) {
        case "racoes-cachorro":
            window.location.href = "crracoes.html";
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
        default:
            break;
    }
}

// Event listeners para os links do submenu
document.getElementById("racoes-cachorro").addEventListener("click", function() {
    redirectToPage("racoes-cachorro");
});

document.getElementById("petiscos-cachorro").addEventListener("click", function() {
    redirectToPage("petiscos-cachorro");
});

document.getElementById("farmacia-cachorro").addEventListener("click", function() {
    redirectToPage("farmacia-cachorro");
});

document.getElementById("coleiras-cachorro").addEventListener("click", function() {
    redirectToPage("coleiras-cachorro");
});

document.getElementById("racoes-gato").addEventListener("click", function() {
    redirectToPage("racoes-gato");
});

document.getElementById("petiscos-gato").addEventListener("click", function() {
    redirectToPage("petiscos-gato");
});

document.getElementById("farmacia-gato").addEventListener("click", function() {
    redirectToPage("farmacia-gato");
});

document.getElementById("coleiras-gato").addEventListener("click", function() {
    redirectToPage("coleiras-gato");
});

document.getElementById("racoes-passaro").addEventListener("click", function() {
    redirectToPage("racoes-passaro");
});

document.getElementById("gaiolas-passaro").addEventListener("click", function() {
    redirectToPage("gaiolas-passaro");
});

document.getElementById("acessorios-passaro").addEventListener("click", function() {
    redirectToPage("acessorios-passaro");
});

document.getElementById("conheca-dallas").addEventListener("click", function() {
    redirectToPage("conheca-dallas");
});

document.getElementById("ofertas-dallas").addEventListener("click", function() {
    redirectToPage("ofertas-dallas");
});
