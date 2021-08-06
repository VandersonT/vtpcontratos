<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Gerador de Contrato - Suporte</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="Crie seus contratos muito mais rápido e mais profissional, acesse agora." />
    <meta name="keyword" content="contratos,gerador,geradordecontrato,contratos,modelocontrato,contract,contracts" />
    <meta name="author" content="VandersonT"/>
    
    <link rel="shortcut icon" type="image-x/png" href="<?=$base;?>/icon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/struct.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/support.min.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <?= $render('menu', ['user' => $user, 'selected' => 'support']);?> <!--this partial requires the 5 <scripts> below-->

    <section class="box-content">
        
        <section id="chat" class="chat-screen">  

            <?php if(!empty($flash)): ?>
                <div class="success">
                    <i class="fas fa-check-circle"></i>
                    <?=$flash;?>
                </div>
            <?php endif; ?>

            <div class="box-chatLeft">
                <img src="<?=$base;?>/media/avatars/supportImg.png" />
                <div class="balaoLeft">
                    <p>Se você estiver precisando de alguma ajuda, ou encontrou alguma falha no sistema ou até mesmo quer dar alguma sugestão, mande uma mensagem para nós por este canal!</p>
                </div>
            </div>

            <?php if(count($chatSingle) > 0): ?>

                <?php foreach($chatSingle as $chat): ?>
                    <?php if($chat['from_user'] == $user->id): ?>
                        
                        <div class="box-chatRight">
                            <div class="balaoRight">
                                <p><?= $chat['msg']; ?></p>
                            </div>
                            <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
                        </div>
                        
                    <?php endif; ?>

                    <?php if($chat['to_user'] == $user->id): ?>
                        
                        <div class="box-chatLeft">
                            <img src="<?=$base;?>/media/avatars/supportImg.png" />
                            <div class="balaoLeft">
                                <p><?= $chat['msg']; ?></p>
                            </div>
                        </div>

                    <?php endif; ?>

                <?php endforeach; ?>

            <?php endif; ?>
            
        </section>

        <section class="chat-write">
            <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
            
            <form class="formSupport" method="POST" action="<?=$base;?>/enviarMsg">
                <textarea <?=($isSupportActive) ? 'placeholder="Digite aqui a sua mensagem para o nosso suporte"' : 'disabled placeholder="O suporte esta temporariamente indisponivel no momento."';?>  name="msgToSuport" class="newMsg"></textarea>
                <input <?=(!$isSupportActive) ? 'disabled' : '';?> type="submit" value="Enviar"/>
            </form>

        </section>

    </section>

    <script>var themeMode = '<?=$user->themeMode;?>';</script>
    <script src="<?=$base;?>/assets/js/toggleMenuMobile.min.js"></script>
    <script src="<?=$base;?>/assets/js/SelectedAndHover.min.js"></script>
    <script src="<?=$base;?>/assets/js/darkMode.min.js"></script>
    <script>
        var screenChat = document.getElementById('chat');
        screenChat.scrollTop = screenChat.scrollHeight;
    </script>
</body>
</html>