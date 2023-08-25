function porcentagem() {
    var precoCusto = Number(document.querySelector('#precoCusto').value);
    var lucro = Number(document.querySelector('#lucro').value);
    var input = document.querySelector('#precoVenda');

    let dividir = (parseInt(precoCusto) * parseFloat(lucro)) / 100;
    var resultado = precoCusto + dividir;

    input.value = resultado;

}

function update() {
    var updatepage = document.querySelector("#containerupdate");

    if (updatepage.style.display == "flex") {
        updatepage.style.display = "none";
    } else {
        updatepage.style.display = "flex";
    }
}