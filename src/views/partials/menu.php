

<section class="box-menu animate__animated">
        <div id="logo" class="logo"></div>

        <div class="info">
            <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
            <div>
                <p><?= $user->name;?></p>
                <span>
                    Acesso:
                    <?= $user->access == 0 ? 'Banido' : '';?>
                    <?= $user->access == 1 ? 'Usuario' : '';?>
                    <?= $user->access == 2 ? 'Ajudante' : '';?>
                    <?= $user->access == 3 ? 'Administrador' : '';?>
                </span>
            </div>
        </div>
        <div>
            <ul id="menu" class="menu">
                <a href="<?=$base;?>/contratos"><li class="<?= ($selected=='contracts') ? 'selected' : '';?>">
                    <i class="fas fa-file-signature"></i>
                    Contratos
                </li></a>
                <a href="<?=$base;?>/salvos"><li class="<?= $selected=='saves' ? 'selected' : '';?>">
                    <i class="fas fa-share-alt-square"></i>
                    Salvos
                </li></a>
                <a href="<?=$base;?>/perfil"><li class="<?= $selected=='profile' ? 'selected' : '';?>">
                    <i class="fas fa-user"></i>
                    Perfil
                </li></a>
                <a href="<?=$base;?>/suporte"><li class="<?= $selected=='support' ? 'selected' : '';?>">
                    <i class="fas fa-comments"></i>
                    Suporte
                </li></a>
                <a><li class="darkMode">
                    <i class="fas fa-cloud-moon"></i>
                    Dark Mode
                </li></a>
                <a href="<?=$base;?>/sair" onClick="return window.confirm('Quer realmente sair?');"><li class="close">
                    <i class="fas fa-door-open"></i>
                    Sair
                </li></a>
            </ul>
        </div>
    </section>

    <section class="bar-mobile">
        
        <i class="fas fa-bars icon-menu-mobile"></i>
        
        <div class="logo-mobile"></div>
        
        <i class="fas fa-window-close menu-mobile-close animate__animated animate__bounceInLeft"></i>

    </section>