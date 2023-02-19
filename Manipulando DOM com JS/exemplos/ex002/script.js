const botao = document.querySelector('#calcular');
const result = document.querySelector('.resultado');

botao.addEventListener('click' , () => {
    result.innerHTML = "Fui clicado"
})