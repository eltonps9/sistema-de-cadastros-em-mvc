let menu = document.querySelector('#menuCadastros');
let buttom = document.querySelector('.nav');

buttom.addEventListener('click', () => {
    if (menu.style.display == "flex") {
        menu.style.display = 'none';
    } else {
        menu.style.display = 'flex';
    }
});





/*var linha = document.querySelector('.linha');


addEventListener("load", () => {

    var linha2 = 1;

    for (i = 0; i <= linha2; i++) {
        linha2 = linha2 + 1;
        for (j = 0; j <= i; j++) {
            linha2 = linha2 - 1;

            linha.style.backgroundColor = 'red';
            linha.innerHTML = "ola mundo";
        }
        linha.style.backgroundColor = 'black';

    }
});*/