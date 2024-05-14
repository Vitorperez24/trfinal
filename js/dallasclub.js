// Adicione isso ao seu JavaScript para controlar a exibição e ocultação da mensagem

function ativarOferta() {
  var mensagem = document.getElementById("mensagem");
  mensagem.classList.add("mostrar"); // Adiciona a classe "mostrar" para exibir a mensagem

  setTimeout(function() {
    mensagem.classList.remove("mostrar"); // Remove a classe "mostrar" após alguns segundos
  }, 3000); // Tempo em milissegundos (3 segundos neste exemplo)
}
