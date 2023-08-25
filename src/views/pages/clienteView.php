<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle da seletto</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/cad_style.css">
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
                <div class="containerheader">
                    <h2>Cliente</h2>

                    <strong style="color:red;">
                        <?php
                        if(!empty($_SESSION['error'])){
                            echo $_SESSION['error'];
                            $_SESSION['error']='';
                        }
                        ;?>
                    </strong>
                </div>
                
                
                    <p>conteudo</p>                
                                   
            </section>            
        </div>
    </section>
</section>
</body>

</html>