function add_cliente() {
    $addCliente = document.getElementById('adicionar_cliente');
    $addEstoque = document.getElementById('adicionar_estoque');

    if ($addCliente.style.display == "flex") {
        $addCliente.style.display = "none";
    } else {
        $addCliente.style.display = "flex";
        $addEstoque.style.display = "none";

    }
}

function add_estoque() {
    $addEstoque = document.getElementById('adicionar_estoque');
    $addCliente = document.getElementById('adicionar_cliente');

    if ($addEstoque.style.display == "flex") {
        $addEstoque.style.display = "none";
    } else {
        $addEstoque.style.display = "flex";
        $addCliente.style.display = "none";
    }
}