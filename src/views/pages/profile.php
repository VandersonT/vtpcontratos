<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Gerador de Contrato - perfil</title>

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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/profile.min.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <?= $render('menu', ['user' => $user, 'selected' => 'profile']);?> <!--this partial requires the 5 <scripts> below-->

    <section class="box-content">
        
        <article class="box1">
            <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
        </article>
        <article class="box2">

            <div class="imgProfile"></div>

            <form class="infoProfile" method="POST" action="<?=$base;?>/salvarPerfil" enctype="multipart/form-data">
                
                <?php if(!empty($success)): ?>
                    <div class="success">
                        <i class="fas fa-check-circle"></i>
                        <?= $success; ?>
                    </div>
                <?php endif; ?>

                <?php if(!empty($error)): ?>
                    <div class="error">
                        <i class="fas fa-times"></i>
                        <?= $error; ?>
                    </div>
                <?php endif; ?>

                <h1 class="title">
                    <i class="fas fa-tools"></i>
                    Suas informações
                    <i class="fas fa-tools"></i>
                </h1>
                <input name="userName" type="text" value="<?=$user->name;?>" />
                <input name="userEmail" type="email" value="<?=$user->email;?>" />
                <h1 class="inputTitle">Foto de perfil:</h1>
                <input name="photoProfile" type="file"/>
                <h1 class="inputTitle">Logo para contrato:</h1>
                <input name="logoContract" type="file"/>
                <h1 class="inputTitle">Foto da Assinatura:</h1>
                <input name="signatureContract" type="file"/>
                <h1 class="inputTitle">Tema:</h1>
                <label class="themeMode">
                    <div class="boxDarkTheme">
                        <input <?=($user->themeMode == 'dark') ? 'checked' : '';?> name="themeMode" type="radio" value="dark"/>
                        DarkMode
                    </div>
                    <div>
                        <input <?=($user->themeMode == 'light') ? 'checked' : '';?> name="themeMode" type="radio" value="light"/>
                        LightMode
                    </div>
                </label>
                <input class="saveProfile" type="submit" value="Salvar"/>
            </form>

        </article>
    </section>

    <script>var themeMode = '<?=$user->themeMode;?>';</script>
    <script src="<?=$base;?>/assets/js/toggleMenuMobile.min.js"></script>
    <script src="<?=$base;?>/assets/js/SelectedAndHover.min.js"></script>
    <script src="<?=$base;?>/assets/js/darkMode.min.js"></script>
</body>
</html>