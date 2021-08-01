<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Painel - chatStaff </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <?= $render('admin/menu', ['user' => $user,'selected'=>'chatS']);?>
        
        <div class="btnMenuMobile"><i class="fas fa-caret-square-right"></i></div>

        <article class="body">
            
            <section id="chat" class="screenChat">
                
                <?php if(count($chatSingle) > 0): ?>
                    <?php foreach($chatSingle as $chat): ?>
                        <?php if($chat['user_id'] == $user->id): ?>
                            <div class="box-chatRight">
                                <div class="balaoRight">
                                <span class="nameU"><?=$user->name.' ['.$user->id.']';?>: </span>
                                    <p><?=$chat['msg']?></p>
                                </div>
                                <img src="<?=$base;?>/media/avatars/<?=$user->photo?>" />
                            </div>
                        <?php elseif($chat['user_id'] == 0): ?>
                            <div class="box-chatLeft">
                                <img src="<?=$base;?>/media/avatars/supportImg.png" />
                                <div class="balaoLeft">
                                    <span class="nameU">Suporte[0]: </span>
                                    <p><?=$chat['msg']?></p>
                                </div>
                            </div>
                        <?php elseif($chat['user_id'] == -1): ?>
                            <div class="notification">
                                <?=$chat['msg']?>
                            </div>
                        <?php else: ?>
                            <div class="box-chatLeft">
                                <img src="<?=$base;?>/media/avatars/<?=$chat['user_photo']?>" />
                                <div class="balaoLeft">
                                    <span class="nameU"><?=$chat['user_name'].' ['.$chat['user_id'].']' ;?>: </span>
                                    <p><?=$chat['msg']?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>

            </section>

            <section class="write">
                <img src="<?=$base;?>/media/avatars/<?=$user->photo?>" />
                <form method="POST" action="<?=$base;?>/Painel/enviarMensagemS">
                    <textarea name="msg" placeholder="Digite aqui sua mensagem"></textarea>
                    <input type="submit" value="Enviar"/>
                </form>
            </section>
            
        </article>
    </section>

    <script src="<?=$base;?>/assets/js/admin/menu.min.js"></script>
    <script>
        var screenChat = document.getElementById('chat');
        screenChat.scrollTop = screenChat.scrollHeight;
    </script>
</body>
</html>