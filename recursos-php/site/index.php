<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meu site em PHP</title>
    </head>

    <?php
        // include_once vai incluir apenas uma vez
        // include('includes/header.php')
        require ('includes/header.php');
        // require melhor utilizado quando mexe com banco de dados
        // requite_once inclui apenas uma vez
    ?>

    <body>
        <div>
            <?php
            echo 'Sou o conteúdo do site';
            ?>
        </div>

        <?php
            include ('includes/footer.php');
        ?>
</body>

</html>