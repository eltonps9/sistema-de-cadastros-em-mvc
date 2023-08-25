<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Produto</title>
</head>
<body>
    <!-- tirar esse style daqui-->
    <div id="containerupdate" >
                    <section>
                        <?php foreach($produtos as $product):?>

                        <form  method="post" action="<?=$base;?>/updateAction_produtos/<?=$product['id'];?>">
                                <div id="produto">
                                    <div class="juncao1">
                                        <label for="codigo">
                                            
                                        
                                            <input  disabled=""  id="codigo" value="<?= 'Nº do código: '.$product['codigo'];?>">
                                        </label>
                                        

                                    </div>                                
                                    <div class="juncao2">
                                        <label for="item">
                                            <input type="text" Value="<?=$product['item'];?>" placeholder="descrição" name="item" id="item" >
                                        </label>
                                    </div>
                                    <div class="juncao3">
                                        <label for="quantidade">
                                            <input type="number" placeholder="quantia a adicionar" name="quantidade" id="quantia">
                                            
                                        </label>

                                        <label for="retirar">
                                        <input type="number" placeholder="quantia a retirar" name="retirar" id="retirar">
                                        </label>
                                        <label for="unidade">
                                            <input type="text" Value="<?=$product['unidade'];?>" placeholder="unidade" name="unidade" id="unidade">
                                        </label>
                                    </div>
                                    <div id="financeiro" >
                                    <h6>Financeiro</h6>                        
                                        <div class="juncao5">
                                            <label for="precoVenda">
                                                <input type="number"  name="precoVenda" id="precoVenda" value="<?=$product['prVenda'];?>" >
                                                
                                            </label>
                                            <label for="date">
                                                <input type="date" id="date" name="date" value="<?=$product['data'];?>" >
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="fisico">
                                    <input  disabled="" name="quantia" value="<?='Quantidade Atual: '.$product['quantia_atual'];?>">
                                
                                    <input  disabled="" name="min_estoque" value="<?= 'minimo: '.$product['min_estoque'];?>  ">

                                </div>
                                <input type="submit" value="inserir">
                        </form>

                        <?php endforeach;?>

                    </section>
                </div>
                
</body>
</html>