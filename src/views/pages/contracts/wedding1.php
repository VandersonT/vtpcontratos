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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/contracts/wedding1.min.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="toggleMenu">
        <i class="fas fa-caret-square-right"></i>
    </div>

    <form class="fillMenu animate__animated">    
        
        <label class="checkBox">
            <input class="toggleLogo" type="checkbox" />
            <p>Usar logo</p>
        </label>
    
        <input maxlength="20" class="contractName" type="text" placeholder="Nome do contrato" value="<?= ($contract->id > 1 && $contract->contract_name != 'Sem Nome') ? $contract->contract_name : '' ?>"/>
        
        <input id="sendCmp1" type="text" placeholder="Tipo de serviço [ex: Fotografia e filmagem]" value="<?= ($contract->id > 1 && $contract->service != '(SERVIÇOS)') ? $contract->service : '' ?>"/>
        
        <textarea id="sendInfoHired" placeholder="Informações do contratado, ex: pessoa fisica ou juridica, cnpj, telefone, cidade e estado "><?= ($contract->id > 1 && $contract->hired_info != '(Informações da pessoa ou empresa contratada)') ? $contract->hired_info : '' ?></textarea>

        <input id="sendName" type="text" placeholder="Nome do contratante" value="<?= ($contract->id > 1 && $contract->name != '(Nome do Contratante)') ? $contract->name : '' ?>"/>

        <input id="sendCpf" type="text" placeholder="Cpf do contratante" value="<?= ($contract->id > 1 && $contract->cpf != '(Cpf do contratante)') ? $contract->cpf : '' ?>"/>

        <input id="sendRg" type="text" placeholder="Rg do contratante" value="<?= ($contract->id > 1 && $contract->rg != '(Rg do contratante)') ? $contract->rg : '' ?>"/>

        <input id="sendEmail" type="text" placeholder="Email do contratante" value="<?= ($contract->id > 1 && $contract->email != '(Email do contratante)') ? $contract->email : '' ?>"/>

        <input id="sendCell" type="text" placeholder="Celular do contratante" value="<?= ($contract->id > 1 && $contract->cell != '(Cell do contratante)') ? $contract->cell : '' ?>"/>

        <input id="sendAddress" type="text" placeholder="Endereço do contratante" value="<?= ($contract->id > 1 && $contract->address != '(Endereço do contratante)') ? $contract->address : '' ?>"/>

        <input id="sendCity" type="text" placeholder="Cidade do contratante" value="<?= ($contract->id > 1 && $contract->city != '(Cidade do contratante)') ? $contract->city : '' ?>"/>

        <input id="sendBride" type="text" placeholder="Nome da noiva" value="<?= ($contract->id > 1 && $contract->bride != '(Nome da noiva)') ? $contract->bride : '' ?>"/>
        
        <input id="sendEngaged" type="text" placeholder="Nome do noivo" value="<?= ($contract->id > 1 && $contract->engaged != '(Nome do noivo)') ? $contract->engaged : '' ?>"/>

        <input id="sendDate" type="text" placeholder="data do casamento" value="<?= ($contract->id > 1 && $contract->date != '(Data)') ? $contract->date : '' ?>"/>

        <input id="sendTime" type="text" placeholder="Hora do casamento" value="<?= ($contract->id > 1 && $contract->time != '(Horario)') ? $contract->time : '' ?>"/>

        <input id="sendPlace" type="text" placeholder="local" value="<?= ($contract->id > 1 && $contract->place != '(local)') ? $contract->place : '' ?>"/>
        
        <textarea id="sendGoals" placeholder="Objetivos"><?= ($contract->id > 1 && $contract->goals != '(Objetivos)') ? $contract->goals : '' ?></textarea>

        <textarea id="sendPrice" class="middleTextArea" placeholder="Preço"><?= ($contract->id > 1 && $contract->price != '(preço)') ? $contract->price : '' ?></textarea>

        <textarea id="sendDeadline" class="middleTextArea" placeholder="Prazo"><?= ($contract->id > 1 && $contract->deadline != '(prazo)') ? $contract->deadline : '' ?></textarea>

        <input id="sendWarranty" type="text" placeholder="Garantia" value="<?= ($contract->id > 1 && $contract->warranty != '(Garantia)') ? $contract->warranty : '' ?>"/>
        
        <input id="sendDateToday" type="text" placeholder="Data de hoje" value="<?= ($contract->id > 1 && $contract->date_today != '(Data de hoje)') ? $contract->date_today : '' ?>"/>

        <input id="sendNameHired" type="text" placeholder="nome do contratado" value="<?= ($contract->id > 1 && $contract->name_hired != '(Nome do Contratado)') ? $contract->name_hired : '' ?>"/>

        <button class="generateBtn">Gerar</button>
    </form>

    <div class="barMenu">
        <a onClick="return window.confirm('Se você voltar perderá toda edição.');" href="javascript:history.go(-1)" class="btnContract return">
            Voltar
        </a>
        <div class="nameContract">
            <i class="fas fa-file-signature"></i>
            <p><?= ($contract->id > 1) ? $contract->contract_name : 'Novo Contrato' ?></p>
        </div>
        <a class="btnContract saveContract">
            <?= ($contract->id > 1) ? 'Editar' : 'Salvar' ?> 
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

        <div class="mainTitle spaceBottom2x">
            <span contentEditable="true" class="cmp1"><?=$contract->cmp1;?></span>
            <span contentEditable="true" class="service <?= ($contract->service == '(SERVIÇOS)') ? 'mark' : '' ?> "><?=$contract->service;?></span>
            <span contentEditable="true" class="cmp2"><?=$contract->cmp2;?></span>
        </div>

        <span contentEditable="true" class="cmp3"><?=$contract->cmp3;?></span>
        <span contentEditable="true" class="hired_info <?= ($contract->hired_info == '(Informações da pessoa ou empresa contratada)') ? 'mark' : '' ?>"><?=$contract->hired_info;?></span>
        <span contentEditable="true" class="cmp4"><?=$contract->cmp4;?></span>

        <br/><br/>

        <div class="spaceBottom2x">
            <span class="bold">Nome:</span>
            <span contentEditable="true" class="name <?= ($contract->name == '(Nome do Contratante)') ? 'mark' : '' ?> marginRight1x"><?=$contract->name;?></span>
            
            <span class="bold">Cpf:</span>
            <span contentEditable="true" class="cpf <?= ($contract->cpf == '(Cpf do contratante)') ? 'mark' : '' ?> marginRight1x"><?=$contract->cpf;?></span>

            <span class="bold">Rg:</span>
            <span contentEditable="true" class="rg <?= ($contract->rg == '(Rg do contratante)') ? 'mark' : '' ?> marginRight1x"><?=$contract->rg;?></span>
        </div>

        <div class="spaceBottom2x">
            <span class="bold">E-mail:</span>
            <span contentEditable="true" class="email <?= ($contract->email == '(Email do contratante)') ? 'mark' : '' ?> marginRight1x"><?=$contract->email;?></span>
            
            <span class="bold">Celular:</span>
            <span contentEditable="true" class="cell <?= ($contract->cell == '(Cell do contratante)') ? 'mark' : '' ?> marginRight1x"><?=$contract->cell;?></span>
        </div>

        <div class="spaceBottom2x">
            <span class="bold">Endereço:</span>
            <span contentEditable="true" class="address <?= ($contract->address == '(Endereço do contratante)') ? 'mark' : '' ?> marginRight1x"><?=$contract->address;?></span>
            
            <span class="bold">Cidade:</span>
            <span contentEditable="true" class="city <?= ($contract->city == '(Cidade do contratante)') ? 'mark' : '' ?> marginRight1x"><?=$contract->city;?></span>
        </div>

        <div class="spaceBottom2x">
            <span class="bold">Noiva:</span>
            <span contentEditable="true" class="bride <?= ($contract->bride == '(Nome da noiva)') ? 'mark' : '' ?> marginRight1x"><?=$contract->bride;?></span>
            
            <span class="bold">Noivo:</span>
            <span contentEditable="true" class="engaged <?= ($contract->engaged == '(Nome do noivo)') ? 'mark' : '' ?> marginRight1x"><?=$contract->engaged;?></span>
        </div>

        <h1 contentEditable="true" class="cmp5 title1"><?=$contract->cmp5;?></h1>

        <div class="spaceBottom2x">
            <span contentEditable="true" class="cmp6"><?=$contract->cmp6;?></span>
            <span contentEditable="true" class="service <?= ($contract->service == '(SERVIÇOS)') ? 'mark' : '' ?> lowercase"><?=$contract->service;?></span>
            <span contentEditable="true" class="cmp7"><?=$contract->cmp7;?></span>
            <span contentEditable="true" class="bride <?= ($contract->bride == '(Nome da noiva)') ? 'mark' : '' ?>"><?=$contract->bride;?></span>
            e
            <span contentEditable="true" class="engaged <?= ($contract->engaged == '(Nome do noivo)') ? 'mark' : '' ?>"><?=$contract->engaged;?></span>
            <span contentEditable="true" class="cmp8"><?=$contract->cmp8;?></span>
            <span contentEditable="true" class="date <?= ($contract->date == '(Data)') ? 'mark' : '' ?>"><?=$contract->date;?></span>
            às 
            <span contentEditable="true" class="time <?= ($contract->time == '(Horario)') ? 'mark' : '' ?>"><?=$contract->time;?></span>
            <span contentEditable="true" class="place <?= ($contract->place == '(local)') ? 'mark' : '' ?>"><?=$contract->place;?></span>
        </div>

        <p contentEditable="true" class="cmp9 spaceBottom1x"><?=$contract->cmp9;?></p>

        <div contentEditable="true" id="goals" class="goals <?= ($contract->goals == '(Objetivos)') ? 'mark' : '' ?>"><?=$contract->goals;?></div>

        <h1 contentEditable="true" class="cmp10 title2"><?=$contract->cmp10;?></h1>

        <span contentEditable="true" class="cmp11"><?=$contract->cmp11;?></span>
        <span contentEditable="true" class="price <?= ($contract->price == '(preço)') ? 'mark' : '' ?>"><?=$contract->price;?></span>

        <h1 contentEditable="true" class="cmp12 title2"><?=$contract->cmp12;?></h1>

        <span contentEditable="true" class="cmp13"><?=$contract->cmp13;?></span>
        <span contentEditable="true" class="deadline <?= ($contract->deadline == '(prazo)') ? 'mark' : '' ?>"><?=$contract->deadline;?></span>
        <span contentEditable="true" class="cmp14"><?=$contract->cmp14;?></span>

        <h1 contentEditable="true" class="cmp15 title2"><?=$contract->cmp15;?></h1>
        <span contentEditable="true" class="cmp16"><?=$contract->cmp16;?></span>

        <h1 contentEditable="true" class="cmp17 title2"><?=$contract->cmp17;?></h1>
        <span contentEditable="true" class="cmp18"><?=$contract->cmp18;?></span>
        <span contentEditable="true" class="warranty <?= ($contract->warranty == '(Garantia)') ? 'mark' : '' ?>"><?=$contract->warranty;?></span>
        <span contentEditable="true" class="cmp19"><?=$contract->cmp19;?></span>

        <h1 contentEditable="true" class="cmp20 title2"><?=$contract->cmp20;?></h1>
        <span contentEditable="true" class="cmp21"><?=$contract->cmp21;?></span>

        <div class="box-date">
            <span contentEditable="true" class="date_today <?= ($contract->email == '(Data de hoje)') ? 'mark' : '' ?>"><?=$contract->date_today;?></span>
        </div>

        <div class="box-signature">
            <div class="singleSignature">
                _______________________________
                <span contentEditable="true" class="name <?= ($contract->name == '(Nome do Contratante)') ? 'mark' : '' ?>"><?=$contract->name;?></span>
            </div>
            <div class="singleSignature">
                _______________________________
                <span contentEditable="true" class="name_hired <?= ($contract->name_hired == '(Nome do Contratado)') ? 'mark' : '' ?>"><?=$contract->name_hired;?></span>
            </div>
        </div>

    </div><!--contractSingle-->



    <form class="formSaveContract" method="POST" action="<?=$base;?>/salvar/wedding1">
        <input name="contractId" type="hidden" value="<?=$contractInfo['id']?>" />    
        <input name="contractType" type="hidden" value="<?=$contractInfo['type']?>" />
        <input name="contractNameInput" type="hidden" />
        <input name="cmp1Input" type="hidden"/>
        <input name="serviceInput" type="hidden"/>
        <input name="cmp2Input" type="hidden"/>
        <input name="cmp3Input" type="hidden"/>
        <input name="hiredInfoInput" type="hidden"/>
        <input name="cmp4Input" type="hidden"/>
        <input name="nameInput" type="hidden"/>
        <input name="cpfInput" type="hidden"/>
        <input name="rgInput" type="hidden"/>
        <input name="emailInput" type="hidden"/>
        <input name="cellInput" type="hidden"/>
        <input name="addressInput" type="hidden"/>
        <input name="cityInput" type="hidden"/>
        <input name="brideInput" type="hidden"/>
        <input name="engagedInput" type="hidden"/>
        <input name="cmp5Input" type="hidden"/>
        <input name="cmp6Input" type="hidden"/>
        <input name="cmp7Input" type="hidden"/>
        <input name="cmp8Input" type="hidden"/>
        <input name="dateInput" type="hidden"/>
        <input name="timeInput" type="hidden"/>
        <input name="placeInput" type="hidden"/>
        <input name="cmp9Input" type="hidden"/>
        <input name="goalsInput" type="hidden"/>
        <input name="cmp10Input" type="hidden"/>
        <input name="cmp11Input" type="hidden"/>
        <input name="priceInput" type="hidden"/>
        <input name="cmp12Input" type="hidden"/>
        <input name="cmp13Input" type="hidden"/>
        <input name="deadlineInput" type="hidden"/>
        <input name="cmp14Input" type="hidden"/>
        <input name="cmp15Input" type="hidden"/>
        <input name="cmp16Input" type="hidden"/>
        <input name="cmp17Input" type="hidden"/>
        <input name="cmp18Input" type="hidden"/>
        <input name="warrantyInput" type="hidden"/>
        <input name="cmp19Input" type="hidden"/>
        <input name="cmp20Input" type="hidden"/>
        <input name="cmp21Input" type="hidden"/>
        <input name="nameHiredInput" type="hidden"/>
        <input name="dateTodayInput" type="hidden"/>
    </form>
    
    <textarea id="cmp16AutoComplete"><?= ($contract->id > 1) ? $contract->cmp16 : '' ?></textarea>
    
    <script>
        var themeMode = '<?=$user->themeMode;?>';
        var mode = '<?=$contractInfo['id'];?>';
        var logo = '<?=$user->contractLogo;?>'
    </script>
    <script src="<?=$base;?>/assets/js/contracts/wedding1.min.js"></script>
    <script src="<?=$base;?>/assets/js/darkModeContrato.min.js"></script>
    <script src="<?=$base;?>/assets/js/contracts/contratoAberto.min.js"></script>
</body>
</html>