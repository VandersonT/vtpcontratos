<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Gerador de Contrato - Salvos</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crie seus contratos muito mais rápido e mais profissional, acesse agora." />
    <meta name="keyword" content="contratos,gerador,geradordecontrato,contratos,modelocontrato,contract,contracts" />
    <meta name="author" content="VandersonT"/>
    
    <link rel="shortcut icon" type="image-x/png" href="<?=$base;?>/icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/struct.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/contratoTipo.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

<?= $render('menu', ['user' => $user, 'selected' => 'contracts']);?> //this partial requires the 5 <scripts> below

    <section class="box-content">
        <article class="box-contract">
            <h1>Contratos para <?=$type;?>:</h1>
            <div class="contractStorage" >
                
                <?php if($type == 'casamento'):?>
                    <form class="contractSingle" method="GET" action="<?=$base;?>/criação/casamento1/1" >
                        <img src="<?=$base;?>/assets/images/weddingImg1.jpg">
                        <p>Casamento</p>
                        <span>Modelo 1</span>
                        <button>Abrir</button>
                    </form>
                <?php endif;?>
                
                <?php if($type == 'aniversario'):?>
                    <!--Não existe ainda aniversario-->
                <?php endif;?>

                <?php if($type == 'desenvolvimentoWeb'):?>
                    <!--Não existe ainda desenvolvimento-->
                <?php endif;?>

            </div>
        </article>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="<?=$base;?>/assets/js/toggleMenuMobile.js"></script>
    <script src="<?=$base;?>/assets/js/SelectedAndHover.js"></script>
    <script src="<?=$base;?>/assets/js/darkMode.js"></script>
</body>
</html>