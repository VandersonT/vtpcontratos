<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>GC - Contrato</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width,height=device-height, target-densitydpi=device-dpi" />
    <meta name="description" content="Crie seus contratos muito mais rápido e mais profissional, acesse agora." />
    <meta name="keyword" content="contratos,gerador,geradordecontrato,contratos,modelocontrato,contract,contracts" />
    <meta name="author" content="VandersonT"/>
    
    <link rel="shortcut icon" type="image-x/png" href="<?=$base;?>/icon.ico">
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/contracts/contratoAbertoBase.min.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/contracts/devweb1.min.css" />

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

        <input maxlength="20" class="contractName" type="text" placeholder="Escreva o nome do contrato" value="<?= ($contract->id > 1 && $contract->contract_name != 'Sem Nome') ? $contract->contract_name : '' ?>"/>
        
        <textarea id="inputInfoHired" placeholder="Informações do contratado Ex: <Seu nome completo>, com inscrição no CPF nº 000.000.00-00, residente e domiciliada à <Seu endereço completo> – Cidade/estado, CEP: 00.000-000."><?= ($contract->id > 1 && $contract->info_hired != '(Informações do contratado)') ? $contract->info_hired : ''?></textarea>

        <textarea id="inputInfoContractor" placeholder="Informações do contratante Ex: <Nome da empresa contratante>, com inscrição no CNPJ nº 00.000.000/0001-00, localizada à <Endereço completo> – Cidade/estado, CEP: 00.000-000, tendo como representante legal, seu sócio-diretor <Nome do representante>."><?= ($contract->id > 1 && $contract->info_contractor != '(<Nome da empresa contratante>, com inscrição no CNPJ nº 00.000.000/0001-00, localizada à <Endereço completo> – Cidade/SP, CEP: 13.000-000, tendo como representante legal, seu sócio-diretor <Nome do representante>.)') ? $contract->info_contractor : ''?></textarea>

        <input id="inputNameCompany" type="text" placeholder="Nome da empresa/pessoa contratante" value="<?= ($contract->id > 1 && $contract->name_contractor != '(Nome da empresa/pessoa contratante)') ? $contract->name_contractor : '' ?>"/>
        
        <textarea id="inputAboutProduct" class="inputInfoHired" placeholder="Sobre o produto"><?= ($contract->id > 1 && $contract->about_product != '(Sobre o Produto)') ? $contract->about_product : '' ?></textarea>

        <input id="inputDeadline" type="text" placeholder="Prazo" value="<?= ($contract->id > 1 && $contract->deadline != '(Prazo)') ? $contract->deadline : '' ?>"/>

        <input id="inputWarranty" type="text" placeholder="Garantia" value="<?= ($contract->id > 1 && $contract->warranty != '(Garantia)') ? $contract->warranty : '' ?>" />

        <input id="inputPrice" type="text" placeholder="Preço" value="<?= ($contract->id > 1 && $contract->price != '(Preço)') ? $contract->price : '' ?>"/>

        <input id="inputInstallments" type="text" placeholder="Parcelas" value="<?= ($contract->id > 1 && $contract->installments != '(Parcelas)') ? $contract->installments : '' ?>"/>

        <input id="inputDivided" type="text" placeholder="Divido em..." value="<?= ($contract->id > 1 && $contract->divided_in != '(Dividido em)') ? $contract->divided_in : '' ?>"/>

        <input id="inputDateToday" type="text" placeholder="Cidade e data de hoje" value="<?= ($contract->id > 1 && $contract->date_today != '({Cidade}, {dia} de {mes} de {ano})') ? $contract->date_today : '' ?>"/>

        <input id="inputNameContractor" type="text" placeholder="Nome do contratante" value="<?= ($contract->id > 1 && $contract->contractor_name != '(Nome do contratante)') ? $contract->contractor_name : '' ?>"/>

        <input id="inputNameHired" type="text" placeholder="Nome do contratado" value="<?= ($contract->id > 1 && $contract->hired_name != '(Nome do contratado)') ? $contract->hired_name : '' ?>"/>

        <br/><br/>
        <label class="checkBox">
            <input class="toggleSignature" type="checkbox" />
            <p>Usar sua assinatura</p>
        </label>

        <button class="generateBtn">Gerar</button>
    </form>

    <div class="barMenu">
        <a onClick="return window.confirm('Se você voltar perderá toda edição.');" href="javascript:history.go(-1)" class="btnContract return">
            Voltar
        </a>
        <div class="nameContract">
            <i class="fas fa-file-signature"></i>
            <p><?=($contract->id > 1) ? $contract->contract_name : 'Novo Contrato'?></p>
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

        <h1 contentEditable="true" class="title"><b><?=$contract->title;?></b></h1>

        <br/>

        <b class="cmp1" contentEditable="true"><?=$contract->cmp1;?></b> 
        <span class="cmp2" contentEditable="true"><?=$contract->cmp2;?></span>

        <br/><br/>

        <b class="titleInfoHired upper" contentEditable="true"><?=$contract->title_info_hired;?></b>
        <span contentEditable="true" class="info_hired <?= ($contract->info_hired == '(Informações do contratado)') ? 'mark' : '' ?>"><?=$contract->info_hired;?></span>

        <br/><br/>

        <b contentEditable="true" class="titleInfoContractor upper" contentEditable="true"><?=$contract->title_info_contractor;?></b>
        <span contentEditable="true" class="info_contractor <?= ($contract->info_contractor == '(Informações da pessoa ou empresa contratante)') ? 'mark' : '' ?>"><?=$contract->info_contractor;?></span>

        <br/><br/><br/><br/>

        <b class="cmp3 upper" contentEditable="true"><?=$contract->cmp3;?></b>

        <br/><br/>

        <span contentEditable="true" class="cmp4"><?=$contract->cmp4;?></span>
        
        <br/><br/>
        
        <b contentEditable="true" class="cmp4aTitle"><?=$contract->cmp4aTitle;?></b>

        <span contentEditable="true" class="cmp4aContent"><?=$contract->cmp4aContent;?></span>

        <br/><br/>

        <b contentEditable="true" class="cmp5"><?=$contract->cmp5;?></b>
        <span contentEditable="true" class="cmp6"><?=$contract->cmp6;?></span>
        <span contentEditable="true" class="name_contractor <?= ($contract->name_contractor == '(Nome da empresa/pessoa contratante)') ? 'mark' : '' ?>"><?=$contract->name_contractor;?></span>
        <span contentEditable="true" class="cmp7"><?=$contract->cmp7;?></span>

        <br/><br/>

        <span contentEditable="true" class="about_product <?= ($contract->about_product == '(Sobre o Produto)') ? 'mark' : '' ?>"><?=$contract->about_product;?></span>

        <br/><br/><br/><br/>

        <b contentEditable="true" class="cmp10"><?=$contract->cmp10;?></b>

        <br/><br/>

        <b contentEditable="true" class="cmp11"><?=$contract->cmp11;?></b>

        <br/><br/>

        <span contentEditable="true" class="hired_obligation"><?=$contract->hired_obligation;?></span>

        <br/><br/>

        <b contentEditable="true" class="cmp12"><?=$contract->cmp12;?></b>

        <br/><br/>

        <span contentEditable="true" class="contractor_obligation"><?=$contract->contractor_obligation;?></span>

        <br/><br/><br/><br/>

        <b contentEditable="true" class="cmp13"><?=$contract->cmp13;?></b>

        <br/><br/>

        <span contentEditable="true" class="cmp14"><?=$contract->cmp14;?></span>
        <span contentEditable="true" class="deadline <?= ($contract->deadline == '(Prazo)') ? 'mark' : '' ?>"><?=$contract->deadline;?></span>
        <span contentEditable="true" class="cmp15"><?=$contract->cmp15;?></span>

        <br/><br/><br/><br/>

        <b contentEditable="true" class="cmp16"><?=$contract->cmp16;?></b>

        <br/><br/>

        <span contentEditable="true" class="cmp17"><?=$contract->cmp17;?></span>

        <br/><br/>

        <b contentEditable="true" class="cmp18"><?=$contract->cmp18;?></b>

        <br/><br/>

        <span contentEditable="true" class="cmp19"><?=$contract->cmp19;?></span>

        <br/><br/>

        <b contentEditable="true" class="cmp20"><?=$contract->cmp20;?></b>

        <br/><br/>

        <span contentEditable="true" class="cmp21"><?=$contract->cmp21;?></span>

        <br/><br/>

        <b contentEditable="true" class="cmp22"><?=$contract->cmp22;?></b>

        <br/><br/>

        <span contentEditable="true" class="cmp23"><?=$contract->cmp23;?></span>

        <br/><br/>

        <b contentEditable="true" class="cmp24"><?=$contract->cmp24;?></b>

        <br/><br/>

        <span contentEditable="true" class="cmp25"><?=$contract->cmp25;?></span>
        <span contentEditable="true" class="warranty <?= ($contract->warranty == '(Garantia)') ? 'mark' : '' ?>"><?=$contract->warranty;?></span>
        <span contentEditable="true" class="cmp26"><?=$contract->cmp26;?></span>

        <br/><br/><br/><br/>

        <b contentEditable="true" class="cmp27"><?=$contract->cmp27;?></b>

        <br/><br/>

        <span contentEditable="true" class="cmp28"><?=$contract->cmp28;?></span>
        <span contentEditable="true" class="price <?= ($contract->price == '(Preço)') ? 'mark' : '' ?>"><?=$contract->price;?></span>
        em
        <span contentEditable="true" class="installments <?= ($contract->installments == '(Parcelas)') ? 'mark' : '' ?>"><?=$contract->installments;?></span>
        parcelas de
        <span contentEditable="true" class="divided_in  <?= ($contract->divided_in == '(Dividido em)') ? 'mark' : '' ?>"><?=$contract->divided_in;?></span>
        
        <span contentEditable="true" class="cmp29"><?=$contract->cmp29;?></span>

        <br/><br/>

        <span contentEditable="true"  class="cmp30"><?=$contract->cmp30;?></span>

        <br/><br/><br/><br/>

        <b contentEditable="true" class="cmp31"><?=$contract->cmp31;?></b>

        <br/><br/>

        <span contentEditable="true"  class="cmp32"><?=$contract->cmp32;?></span>

        <br/><br/>

        <span contentEditable="true" class="cmp33"><?=$contract->cmp33;?></span>

        <br/><br/><br/><br/>

        <span contentEditable="true"  class="dateToday <?= ($contract->date_today == '({Cidade}, {dia} de {mes} de {ano})') ? 'mark' : '' ?>"><?=$contract->date_today;?></span>

        <br/><br/><br/><br/>

        <div class="box-signature">
            <div class="singleSignature">
                _______________________________
                <span contentEditable="true" class="name_contractorL <?= ($contract->contractor_name == '(Nome do contratante)') ? 'mark' : '' ?>"><?=$contract->contractor_name;?></span>
            </div>
            <div class="singleSignature">
                <img src="<?=$base;?>/media/signature/<?=$user->contractSignature?>" />
                <p class="whiteLine">_______________________________</p>
                <span contentEditable="true" class="name_hired <?= ($contract->hired_name == '(Nome do contratado)') ? 'mark' : '' ?>"><?=$contract->hired_name;?></span>
            </div>
        </div>

    </div><!--contractSingle-->

    
    <form class="formSaveContract" method="POST" action="<?=$base;?>/salvar/devweb1">
        Dê um submit nesse contrato com o js 
        <input name="contractId" type="hidden" value="<?=$contractInfo['id']?>" />    
        <input name="contractNameInput" type="hidden"/>
        <input name="titleInput" type="hidden"/>
        <input name="cmp1Input" type="hidden"/>
        <input name="cmp2Input" type="hidden"/>
        <input name="titleInfoHiredInput" type="hidden"/>
        <input name="infoHiredInput" type="hidden"/>
        <input name="titleInfoContractorInput" type="hidden" />
        <input name="infoContractorInput" type="hidden" />
        <input name="cmp3Input" type="hidden" />
        <input name="cmp4Input" type="hidden" />
        <input name="cmp4aTitleInput" type="hidden" />
        <input name="cmp4aContentInput" type="hidden" />
        <input name="cmp5Input" type="hidden" />
        <input name="cmp6Input" type="hidden" />
        <input name="nameContractorInput" type="hidden" />
        <input name="cmp7Input" type="hidden" />
        <input name="aboutProductInput" type="hidden" />
        <input name="cmp10Input" type="hidden" />
        <input name="cmp11Input" type="hidden" />
        <input name="hiredObligationInput" type="hidden" />
        <input name="cmp12Input" type="hidden" />
        <input name="contractorObligationInput" type="hidden" />
        <input name="cmp13Input" type="hidden" />
        <input name="cmp14Input" type="hidden" />
        <input name="deadlineInput" type="hidden" />
        <input name="cmp15Input" type="hidden" />
        <input name="cmp16Input" type="hidden" />
        <input name="cmp17Input" type="hidden" />
        <input name="cmp18Input" type="hidden" />
        <input name="cmp19Input" type="hidden" />
        <input name="cmp20Input" type="hidden" />
        <input name="cmp21Input" type="hidden" />
        <input name="cmp22Input" type="hidden" />
        <input name="cmp23Input" type="hidden" />
        <input name="cmp24Input" type="hidden" />
        <input name="cmp25Input" type="hidden" />
        <input name="warrantyInput" type="hidden" />
        <input name="cmp26Input" type="hidden" />
        <input name="cmp27Input" type="hidden" />
        <input name="cmp28Input" type="hidden" />
        <input name="priceInput" type="hidden" />
        <input name="installmentsInput" type="hidden" />
        <input name="dividedInInput" type="hidden" />
        <input name="cmp29Input" type="hidden" />
        <input name="cmp30Input" type="hidden" />
        <input name="cmp31Input" type="hidden" />
        <input name="cmp32Input" type="hidden" />
        <input name="cmp33Input" type="hidden" />
        <input name="dateTodayInput" type="hidden" />
        <input name="hiredNameInput" type="hidden" />
        <input name="contractorNameInput" type="hidden" />
    </form>
    

    <textarea class="hide" id="cmp4AutoComplete"><?=$contract->cmp4;?></textarea>
    <textarea class="hide" id="hiredObligationAutoComplete"><?=$contract->hired_obligation;?></textarea>
    <textarea class="hide" id="contractObligationAutoComplete"><?=$contract->contractor_obligation;?></textarea>
    <textarea class="hide" id="cmp15AutoComplete"><?=$contract->cmp15;?></textarea>
    <textarea class="hide" id="cmp30AutoComplete"><?=$contract->cmp30;?></textarea>
    <textarea class="hide" id="cmp32AutoComplete"><?=$contract->cmp32;?></textarea>

    <script>
        var themeMode = '<?=$user->themeMode;?>';
        var mode = '<?=$contractInfo['id'];?>';
        var logo = '<?=$user->contractLogo;?>';
        var signature = '<?=$user->contractSignature;?>';
    </script>
    <script src="<?=$base;?>/assets/js/contracts/devweb1.min.js"></script>
    <script src="<?=$base;?>/assets/js/darkModeContrato.min.js"></script>
    <script src="<?=$base;?>/assets/js/contracts/contratoAberto.min.js"></script>
</body>
</html>