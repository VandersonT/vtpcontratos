<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Painel - suporte individual </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="Crie seus contratos muito mais rápido e mais profissional, acesse agora." />
    <meta name="keyword" content="contratos,gerador,geradordecontrato,contratos,modelocontrato,contract,contracts" />
    <meta name="author" content="VandersonT"/>
    
    <link rel="shortcut icon" type="image-x/png" href="<?=$base;?>/iconAdmin.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/admin/menu.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/admin/chatStaff.min.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="screen">
        <?= $render('admin/menu', ['user' => $user,'selected'=>'support']);?>
        
        <div class="btnMenuMobile"><i class="fas fa-caret-square-right"></i></div>

        <article class="body">
            
            <section id="screenChat" class="screenChat">
                <div class="box-chatRight">
                    <div class="balaoRight">
                    <span class="nameU">Suporte [0]:</span>
                        <p>Se você estiver precisando de alguma ajuda, ou encontrou alguma falha no sistema ou até mesmo quer dar alguma sugestão, mande uma mensagem para nós por este canal!</p>
                    </div>
                    <img src="<?=$base;?>/media/avatars/supportImg.png" />
                </div>
                
                <?php if(count($conversations) > 0): ?>
                    <?php foreach($conversations as $conversation): ?>
                        
                        <?php if($conversation['from_user'] == 0): ?>
                            <div class="box-chatRight">
                                <div class="balaoRight">
                                <span class="nameU">Suporte [0]:</span>
                                    <p><?=$conversation['msg'];?></p>
                                </div>
                                <img src="<?=$base;?>/media/avatars/supportImg.png" />
                            </div>
                        <?php else: ?>
                            <div class="box-chatLeft">
                                <img src="<?=$base;?>/media/avatars/<?=$conversation['photo'];?>" />
                                <div class="balaoLeft">
                                    <span class="nameU"><?=$conversation['name'];?> [<?=$conversation['from_user'];?>]</span>
                                    <p><?=$conversation['msg'];?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                    <?php endforeach; ?>
                <?php endif; ?>

            </section>

            <section class="write">
                <img src="<?=$base;?>/media/avatars/supportImg.png" />
                <form class="staffMsg" method="POST" action="<?=$base;?>/Painel/responderUsuario">
                    <input type="hidden" name="toUser" value="<?=$userId;?>" />
                    <input class="msgTosend" type="hidden" name="msg"/>
                    <textarea class="msgT" placeholder="Digite aqui sua mensagem"></textarea>
                    <input class="env" type="submit" value="Enviar"/>
                </form>
            </section>
            
        </article>
    </section>

    <script src="<?=$base;?>/assets/js/admin/menu.min.js"></script>
    <script src="<?=$base;?>/assets/js/admin/supportSingle.min.js"></script>
</body>
</html>