<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Painel - banir </title>

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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/admin/ban.min.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="screen">
        <?= $render('admin/menu', ['user' => $user,'selected'=>'ban']);?>
        <div class="btnMenuMobile"><i class="fas fa-caret-square-right"></i></div>

        <article class="body">
            
            <h1>Procure para banir</h1>

            <?php if(!empty($success)): ?>
                <div class="success">
                    <i class="fas fa-check-circle"></i>
                    <?=$success;?>
                </div>
            <?php endif;?>

            <?php if(!empty($error)): ?>
                <div class="error">
                    <i class="fas fa-check-circle"></i>
                    <?=$error;?>
                </div>
            <?php endif;?>

            <div class="showUser">

                <?php if(!empty($userFound)): ?>
                    <img src="<?=$base;?>/media/avatars/<?=$userFound['photo'];?>" />
                    <div class="infoUser">
                        <span class="title">Nome:</span>
                        <span class="result">
                            <?=$userFound['name'];?>
                            <?= $userFound['id'] == $user->id ? '(você)' : '';?>
                        </span>
                        <br/>
                        <span class="title">Cargo:</span>
                        <span class="result">
                            <?= $userFound['access'] == 0 ? 'Banido' : '';?>
                            <?= $userFound['access'] == 1 ? 'Usuário' : '';?>
                            <?= $userFound['access'] == 2 ? 'Ajudante' : '';?>
                            <?= $userFound['access'] == 3 ? 'Administrador' : '';?>
                            <?= $userFound['access'] == 4 ? 'Dono' : '';?>
                        </span>
                        <br/>
                        <span class="title">Id:</span><span class="result"><?=$userFound['id'];?></span>
                    </div>
                    <a class="btnBan" href="<?=$base;?>/Painel/banindo/<?=$userFound['id'];?>/<?=$userFound['access'];?>">Banir</a>
                <?php else:?>
                    <p class="initial">
                        <i class="fas fa-search"></i>
                        Nenhum usuário selecionado
                    </p>
                <?php endif;?>
                
            </div>
            <form method="POST" action="<?=$base;?>/Painel/ban">
                <input name="idSearch" type="number" placeholder="ID"/>
                <input type="submit" value="Procurar" />
            </form>

        </article>
    </section>

    <script src="<?=$base;?>/assets/js/admin/menu.min.js"></script>
</body>
</html>