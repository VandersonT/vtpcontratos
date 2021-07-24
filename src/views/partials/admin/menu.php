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
        <a href="#" class="<?= $selected == 'control' ? 'selected' : '';?>" >
            <i class="fas fa-tasks"></i>
            Controle
        </a>
        <a href="#" class="<?= $selected == 'ban' ? 'selected' : '';?>">
            <i class="fas fa-ban"></i>
            Banir Usuario
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
        <a href="#" class="<?= $selected == 'members' ? 'selected' : '';?>">
            <i class="fas fa-edit"></i>
            Ver membros
        </a>
        <a href="#" class="<?= $selected == 'editMembers' ? 'selected' : '';?>">
            <i class="fas fa-edit"></i>
            Editar membros
        </a>
        <a href="#" class="<?= $selected == 'registerMembers' ? 'selected' : '';?>">
            <i class="fas fa-user-plus"></i>
            Cadastrar membros
        </a>
        <a class="closePainel" href="<?=$base;?>/Painel/sair" onClick="return confirm('Você quer realmente sair?');">
            <i class="fas fa-door-open"></i>
            Sair
        </a>
    
    </div>

</article>