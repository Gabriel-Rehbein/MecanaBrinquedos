const input = document.querySelector('.search-bar input');
const suggestions = document.querySelector('.suggestions');

input.addEventListener('focus', function() {
    suggestions.classList.add('show');
});

input.addEventListener('blur', function() {
    suggestions.classList.remove('show');
});

function mostrarProdutos(nomeProduto) {
    const produtos = document.querySelectorAll('.produto');
    
    produtos.forEach(produto => {
        const nome = produto.getAttribute('data-nome');
        if (nome === nomeProduto) {
            produto.style.display = 'block';
        } else {
            produto.style.display = 'none';
        }
    });
}
