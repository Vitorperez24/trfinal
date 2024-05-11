function ativarOferta() {
    var mensagem = document.getElementById("mensagem");
    mensagem.style.display = "block"; // Exibe a mensagem
  
    setTimeout(function(){ 
      mensagem.style.display = "none"; // Esconde a mensagem após 2 segundos
    }, 2000);
  }
  