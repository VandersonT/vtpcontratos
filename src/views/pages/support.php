<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Gerador de Contrato - Suporte</title>

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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/structSimulação.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <?= $render('menu', ['user' => $user, 'selected' => 'support']);?> //this partial requires the 5 <scripts> below

    <section class="box-content">
        
        <section class="chat-screen">
                
            <div class="box-chatLeft">
                <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
                <div class="balaoLeft">
                    <p>Eu tenho um pedido para os administradores, porque não adicionam contratos personalizados, vocês tipo pedem aos usuarios e acrescentam e os demais tbem pode usar? eu amaria :D</p>
                </div>
            </div>

            <div class="box-chatRight">
                <div class="balaoRight">
                    <p>Seria muito complicado para os desenvolvedores, mas você pode sim mandar algum, iremos analizar e verificar e possivelmente acrescentar</p>
                </div>
                <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
            </div>

            <div class="box-chatRight">
                <div class="balaoRight">
                    <p>Seria muito complicado para os desenvolvedores, mas você pode sim mandar algum, iremos analizar e verificar e possivelmente acrescentar</p>
                </div>
                <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
            </div>

            <div class="box-chatRight">
                <div class="balaoRight">
                    <p>Seria muito complicado para os desenvolvedores, mas você pode sim mandar algum, iremos analizar e verificar e possivelmente acrescentar</p>
                </div>
                <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
            </div>

            <div class="box-chatRight">
                <div class="balaoRight">
                    <p>Seria muito complicado para os desenvolvedores, mas você pode sim mandar algum, iremos analizar e verificar e possivelmente acrescentar</p>
                </div>
                <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
            </div>

            <div class="box-chatRight">
                <div class="balaoRight">
                    <p>Seria muito complicado para os desenvolvedores, mas você pode sim mandar algum, iremos analizar e verificar e possivelmente acrescentar</p>
                </div>
                <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
            </div>

            <div class="box-chatRight">
                <div class="balaoRight">
                    <p>Seria muito complicado para os desenvolvedores, mas você pode sim mandar algum, iremos analizar e verificar e possivelmente acrescentar</p>
                </div>
                <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
            </div>

        </section>

        <section class="chat-write">
            <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
            <textarea></textarea>
            <a class="sendQuestion" href="#">Enviar</a>
        </section>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="<?=$base;?>/assets/js/toggleMenuMobile.js"></script>
    <script src="<?=$base;?>/assets/js/SelectedAndHover.js"></script>
    <script src="<?=$base;?>/assets/js/darkMode.js"></script>
</body>
</html>