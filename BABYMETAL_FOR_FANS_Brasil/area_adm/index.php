<?php include_once("../lib/includes.php")?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login - Área Administrativa - <?php echo titulo_site;?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="<?php echo url_site;?>">
        <link rel="stylesheet" type="text/css" href="area_adm/css/style.css"/>
    </head>
    <body>
        <header>
            <div id="banner">
                <img src="img/banner-babymetal.png" alt="">
            </div>
        </header>

        <h1>Área Administrativa</h1>

            <?php echo paginacao_adm();?>

    </body>
</html>

