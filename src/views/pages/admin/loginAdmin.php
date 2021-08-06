<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>GC - Staff</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="Crie seus contratos muito mais rápido e mais profissional, acesse agora." />
    <meta name="keyword" content="contratos,gerador,geradordecontrato,contratos,modelocontrato,contract,contracts" />
    <meta name="author" content="VandersonT"/>
    
    <link rel="shortcut icon" type="image-x/png" href="<?=$base;?>/iconAdmin.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/loginAdmin.min.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="screen">

        <section class="box-login">
            
            <?php if(!empty($flash)):?>
                <div class="error animate_animated animate__bounceIn">
                    <i class="fas fa-exclamation-circle"></i>
                    <?=$flash;?>
                </div>
            <?php endif; ?>
        
            <div class="image"></div>

            <h1>Login</h1>
            <form method="POST" action="<?=$base;?>/Painel/loginStaff">
                <input name="email" type="email" placeholder="Email"/>
                <input name="password" type="password" placeholder="Senha"/>
                <button>Entrar</button>
            </form>
        </section>

    </div>

</body>
</html>