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
               
                <section id="estoque" class="height">
                    <h2>Estoque</h2>

                    <table>

    
                        <tr id="linha" style="background-color: rgb(71, 71, 71);">
                            <th>Item</th>
                            <th>Codigo</th>
                            <th>Minimo</th>
                            <th>Quantidade</th>
                            <th>unidade</th>
                            <th>Acoes</th>
                        </tr>
                        <?php foreach($estoque as $arrayEstoque):?>
                            <tr >
                                <td><?=$arrayEstoque['item'];?></td>
                                <td><?=$arrayEstoque['codigo'];?></td>
                                <td><?=$arrayEstoque['min_estoque'];?></th>
                                <td><?=$arrayEstoque['quantidade'];?></th>
                                <td><?=$arrayEstoque['unidade'];?></th>
                                <td>
                                    <a href="<?=$base;?>/deletar/<?=$arrayEstoque['id'];?>" onclick="return(confirm('deseja excluir esse trecho de informações?'))">excluir</a>
                                    <a href="<?=$base;?>/updateItem/<?=$arrayEstoque['id'];?>">editar</a>
                                </td>
                            </tr>
                            <?php endforeach;?>


                    </table>
                </section>
                
            </div>
        </section>


    </section>