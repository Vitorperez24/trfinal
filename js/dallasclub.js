// Função para redirecionar para outra página com base no ID do botão clicado
function redirectToPage(id) {
  switch (id) {
      case "dallas2":
          window.location.href = "dallasclub2.html";
          break;
      // Adicione outros casos conforme necessário
      default:
          console.log("ID não reconhecido: " + id);
          break;
  }
}

// Event listener para o botão
document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("dallas2").addEventListener("click", function() {
    redirectToPage("dallas2");
  });
});
