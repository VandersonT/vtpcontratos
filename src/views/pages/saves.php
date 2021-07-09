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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/salvos.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <?= $render('menu', ['user' => $user, 'selected' => 'saves']);?> //this partial requires the 5 <scripts> below
    
    <section class="box-content">
        <?php if(!empty($flash)): ?>
            <div class="sucess">
                <i class="fas fa-check-circle"></i>
                <?=$flash;?>
            </div>
        <?php endif;?>
        <article class="box-contract">
            <h1>Casamento:</h1>

            <div class="contractStorage" >
                
            <?php if(!empty($savesWedding)): ?>
                
                <?php foreach($savesWedding as $saveWedding): ?>
                    <form class="contractSingle" method="GET" action="<?=$base;?>/criação/casamento1/<?=$saveWedding['id'];?>">
                        <img src="<?=$base;?>/assets/images/img-contract.jpg">
                        <p><?=$saveWedding['name'];?></p>
                        <button>Editar</button>
                        <button class="deleteSaves"><i class="fas fa-trash"></i></button>
                    </form>.
                <?php endforeach; ?>   
            <?php else: ?> 
                <p style="display:none;" class="contractSingle">Modelo para contrato</p>
                Você não tem nenhum contrato salvo
            <?php endif; ?>

            </div>
        </article>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="<?=$base;?>/assets/js/toggleMenuMobile.js"></script>
    <script src="<?=$base;?>/assets/js/SelectedAndHover.js"></script>
    <script src="<?=$base;?>/assets/js/darkMode.js"></script>
</body>
</html>