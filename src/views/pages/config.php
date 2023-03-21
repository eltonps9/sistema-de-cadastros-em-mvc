<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle da seletto</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/config_style.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/sections_style.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/body_style.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/inputs_style.css">
</head>

<body>
<section id="container">
    <?php $render('header');?>

    <section id="section_int">
        <?php $render('navBar');?>
    
        <div class="container_section">
            
            <section id="config" class="height">
                <h2>Configuração</h2>
                <strong style="color:red;">
                    <?php
                    if($_SESSION['error']){
                        echo $_SESSION['error'];
                        $_SESSION['error']='';
                    }
                    ;?>
                </strong>
                
                    <section id="section_body">
                        <nav class="container_int">
                            
                            <ul>
                                <div class="header_lista">
                                    <strong onclick="add_cliente()" class="hover">Adicionar Cliente</strong>
                                    <strong onclick="add_estoque()" class="hover">Adicionar Estoque</strong>
                                    
                                </div>
                                <li  class="lista" id="adicionar_cliente">                            
                                    <div class="body_div">
                                        <form action="<?=$base;?>/adicionarCliente" method="post" class="formulario-css">
                                            
                                            <div class="juncao1-cliente_add">
                                                <div class="juncao_int">
                                                    <input type="text" id="cliente" name="cliente" placeholder="cliente">
                                                </div>
                                                <div class="juncao_int2">
                                                    <input type="text" id="ambiente" name="ambiente" placeholder="ambiente">
                                                    <input type="text" id="marceneiro" name="marceneiro" placeholder="marceneiro">
                                                </div>
                                            </div>
                                            <div class="juncao2-cliente_add">
                                                <label for="material"></label>
                                                
	                                            <textarea id="material" name="material" rows="7" cols="50"></textarea>
                                            </div>
                                            <div class="juncao3-cliente_add">
                                                <div class="juncao_int3">
                                                    <select name="select" for="selecionar">
                                                        <option value="selecionar" id="selecionar">selecionar</option>
                                                    </select>
                                                    <input type="number" placeholder="total">
                                                </div>
                                                <div class="juncao_int4">
                                                    <input type="submit" value="Inserir">
                                                </div>
                                            </div>                                            
                                        </form>
                                    </div>
                                </li>

                                <li class="lista" id="adicionar_estoque">                                 
                                    <div class="body_div" >
                                        <form action="<?=$base;?>/adicionarItem" method="post" class="formulario-css">
                                            <div class="juncaoEst1">
                                                <input type="text" id="item" name="item" placeholder="item">
                                                <input type="number" id="codigo" name="codigo" placeholder="codigo">
                                            </div>
                                            <div class="juncaoEst2">
                                                <input type="number" id="estoque_min" name="estoque_min" placeholder="estoque minimo">
                                                <input type="number" id="quantidade" name="quantidade" placeholder="quantidade">
                                            </div>
                                            <div class="juncaoEst3">
                                                <input type="text" id="unidade" name="unidade" placeholder="unidade">
                                            </div>
                                            <div class="juncaoEst4">
                                                <input type="submit" value="Inserir">
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                

                                
                            </ul>
                        </nav>
                    </section>                
            </section>            
        </div>
    </section>
</section>
    <script src="<?=$base;?>/assets/js/config_script.js"></script>
</body>

</html>