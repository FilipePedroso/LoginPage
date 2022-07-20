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
            if (isset($_POST['enviar'])) {
                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                if ($nome == 'filipe' && $senha == '123') {
                    $label = "Welcome $nome";
                    }
                else {
                    $label = 'Unregistered';
                }
            }
        ?>
        <form method='post' class='login'>
            <h1 id='titulo'><?php echo $label?></h1>
            <input class='text' type='text' name='nome' placeholder='User' value='' style='margin-top: 40px;'>
            <input class='text'type='password' name='senha' placeholder='Password'>
            <input class='button' type='submit' name='enviar' value='Login'>
            <input class='button' type='submit' name='registrar' value='Register'>
        </form>

    </body>
</html>