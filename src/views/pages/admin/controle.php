<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Painel - controle </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crie seus contratos muito mais rápido e mais profissional, acesse agora." />
    <meta name="keyword" content="contratos,gerador,geradordecontrato,contratos,modelocontrato,contract,contracts" />
    <meta name="author" content="VandersonT"/>
    
    <link rel="shortcut icon" type="image-x/png" href="<?=$base;?>/iconAdmin.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/admin/menu.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/admin/control.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="screen">
        <?= $render('admin/menu', ['user' => $user,'selected'=>'control']);?>
        <div class="btnMenuMobile"><i class="fas fa-caret-square-right"></i></div>

        <article class="body">
            <h1>
                <i class="fas fa-home"></i>
                Painel de Controle - Gerador de Contratos
            </h1>
            <div class="box-infoGeneral">
                <div class="infoSingle orange">
                    <p>Usuários Online</p>
                    <span>0</span>
                </div>
                <div class="infoSingle darkRed">
                    <p>Total de Visitas</p>
                    <span>0</span>
                </div>
            </div>

            <br/><br/>

            <h1>
                <i class="fab fa-telegram-plane"></i>
                Administradores
            </h1>
            <div class="box-userOn">
                <div class="users">
                    <div class="titles blue">
                        <p>ID</p>
                        <p>NOME</p>
                        <p>CARGO</p>
                    </div>
                    <div class="userSingle">
                        <p>1</p>
                        <p>Vanderson</p>
                        <p>Administrador</p>
                    </div>
                    <div class="userSingle">
                        <p>2</p>
                        <p>Gleison</p>
                        <p>Ajudante</p>
                    </div>
                </div>
            </div>

            <br/><br/>

            <h1>
                <i class="fab fa-telegram-plane"></i>
                Usuários onlines no site
            </h1>
            <div class="box-userOn">
                <div class="users">
                    <div class="titles ciano">
                        <p>ID</p>
                        <p>NOME</p>
                        <p>ÚLTIMA AÇÃO</p>
                    </div>
                    <div class="userSingle">
                        <p>1</p>
                        <p>Bryan</p>
                        <p>20-07-2021 18:00</p>
                    </div>
                    <div class="userSingle">
                        <p>2</p>
                        <p>Antonia</p>
                        <p>20-07-2021 18:00</p>
                    </div>
                    <div class="userSingle">
                        <p>3</p>
                        <p>Marcos</p>
                        <p>20-07-2021 18:00</p>
                    </div>
                </div>
                
            </div>

        </article>
    </section>

    <script src="<?=$base;?>/assets/js/admin/menu.js"></script>
</body>
</html>