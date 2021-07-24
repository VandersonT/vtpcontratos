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
        <a href="#">
            <i class="fas fa-tasks"></i>
            Gerenciamento
        </a>
        <a href="#">
            <i class="fas fa-ban"></i>
            Banir Usuario
        </a>
        <p>Chat</p>
        <a href="#">
            <i class="fas fa-headset"></i>
            Suporte
        </a>
        <a href="#">
            <i class="fas fa-comments"></i>
            Chat da staff
        </a>
        <p>Administração do Painel</p>
        <a href="#">
            <i class="fas fa-edit"></i>
            Editar usuarios
        </a>
        <a href="#">
            <i class="fas fa-user-plus"></i>
            Cadastrar usuario
        </a>
        <a class="closePainel" href="#">
            <i class="fas fa-door-open"></i>
            Sair
        </a>
    
    </div>

</article>