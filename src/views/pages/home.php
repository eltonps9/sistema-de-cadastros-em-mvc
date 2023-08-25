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
                    <div class="head">
                    <h2>Estoque </h2>
                    <div class="quantia">
                        <img src="https://img.icons8.com/ios-glyphs/256/move-stock.png" alt="estoque" >
                        <strong><?php if($quantiaest){echo $quantiaest;}?> </strong>
                    </div>

                    </div>
                    <table >    
                        <tr style="background-color: rgb(71, 71, 71);">
                            <th>Item</th>
                            <th>Codigo</th>
                            <th>Minimo</th>
                            <th>Quantidade</th>
                            <th>unidade</th>
                            <th>data</th>
                            <th class="acoes">Acoes</th>
                        </tr>
                        <?php foreach($estoque as $arrayEstoque):?>
                            <!--
                               $linha2 = 1;
                                for($i = 0; $i <= $linha2; $i++) {
                                    $linha2 = $linha2 + 1;
                                    for($j = 0; $j <= $i; $j++) {
                                        $linha2 = $linha2 - 1;
                                        
                                    }
                                    
                                }
                            -->
                            <tr class="linha" >
                                <td><?=$arrayEstoque['item'];?></td>
                                <td><?=$arrayEstoque['codigo'];?></td>
                                <td ><?=$arrayEstoque['min_estoque'];?></td>
                                <?php 
                                    if($arrayEstoque['quantia_atual'] > $arrayEstoque['min_estoque'] && $arrayEstoque['quantia_atual'] <= $arrayEstoque['min_estoque']+$arrayEstoque['min_estoque']/100*5  ){ 
                                        echo "<td style='background-color: orange; color:white;'>".$arrayEstoque['quantia_atual']."</td>";

                                    }elseif($arrayEstoque['quantia_atual']<= $arrayEstoque['min_estoque']){
                                        echo "<td style='background-color: red; color:white;'>".$arrayEstoque['quantia_atual']."</td>";

                                    }else{
                                    echo "<td>".$arrayEstoque['quantia_atual']."</td>";
                                    
                                    }                                    
                                ?>  
                                <td><?=$arrayEstoque['unidade'];?></td>
                                <td><?=$arrayEstoque['data'];?></td>
                                <td>
                                    <a href="<?=$base;?>/deletar/<?=$arrayEstoque['id'];?>" onclick="return(confirm('deseja excluir esse trecho de informações?'))">excluir</a>
                                </td>
                            </tr> 
                        <?php endforeach;?>
                    </table>
                </section>
                
            </div>
        </section>


    </section>

    <script src="<?=$base;?>/assets/js/produtos.js?"></script>
    <script src="<?=$base;?>/assets/js/menuCadastro.js?"></script>