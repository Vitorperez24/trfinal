function ativarOferta() {
    var mensagem = document.getElementById('mensagem');
    mensagem.classList.add('mostrar');
    setTimeout(function() {
        mensagem.classList.remove('mostrar');
    }, 3000); // A mensagem será exibida por 3 segundos
}
