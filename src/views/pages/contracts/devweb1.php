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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/contracts/contratoAbertoBase.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/contracts/devweb1.css" />

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

        <input class="inputService" type="text" placeholder="Escreva o nome do contrato" />
        
        <textarea id="inputInfoHired" placeholder="Informações do contratado Ex: <Seu nome completo>, com inscrição no CPF nº 000.000.00-00, residente e domiciliada à <Seu endereço completo> – Cidade/estado, CEP: 00.000-000."></textarea>

        <textarea id="inputInfoContractor" placeholder="Informações do contratante Ex: <Nome da empresa contratante>, com inscrição no CNPJ nº 00.000.000/0001-00, localizada à <Endereço completo> – Cidade/estado, CEP: 00.000-000, tendo como representante legal, seu sócio-diretor <Nome do representante>."></textarea>

        <input id="inputNameCompany" type="text" placeholder="Nome da empresa/pessoa contratante" />
        
        <textarea id="inputAboutProduct" class="inputInfoHired" placeholder="Sobre o produto"></textarea>

        <input id="inputDeadline" type="text" placeholder="Prazo" />

        <input id="inputWarranty" type="text" placeholder="Garantia" />

        <input id="inputPrice" type="text" placeholder="Preço" />

        <input id="inputInstallments" type="text" placeholder="Parcelas" />

        <input id="inputDivided" type="text" placeholder="Divido em..." />

        <input id="inputDateToday" type="text" placeholder="Cidade e data de hoje" />

        <input id="inputNameContractor" type="text" placeholder="Nome do contratante" />

        <input id="inputNameHired" type="text" placeholder="Nome do contratado" />

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

        <h1 class="title"><b><?=$contract->title;?></b></h1>

        <br/>

        <b><?=$contract->cmp1;?></b> 
        <span><?=$contract->cmp2;?></span>

        <br/><br/>

        <b><?=$contract->title_info_hired;?></b>
        <span class="info_hired <?= ($contract->info_hired == '(Informações do contratado)') ? 'mark' : '' ?>"><?=$contract->info_hired;?></span>

        <br/><br/>

        <b><?=$contract->title_info_contractor;?></b>
        <span class="info_contractor <?= ($contract->info_contractor == '(Informações da pessoa ou empresa contratante)') ? 'mark' : '' ?>"><?=$contract->info_contractor;?></span>

        <br/><br/><br/><br/>

        <b><?=$contract->cmp3;?></b>

        <br/><br/>

        <span class="cmp4"><?=$contract->cmp4;?></span>
        
        <br/><br/>
        
        <b class="cmp4aTitle"><?=$contract->cmp4aTitle;?></b>

        <span class="cmp4aContent"><?=$contract->cmp4aContent;?></span>

        <br/><br/>

        <b><?=$contract->cmp5;?></b>
        <span><?=$contract->cmp6;?></span>
        <span class="name_contractor <?= ($contract->name_contractor == '(Nome da empresa/pessoa contratante)') ? 'mark' : '' ?>"><?=$contract->name_contractor;?></span>
        <span><?=$contract->cmp7;?></span>

        <br/><br/>

        <span class="about_product <?= ($contract->about_product == '(Sobre o Produto)') ? 'mark' : '' ?>"><?=$contract->about_product;?></span>

        <br/><br/><br/><br/>

        <b><?=$contract->cmp10;?></b>

        <br/><br/>

        <b><?=$contract->cmp11;?></b>

        <br/><br/>

        <span class="hired_obligation"><?=$contract->hired_obligation;?></span>

        <br/><br/>

        <b><?=$contract->cmp12;?></b>

        <br/><br/>

        <span class="contractor_obligation"><?=$contract->contractor_obligation;?></span>

        <br/><br/><br/><br/>

        <b><?=$contract->cmp13;?></b>

        <br/><br/>

        <span><?=$contract->cmp14;?></span>
        <span class="deadline <?= ($contract->deadline == '(Prazo)') ? 'mark' : '' ?>"><?=$contract->deadline;?></span>
        <span class="cmp15"><?=$contract->cmp15;?></span>

        <br/><br/><br/><br/>

        <b><?=$contract->cmp16;?></b>

        <br/><br/>

        <span><?=$contract->cmp17;?></span>

        <br/><br/>

        <b><?=$contract->cmp18;?></b>

        <br/><br/>

        <span><?=$contract->cmp19;?></span>

        <br/><br/>

        <b><?=$contract->cmp20;?></b>

        <br/><br/>

        <span><?=$contract->cmp21;?></span>

        <br/><br/>

        <b><?=$contract->cmp22;?></b>

        <br/><br/>

        <span><?=$contract->cmp23;?></span>

        <br/><br/>

        <b><?=$contract->cmp24;?></b>

        <br/><br/>

        <span><?=$contract->cmp25;?></span>
        <span class="warranty <?= ($contract->warranty == '(Garantia)') ? 'mark' : '' ?>"><?=$contract->warranty;?></span>
        <span><?=$contract->cmp26;?></span>

        <br/><br/><br/><br/>

        <b><?=$contract->cmp27;?></b>

        <br/><br/>

        <span><?=$contract->cmp28;?></span>
        <span class="price <?= ($contract->price == '(Preço)') ? 'mark' : '' ?>"><?=$contract->price;?></span>
        em
        <span class="installments <?= ($contract->installments == '(Parcelas)') ? 'mark' : '' ?>"><?=$contract->installments;?></span>
        parcelas de
        <span class="divided_in  <?= ($contract->divided_in == '(Dividido em)') ? 'mark' : '' ?>"><?=$contract->divided_in;?></span>
        
        <span><?=$contract->cmp29;?></span>

        <br/><br/>

        <span class="cmp30"><?=$contract->cmp30;?></span>

        <br/><br/><br/><br/>

        <b><?=$contract->cmp31;?></b>

        <br/><br/>

        <span class="cmp32"><?=$contract->cmp32;?></span>

        <br/><br/>

        <span><?=$contract->cmp33;?></span>

        <br/><br/><br/><br/>

        <span class="dateToday <?= ($contract->date_today == '({Cidade}, {dia} de {mes} de {ano})') ? 'mark' : '' ?>"><?=$contract->date_today;?></span>

        <br/><br/><br/><br/>

        <div class="box-signature">
            <div class="singleSignature">
                _______________________________
                <span contentEditable="true" class="name_contractorL <?= ($contract->contractor_name == '(Nome do contratante)') ? 'mark' : '' ?>"><?=$contract->contractor_name;?></span>
            </div>
            <div class="singleSignature">
                _______________________________
                <span contentEditable="true" class="name_hired <?= ($contract->hired_name == '(Nome do contratado)') ? 'mark' : '' ?>">(Nome do contratado)</span>
            </div>
        </div>

    </div><!--contractSingle-->

    <!--
    <form class="formSaveContract" method="POST" action="<?=$base;?>/salvar/casamento1">
        Dê um submit nesse contrato com o js 
        <input name="contractId" type="hidden" value="<?=$contractInfo['id']?>" />    
        <input name="contractType" type="hidden" value="<?=$contractInfo['type']?>" />
        <input name="user_id" type="hidden" value="<?=$user->id?>" />
    </form>
    -->

    <textarea class="hide" id="cmp4AutoComplete"><?=$contract->cmp4;?></textarea>
    <textarea class="hide" id="hiredObligationAutoComplete"><?=$contract->hired_obligation;?></textarea>
    <textarea class="hide" id="contractObligationAutoComplete"><?=$contract->contractor_obligation;?></textarea>
    <textarea class="hide" id="cmp15AutoComplete"><?=$contract->cmp15;?></textarea>
    <textarea class="hide" id="cmp30AutoComplete"><?=$contract->cmp30;?></textarea>
    <textarea class="hide" id="cmp32AutoComplete"><?=$contract->cmp32;?></textarea>

    <script>
        var themeMode = '<?=$user->themeMode;?>';
        var mode = '<?=$contractInfo['id'];?>';
        var logo = '<?=$user->contractLogo;?>'
    </script>
    <script src="<?=$base;?>/assets/js/contracts/devweb1.js"></script>
    <script src="<?=$base;?>/assets/js/darkModeContrato.js"></script>
    <script src="<?=$base;?>/assets/js/contracts/contratoAberto.js"></script>
</body>
</html>