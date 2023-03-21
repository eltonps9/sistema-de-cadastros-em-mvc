<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Estoque</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/styleUpcliente.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/inputs_style.css">
</head>
<body>
<div class="body_div">
    <form action="<?=$base;?>/updateItem/<?=$estoque['id'];?>" method="post" class="formulario-css">
        <div class="juncao1">
            <input type="text" id="item" name="item" value="<?=$estoque['item'];?>">
            <input type="text" id="quantidade" name="quantidade" value="<?=$estoque['quantidade'];?>">
            <input type="text" id="unidade" name="unidade" value="<?=$estoque['unidade'];?>">
            <input type="submit" value="Salvar">
        </div>
        
    </form>
</div>
</body>
</html>