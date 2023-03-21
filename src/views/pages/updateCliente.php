<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cliente</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/styleUpcliente.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/inputs_style.css">

</head>
<body>
<div class="body_div" >
    <form action="<?=$base;?>/updateAction_cliente/<?=$cliente['id'];?>" method="post"   class="formulario">
        <div class="juncaoUpCt1">
            
            <input type="text" id="clienteUp" name="cliente" value="<?=$cliente['cliente'];?>">
            <input type="text" id="ambienteUp" name="ambiente" value="<?=$cliente['ambiente'];?>">
            <input type="text" id="marceneiroUp" name="marceneiro" value="<?=$cliente['marceneiro'];?>">
            <div class="juncaoUpCt1_2">
                <label for="materialUp"></label>                                                  
                <textarea id="materialUp"  name="material" rows="7" cols="50"> <?=$cliente['material'];?></textarea>
            </div>
            <input type="submit" value="Alterar">
        </div>
        
        
    </form>
</div>

</body>
</html>