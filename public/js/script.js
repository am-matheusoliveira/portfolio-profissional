
function openMenu() {
    const nav = document.querySelector('nav');
    nav.classList.toggle('open');
}

// Função para redirecionar o usuário para um URL externo
function mensagem(web_address){
    window.open(web_address, '_blank');
}