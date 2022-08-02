<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Testes PHP</title>
        <style>
            <?php
            include 'style.css';
            ?> 
        </style>
    </head>
    <body>
        <?php
            $label = 'Login';
            if(isset($_POST['enviar'])) {
                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                if($nome == 'filipe' && $senha == '123') {
                    $label = 'Bem Vindo Filipe';
                    header ("location: http://WWW.facebook.com/");
                }
                else {
                    $label = 'Não registrado';
                }
                if(isset($_POST['lembrar']) == true) {
                    session_start();
                    setcookie('nome','filipe', time() + (60 * 60 * 24* 365),'/');
                    setcookie('senha','123', time() + (60 * 60 * 24 * 365),'/');
                    setcookie('checkbox','checked', time() + (60 * 60 * 24 * 365),'/');
                }
                else {
                    session_start();
                    setcookie('nome','filipe', time() - (60 * 60 * 24* 365),'/');
                    setcookie('senha','123', time() - (60 * 60 * 24 * 365),'/');
                    setcookie('checkbox','', time() + (60 * 60 * 24 * 365),'/');

                }
            }

        ?>
        <form method='post' id='login'>
            <h1><?php echo $label; ?></h1>
            <input class='text' name='nome' type='text' placeholder='User' value='<?php echo @$_COOKIE['nome'];?>' style='margin-top: 40px;'>
            <input class='text'name='senha' type='password' placeholder='Password' value='<?php echo @$_COOKIE['senha'];?>'>
            <div id='lembrarbox'>
                <input type='checkbox' name='lembrar' value='true' <?php echo @$_COOKIE['checkbox'];?>>
                <label for='lembrar'>Lembrar Login</label>
            </div>
            <input class='button' name='enviar' type='submit' value='Login' >
            <button class='button'>Register</button>
        </form>

    </body>
</html>
