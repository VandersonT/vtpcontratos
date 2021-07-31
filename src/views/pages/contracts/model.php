<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>GC - Contrato</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crie seus contratos muito mais rápido e mais profissional, acesse agora." />
    <meta name="keyword" content="contratos,gerador,geradordecontrato,contratos,modelocontrato,contract,contracts" />
    <meta name="author" content="VandersonT"/>
    
    <link rel="shortcut icon" type="image-x/png" href="<?=$base;?>/icon.ico">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/contracts/contratoAbertoBase.min.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="toggleMenu">
        <i class="fas fa-caret-square-right"></i>
    </div>

    <form class="fillMenu animate__animated">    
        <input class="inputService" type="text" placeholder="Exemplo de input" value="" />
        
        <textarea class="inputInfoHired" placeholder="Exemplo de textArea"></textarea>

        <textarea class="inputInfoHired middleTextArea" placeholder="Exemplo de textArea"></textarea>
        
        <label class="checkBox">
            <input type="checkbox" />
            <p>name checkBox</p>
        </label>

        <button class="generateBtn">Gerar</button>
    </form>

    <div class="barMenu">
        <a href="javascript:history.go(-1)" class="btnContract return">
            Voltar
        </a>
        <div class="nameContract">
            <i class="fas fa-file-signature"></i>
            <p>Novo Contrato</p>
        </div>
        <a class="btnContract saveContract">
            Salvar <!--para salvar faça no js esse botao enviar os valores do contractSingle e dar submit no input no final do codigo-->
        </a>
    </div>

    <p class="warning">
        <i class="fas fa-exclamation-triangle"></i>
        O contrato pode ser editado tanto pelo menu quando pela folha abaixo, altere o que quiser.
    </p>

    <div class="contractSingle">

        <div class="box-logo">
            <img src="<?=$base;?>/media/logo/<?=$user->contractLogo?>" />
        </div>

        contrato aqui

    </div><!--contractSingle-->

    <!--
    <form class="formSaveContract" method="POST" action="<?=$base;?>/salvar/casamento1">
        Dê um submit nesse contrato com o js 
        <input name="contractId" type="hidden" value="<?=$contractInfo['id']?>" />    
        <input name="contractType" type="hidden" value="<?=$contractInfo['type']?>" />
        <input name="user_id" type="hidden" value="<?=$user->id?>" />
    </form>
    -->

    
    <script>
        var themeMode = '<?=$user->themeMode;?>';
        var mode = '<?=$contractInfo['id'];?>';
        var logo = '<?=$user->contractLogo;?>'
    </script>
    <script src="<?=$base;?>/assets/js/darkModeContrato.min.js"></script>
    <script src="<?=$base;?>/assets/js/contracts/contratoAberto.min.js"></script>
</body>
</html>