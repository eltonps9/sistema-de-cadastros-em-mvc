
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar itens</title>
</head>
<body>
    <form action="<?=$base;?>/adicionarCliente" method="post">
    <h3>Cliente</h3>

        <label for="cliente">
            <input type="text" name="cliente" id="cliente" placeholder="cliente"> 
        </label>

        <label for="ambiente">
            <input type="text" name="ambiente" id="ambiente" placeholder="ambiente"> 
        </label>

        <label for="material">
            <input type="text" name="material" id="material" placeholder="material"> 
        </label>

        <label for="marceneiro">
            <input type="text" name="marceneiro" id="marceneiro" placeholder="marceneiro"> 
        </label>
    <input type="submit" value="Inserir">
    </form>

    <hr><br>

    <form action="<?=$base;?>/adicionarItem" method="post">
    <h3>Estoque</h3>
        <label for="codigo">
            <input type="number" name="codigo" id="codigo" placeholder="código"> 
        </label>

        <label for="item">
            <input type="text" name="item" id="item" placeholder="item"> 
        </label>

        <label for="quantidade">
            <input type="number" name="quantidade" id="quantidade" placeholder="quantidade"> 
        </label>
        
        <label for="minEstoque">
            <input type="number" name="minEstoque" id="minEstoque" placeholder="minEstoque"> 
        </label>
        <label for="unidade">
            <input type="text" name="unidade" id="unidade" placeholder="unidade"> 
        </label>
    <input type="submit" value="Inserir">

    </form>


    <hr>
    <a href="<?=$base;?>/tela">voltar</a>
    
