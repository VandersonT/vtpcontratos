<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Painel - controle </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crie seus contratos muito mais rápido e mais profissional, acesse agora." />
    <meta name="keyword" content="contratos,gerador,geradordecontrato,contratos,modelocontrato,contract,contracts" />
    <meta name="author" content="VandersonT"/>
    
    <link rel="shortcut icon" type="image-x/png" href="<?=$base;?>/iconAdmin.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/admin/menu.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/admin/support.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="screen">
        <?= $render('admin/menu', ['user' => $user,'selected'=>'support']);?>
        
        <div class="btnMenuMobile"><i class="fas fa-caret-square-right"></i></div>

        <article class="body">
            
            <section class="menuSupport">
                <a href="<?=$base;?>/Painel/suporte/pendente" class="btn-menuSupport <?=($tab == 'pendente') ? 'tabSelected': '';?>">Pendente</a>
                <a href="<?=$base;?>/Painel/suporte/resolvido" class="btn-menuSupport <?=($tab == 'resolvido') ? 'tabSelected': '';?>">Resolvido</a>
            </section>

            <section class="content">
                
                <?php if(count($contents) > 0): ?>
                    <?php foreach($contents as $content): ?>
                        <div class="box-supportSingle">
                            <a href="#SuportSingle" class="supportSingle">
                                <img src="<?=$base;?>/media/avatars/<?= $content['help_user_photo'];?>" />
                                <div class="box-info-user">
                                    <p class="titleInfo">Nome: </p>
                                    <span class="resultInfo"><?= $content['help_user_name'];?></span>
                                    <p class="titleInfo">Id:</p>
                                    <span class="resultInfo"><?= $content['help_user_id'];?></span>
                                    <p class="titleInfo">Última Mod: </p>
                                    <span class="resultInfo"><?= date('d/m/Y H:i:s',$content['last_action']);?></span>
                                </div>
                            </a>
                            <div class="star" >
                                <a class="<?=($tab == 'resolvido') ? 'resolvedColor': 'pendingColor';?>" href="<?=$base;?>/Painel/mudaStatusSuporte/<?= $content['help_user_id'];?>/<?=($tab == 'pendente') ? 'resolvido': 'pendingColor';?>"><i class="fas fa-star"></i></a>
                            </div>
                        </div>
                    <?php endforeach;?>
                <?php else: ?>
                    <p class="warning">
                        <?=($tab == 'resolvido') ? 'Não tem nenhum suporte resolvido ainda.': 'Não tem nenhum suporte pendente.';?>
                    </p>
                <?php endif; ?>

            </section>
            
        </article>
    </section>

    <script src="<?=$base;?>/assets/js/admin/menu.js"></script>
</body>
</html>