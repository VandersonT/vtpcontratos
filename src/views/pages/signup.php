<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Cadastro - Gerador de Contrato</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="Crie seus contratos muito mais rápido e mais profissional, acesse agora." />
    <meta name="keyword" content="contratos,gerador,geradordecontrato,contratos,modelocontrato,contract,contracts" />
    <meta name="author" content="VandersonT"/>
    
    <link rel="shortcut icon" type="image-x/png" href="<?=$base?>/icon.ico">
    <link rel="stylesheet" href="<?=$base?>/assets/css/style.min.css" />
    <link rel="stylesheet" href="<?=$base?>/assets/css/register.min.css" />

</head>
<body>

    <div class="screen">
        
        <section class="box-register">

            <article class="box-img-register">
                <div class="img"></div>
            </article>

            <article class="register">
                <h1>Cadastro</h1>

                <?php if(!empty($flash)): ?>
                    <div class="error"><?php echo $flash; ?></div>
                <?php endif; ?>

                <form method="POST" action="<?=$base;?>/cadastro">
                    <input type="text" name="name" placeholder="Digite seu nome" />
                    <input type="email" name="email" placeholder="Digite um email" />
                    <input type="password" name="password" placeholder="Digite uma senha" />
                    <input type="password" name="passwordConfirm" placeholder="Confirme a senha" />
                    <button>Cadastrar</button>
                </form>
                <a href="<?=$base;?>/login">Já possui uma conta?</a>
            </article>

        </section>

    </div>

</body>
</html>