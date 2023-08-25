<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle da Seletto</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style_home.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/sections_style.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/body_style.css">
</head>

<body>
    <section id="container">
        <?php $render('header');?>

        <section id="section_int">
            <?php $render('navBar');?>
            
            <div class="container_section">
                
                <section id="cliente" class="height">

                    <div class="head">
                    <h2>Cliente</h2>
                    <div class="quantia">
                        <img src="https://img.icons8.com/ios-glyphs/256/client-management.png" alt="cliente" >
                        <strong><?php if($quantiacliente){echo $quantiacliente;}?></strong>
                    </div>
</div>
                    <table>
                        <tr id="linha" style="background-color: rgb(71, 71, 71);">
                            <th>Cliente</th>
                            <th>Ambiente</th>
                            <th>Material</th>
                            <th>Marceneiro</th>
                            <th>Fotos</th>
                            <th>Acoes</th>
                        </tr>
                        <?php foreach($Cliente as $clientes): ?>
                        <tr>
                            <td><?=$clientes['cliente'];?></td>
                            <td><?=$clientes['ambiente'];?></td>
                            <td><?=$clientes['material'];?></td>
                            <td><?=$clientes['marceneiro'];?></td>
                            <td><?=$clientes['imagem'];?></td>
                            <td>
                                <a href="<?=$base;?>/delete/<?=$clientes['id'];?>" onclick="return(confirm('deseja excluir esse trecho de informações?'))">excluir</a>
                                <a href="<?=$base;?>/updateCliente/<?=$clientes['id'];?>">editar</a>
                            </td>
                            
                        </tr>
                        <?php endforeach; ?>





                    </table>
                </section>
            </div>
        </section>


    </section>