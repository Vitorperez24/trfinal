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
        // Adicione mais casos conforme necessário para os outros submenus
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
// Adicione mais event listeners para os outros submenus conforme necessário
