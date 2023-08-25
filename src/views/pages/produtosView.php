<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle da seletto</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/cad_style.css?">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/sections_style.css?">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/body_style.css?">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/inputs_style.css?">
</head>

<body>
<section id="container">
    <?php $render('header');?>

    <section id="section_int">
        <?php $render('navBar');?>
    
        <div class="container_section">
            
            <section id="config" >
                <div class="containerheader">
                    <h4>Controle dos produtos</h4>

                    <strong style="color:red;">
                        <?php
                        if(!empty($_SESSION['error'])){
                            echo $_SESSION['error'];
                            $_SESSION['error']='';
                        }
                        ;?>
                    </strong>
                </div>
                <div class="containerbody">
                    <nav id="navegador">
                        <ul>
                            <li><a onclick="update()">Atualização</a></li>
                            <li><a href="<?=$base;?>/relatorioProduto">Relatórios</a></li>
                            <li><a>Configuração</a></li>
                        </ul>
                    </nav>
                    <!-- colocar ele para ser o principal da tela quando for chamado-->
                    <div id="containerupdate" style="display:none;">
                        <form action="<?=$base;?>/updateProduto" method="post">
                            <input type="search" placeholder="pesquisar codigo" required name="produto" id="updateproduto">
                            <input type="submit" value="pesquisar">
                        </form>
                    </div>
                </div>
                
            </section>
            <section id="produtoSection">
                <form id="form"  method="post" action="<?=$base;?>/addProduto">
                    <div id="containerEsq">
                        <div class="juncao1">
                            <label for="codigo">
                                <input type="text" name="codigo" placeholder="codigo" id="codigo" >
                            </label>
                            <input  disabled="" value="<?='Nº itens cadastrados: '.$quantiaproduto;?>">

                        </div>                                
                        <div class="juncao2">
                            <label for="item">
                                <input type="text" name="item" placeholder="descricao do produto" id="item" >
                            </label>
                        </div>
                        <div class="juncao3">
                            <label for="quantia">
                                <input type="text" name="quantia" placeholder="quantia" id="quantia">
                            </label>
                            <label for="unidade">
                                <input type="text" name="unidade" placeholder="unidade ,pacote , caixa" id="unidade">
                                
                            </label>
                        </div>
                        <div id="financeiro" >
                            <h6>Financeiro</h6>

                            <div class="juncao4">
                                <label for="precoCusto">
                                    <input type="number" id="precoCusto"  name="precoCusto" placeholder="preço custo" value="" onfocus="porcentagem()">
                                </label>
                                <label for="lucro">
                                    <input type="number" id="lucro" name="lucro" placeholder="margem de lucro" value="45" onblur="porcentagem()">
                                </label>
                            </div>
                            <div class="juncao5">
                                <label for="precoVenda">
                                    <input type="number" readonly name="precoVenda" id="precoVenda" value="" >
                                    
                                                                            
                                </label>
                                <label for="date">
                                    <input type="date" id="date" name="data" >
                                </label>
                            </div>
                        </div>


                    
                        <div class="fisico">
                            <input  type="number" name="min_estoque" id="min_estoque" placeholder="minimo estocável" >

                        </div>
                        <br>
                        <a class="button" onclick="anotar()">Gravar</a>
                    </div>
                    
                    <div class="containerDir" >
                        <div class="introProdutos">
                            <ul class="Produtos" >
                                <li >Código: <p class="codigo"></p></li>
                                <li >Item: <p class="item"></p></li>
                                <li >Quantia: <p class="quantia"></p></li>
                                <li >Unidade: <p class="unidade"></p></li>
                                <li >Preco de compra: <p class="precoCompra"></p></li>
                                <li >Preco de venda: <p class ="precoVenda"></p></li>
                                <li >Lucro: <p class="lucro"></p></li>
                                <li >Data: <p class ="data"></p></li>                          
                                <li >Minimo no estoque: <p class="min_estoque"></p></li>
                            </ul>
                        </div>
                        
                        <input type="submit" id="enter" value="inserir">
                    </div>
                </form>       
            </section>        
        </div>
    </section>
</section>
<script src="<?=$base;?>/assets/js/config_script.js"></script>
<script src="<?=$base;?>/assets/js/produtos.js"></script>
</body>

</html>