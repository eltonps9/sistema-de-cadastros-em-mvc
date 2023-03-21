<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login seletto</title>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login_style.css">
</head>
<body>
    <h1>Logar no sistema</h1>
    <hr>
    <form action="<?=$base;?>/home" method="post">
           <p>
            <?php
                if($_SESSION['error']){
                    echo $_SESSION['error'];
                    $_SESSION['error']="";
                    
                }else{
                    echo "Fazer login";
                };
            ?>
            </p>
        <input type="password" name="senha" id="senha" placeholder="senha">
        <br><br>
        <input type="text" name="nome" id="nome" placeholder="nome">
        <br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</html>