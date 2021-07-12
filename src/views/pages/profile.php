<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Gerador de Contrato - perfil</title>

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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/profile.css" />

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

            <form class="infoProfile">
                <h1 class="title">
                    <i class="fas fa-tools"></i>
                    Suas informações
                    <i class="fas fa-tools"></i>
                </h1>
                <input type="text" value="<?=$user->name;?>" />
                <input type="email" value="<?=$user->email;?>" />
                <h1 class="inputTitle">Foto de perfil:</h1>
                <input type="file"/>
                <input class="saveProfile" type="submit" value="Salvar"/>
            </form>

        </article>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="<?=$base;?>/assets/js/toggleMenuMobile.js"></script>
    <script src="<?=$base;?>/assets/js/SelectedAndHover.js"></script>
    <script src="<?=$base;?>/assets/js/darkMode.js"></script>
</body>
</html>