<article class="menu">
    <div class="info">
        <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
        <p><?= $user->name;?></p>
        <span>
            <?= $user->access == 2 ? 'Ajudante' : '';?>
            <?= $user->access == 3 ? 'Administrador' : '';?>
        </span>
    </div>

    <div class="main-menu">
        <p>Gestão</p>
        <a href="<?=$base;?>/Painel" class="<?= $selected == 'control' ? 'selected' : '';?>" >
            <i class="fas fa-tasks"></i>
            Controle
        </a>
        <a href="<?=$base;?>/Painel/ban" class="<?= $selected == 'ban' ? 'selected' : '';?>">
            <i class="fas fa-ban"></i>
            Banir Usuário
        </a>
        <a href="<?=$base;?>/Painel/ban" class="<?= $selected == 'userBan' ? 'selected' : '';?>">
            <i class="fas fa-user-slash"></i>
            Usuários Banidos
        </a>
        <p>Chat</p>
        <a href="#" class="<?= $selected == 'support' ? 'selected' : '';?>">
            <i class="fas fa-headset"></i>
            Suporte
        </a>
        <a href="#" class="<?= $selected == 'chatS' ? 'selected' : '';?>">
            <i class="fas fa-comments"></i>
            Chat da staff
        </a>
        <p>Administração do Painel</p>
        <a href="<?=$base;?>/Painel/novoStaff" class="<?= $selected == 'newStaff' ? 'selected' : '';?>">
            <i class="fas fa-user-plus"></i>
            Gerencia Cargos
        </a>
        <a class="closePainel" href="<?=$base;?>/Painel/sair" onClick="return confirm('Você quer realmente sair?');">
            <i class="fas fa-door-open"></i>
            Sair
        </a>
    
    </div>

</article>