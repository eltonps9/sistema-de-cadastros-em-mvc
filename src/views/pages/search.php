
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque de materiais</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/styleSearch.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/body_style.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/sections_style.css">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style_home.css">
</head>
<body>
<section id="container">
        <?php $render('header');?>

        <section id="section_int">
            <?php $render('navBar');?>
        
            <div class="container_section">
               
                <section id="search" class="height">
                    <h2>Pesquisar cliente/estoque</h2>

                    <form action="<?=$base;?>/searching" method="post">
                        <input type="search" name="pesquisar" placeholder="pesquisar cliente/estoque">
                            <select name="search" id="pesquisar">
                                <option value="">selecionar</option>
                                <option value="estoque">estoque</option>
                                <option value="cliente">cliente</option>
                            </select>
                        <input type="submit" value="pesquisar">
                    </form>
                   <strong>
                    <?php 
                    if($_SESSION['search']==true){
                        echo $_SESSION['search'];
                        $_SESSION['search']="";
                   }?>
                   </strong>
                    <?php 
                        
                        if($searching==true):
                    ?>  
                         
                        <nav id="container">
                            
                            <table>
                            <tr>
                                <td>CLIENTE</td>
                                <td>AMBIENTE</td>
                                <td>MARCENEIRO</td>
                                <td class="acoes">AÇÕES</td>
                            </tr>
                            <?php foreach($searching as $product): ?>
                            <tr>
                                <td><?=$product['cliente'];?></td>
                                <td><?=$product['ambiente'];?></td>
                                <td><?=$product['marceneiro'];?></td>
                                <td class="acoes">
                                    <a href="<?=$base;?>/delete/<?=$product['id'];?>" onclick="return(confirm('deseja excluir esse trecho de informações?'))">excluir</a>
                                    <a href="<?=$base;?>/updateCliente/<?=$product['id'];?>">editar</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </table>                         
                        </nav>
                    <?php endif;?>

                </section> 
            </div>
        </section>
</section>    

    
    