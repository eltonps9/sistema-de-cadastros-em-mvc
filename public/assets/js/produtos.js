var button = document.querySelector('.button');
var container = document.querySelector('.Produtos');

button.addEventListener('click', () => {
    container.style.display = 'flex';
});


function anotar() {
    let codigo = document.querySelector('#codigo').value;
    let item = document.querySelector('#item').value;
    let quantia = document.querySelector('#quantia').value;
    let unidade = document.querySelector('#unidade').value;
    let precoCusto = document.querySelector('#precoCusto').value;
    let lucro = document.querySelector('#lucro').value;
    let precoVenda = document.querySelector('#precoVenda').value;
    let date = document.querySelector('#date').value;
    let min_estoque = document.querySelector('#min_estoque').value;

    let codigo1 = document.querySelector('.codigo');
    let item1 = document.querySelector('.item');
    let quantia1 = document.querySelector('.quantia');
    let unidade1 = document.querySelector('.unidade');
    let precoCusto1 = document.querySelector('.precoCompra');
    let lucro1 = document.querySelector('.lucro');
    let precoVenda1 = document.querySelector('.precoVenda');
    let date1 = document.querySelector('.data');
    let min_estoque1 = document.querySelector('.min_estoque');

    codigo1.innerHTML = ` ${codigo}`;
    item1.innerHTML = ` ${item}`;
    quantia1.innerHTML = ` ${quantia}`;
    unidade1.innerHTML = ` ${unidade}`;
    precoCusto1.innerHTML = ` ${precoCusto}`;
    lucro1.innerHTML = ` ${lucro}%`;
    precoVenda1.innerHTML = ` ${precoVenda}`;
    date1.innerHTML = ` ${date}`;
    min_estoque1.innerHTML = ` ${min_estoque}`;

}



const enter = document.querySelector("#enter");

enter.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
        e.preventDefault();
    }
})