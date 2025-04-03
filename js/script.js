// Adicione aqui qualquer código JavaScript que você precise
console.log('JavaScript carregado!');

// Exemplo de loading (você pode adaptar conforme necessário)
function showLoading() {
    document.body.innerHTML = '<div class="loading">Carregando...</div>';
}

function hideLoading() {
    // Esconda o loading quando necessário
    document.querySelector('.loading').style.display = 'none';
}