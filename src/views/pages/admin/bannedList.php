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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/admin/bannedList.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <section class="screen">
        <?= $render('admin/menu', ['user' => $user,'selected'=>'bannedList']);?>
        
        <div class="btnMenuMobile"><i class="fas fa-caret-square-right"></i></div>

        <article class="body">
            
            <h1>Usuários banidos</h1> 
            
            <div class="box">
                
                <div class="userSingle">
                    <img src="<?=$base;?>/media/avatars/no-picture.png" />
                    <div class="infoEachUser">
                        <div class="infoSingle">
                            <p>Nome:</p>
                            <span>Sem nome</span>
                        </div>
                        <div class="infoSingle">
                            <p>Id:</p>
                            <span>1</span>
                        </div>
                    </div>
                    <div class="desBan">
                        <a href="#">Desbanir</a>
                    </div>
                </div>

                <div class="userSingle">
                    <img src="<?=$base;?>/media/avatars/no-picture.png" />
                    <div class="infoEachUser">
                        <div class="infoSingle">
                            <p>Nome:</p>
                            <span>Sem nome</span>
                        </div>
                        <div class="infoSingle">
                            <p>Id:</p>
                            <span>2</span>
                        </div>
                    </div>
                    <div class="desBan">
                        <a href="#">Desbanir</a>
                    </div>
                </div>

                <div class="userSingle">
                    <img src="<?=$base;?>/media/avatars/no-picture.png" />
                    <div class="infoEachUser">
                        <div class="infoSingle">
                            <p>Nome:</p>
                            <span>Sem nome</span>
                        </div>
                        <div class="infoSingle">
                            <p>Id:</p>
                            <span>5</span>
                        </div>
                    </div>
                    <div class="desBan">
                        <a href="#">Desbanir</a>
                    </div>
                </div>

                <div class="userSingle">
                    <img src="<?=$base;?>/media/avatars/no-picture.png" />
                    <div class="infoEachUser">
                        <div class="infoSingle">
                            <p>Nome:</p>
                            <span>Sem nome</span>
                        </div>
                        <div class="infoSingle">
                            <p>Id:</p>
                            <span>3</span>
                        </div>
                    </div>
                    <div class="desBan">
                        <a href="#">Desbanir</a>
                    </div>
                </div>

            </div>

        </article>
    </section>

    <script src="<?=$base;?>/assets/js/admin/menu.js"></script>
</body>
</html>