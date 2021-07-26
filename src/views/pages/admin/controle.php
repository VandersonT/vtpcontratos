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
                    <span><?=count($onlineMembers)?></span>
                </div>
                <div class="infoSingle darkRed">
                    <p>Contas Criadas</p>
                    <span><?=$accountsCreated;?></span>
                </div>
            </div>

            <br/><br/>

            <h1>
                <i class="fab fa-telegram-plane"></i>
                Membros da Staff
            </h1>

            <div class="box-userOn">
                <div class="users">
                    <div class="titles blue">
                        <p>ID</p>
                        <p>NOME</p>
                        <p>CARGO</p>
                    </div>
                    <?php foreach($staffMembers as $staffMember): ?>
                        <div class="userSingle">
                            <p><?=$staffMember['id']?></p>
                            <p><?=$staffMember['name']?></p>
                            <p>
                                <?= $staffMember['access'] == 2 ? 'Ajudante' : '';?>
                                <?= $staffMember['access'] == 3 ? 'Administrador' : '';?>
                                <?= $staffMember['access'] == 4 ? 'Dono' : '';?>
                            </p>
                        </div>
                    <?php endforeach; ?>
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
                    <?php if(!empty($onlineMembers)): ?>
                        <?php foreach($onlineMembers as $onlineMember): ?>
                            <div class="userSingle">
                                <p><?=$onlineMember['user_id'];?></p>
                                <p><?=$onlineMember['user_name'];?></p>
                                <p><?= date('H:i:s',$onlineMember['last_action']);?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <div class="noUser">
                            Nenhum usuário online no momento
                        </div>
                    <?php endif; ?>
                </div>
                
            </div>

            <br/><br/>

            <h1>
                <i class="fas fa-tasks"></i>
                Gerenciamentos
            </h1>
            <div class="box-manager">
                
                <div class="blockSystem">
                    <?php if($isSystemActive): ?>
                        <div class="blockBtn"><a class="btn-purple" href="<?=$base;?>/Painel/system/off">Bloquear acesso</a></div>
                        <p>Esse botão irá trancar o sistema, impedindo qualquer usuario de acessar, exeto membros da staff.</p>
                    <?php else: ?>
                        <div class="blockBtn"><a class="btn-red" href="<?=$base;?>/Painel/system/on">Desbloquear acesso</a></div>
                        <p>Esse botão irá destrancar o sistema, permitindo qualquer usuario de acessar.</p>
                    <?php endif; ?>
                </div>

                <div class="blockSystem">
                    <?php if($isSupportActive): ?>
                        <div class="blockBtn"><a class="btn-purple" href="<?=$base;?>/Painel/support/off">Bloquear suporte</a></div>
                        <p>Esse botão irá trancar o suporte para usuarios, impedindo os usuarios de mandar mensagens, exeto usuarios da staff.</p>
                    <?php else: ?>
                        <div class="blockBtn"><a class="btn-red" href="<?=$base;?>/Painel/support/on">Desbloquear suporte</a></div>
                        <p>Esse botão irá destrancar o suporte para usuarios, impedindo os usuarios de mandar mensagens.</p>
                    <?php endif; ?>
                </div>

            </div>

        </article>
    </section>

    <script src="<?=$base;?>/assets/js/admin/menu.js"></script>
</body>
</html>