<section id="chat" class="chat-screen">
    <div class="box-chatLeft">
        <img src="<?=$base;?>/media/avatars/supportImg.png" />
        <div class="balaoLeft">
            <p>Se você estiver precisando de alguma ajuda, ou encontrou alguma falha no sistema ou até mesmo quer dar alguma sugestão, mande uma mensagem para nós por este canal!</p>
        </div>
    </div>

    <?php if(count($chatSingle) > 0): ?>
        <?php foreach($chatSingle as $chat): ?>
            <?php if($chat['from_user'] == $user->id): ?>
                
                <div class="box-chatRight">
                    <div class="balaoRight">
                        <p><?= $chat['msg']; ?></p>
                    </div>
                    <img src="<?=$base;?>/media/avatars/<?= $user->photo;?>" />
                </div>
                
            <?php endif; ?>

            <?php if($chat['to_user'] == $user->id): ?>
                
                <div class="box-chatLeft">
                    <img src="<?=$base;?>/media/avatars/supportImg.png" />
                    <div class="balaoLeft">
                        <p><?= $chat['msg']; ?></p>
                    </div>
                </div>

            <?php endif; ?>

        <?php endforeach; ?>

    <?php endif; ?>
</section>