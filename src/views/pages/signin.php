<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Login - Gerador de Contrato</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="Crie seus contratos muito mais rápido e mais profissional, acesse agora." />
    <meta name="keyword" content="contratos,gerador,geradordecontrato,contratos,modelocontrato,contract,contracts" />
    <meta name="author" content="VandersonT"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" type="image-x/png" href="<?=$base?>/icon.ico">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/login.min.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="screen">

        <section class="box-login">

            <article class="box-img-login">
                <div class="img"></div>
            </article>

            <article class="login">
                <h1>Login</h1>

                <?php if(!empty($flash)): ?>
                    <div class="error animate_animated animate__bounceIn"><?php echo $flash; ?></div>
                <?php endif; ?>

                <form  method="POST" action="<?=$base;?>/login">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" />
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" placeholder="Senha" />
                    <button>Enviar</button>
                </form>
                <a href="<?=$base;?>/cadastro">Cadastrar-se</a>
            </article>

        </section>

    </div>

</body>
</html>