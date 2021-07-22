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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/contracts/wedding1.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="toggleMenu">
        <i class="fas fa-caret-square-right"></i>
    </div>

    <form class="fillMenu animate__animated">    
        
        <label class="checkBox">
            <input type="checkbox" />
            <p>Usar logo</p>
        </label>
    
        <input class="contractName" type="text" placeholder="Nome do contrato"/>
        
        <input id="sendCmp1" type="text" placeholder="Tipo de serviço [ex: Fotografia e filmagem]"/>
        
        <textarea id="sendInfoHired" placeholder="Informações do contratado, ex: pessoa fisica ou juridica, cnpj, telefone, cidade e estado "></textarea>

        <input id="sendName" type="text" placeholder="Nome do contratante"/>

        <input id="sendCpf" type="text" placeholder="Cpf do contratante"/>

        <input id="sendRg" type="text" placeholder="Rg do contratante"/>

        <input id="sendEmail" type="text" placeholder="Email do contratante"/>

        <input id="sendCell" type="text" placeholder="Celular do contratante"/>

        <input id="sendAddress" type="text" placeholder="Endereço do contratante"/>

        <input id="sendCity" type="text" placeholder="Cidade do contratante"/>

        <input id="sendBride" type="text" placeholder="Nome da noiva"/>
        
        <input id="sendEngaged" type="text" placeholder="Nome do noivo"/>

        <input type="text" placeholder="data do casamento"/>

        <input type="text" placeholder="Hora do casamento"/>

        <input type="text" placeholder="local"/>

        <textarea placeholder="Objetivos"></textarea>

        <textarea class="middleTextArea" placeholder="Preço"></textarea>

        <textarea class="middleTextArea" placeholder="Prazo"></textarea>

        <input type="text" placeholder="Garantia"/>
        
        <input type="text" placeholder="Data de hoje"/>

        <input type="text" placeholder="nome do contratado"/>

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
        As cores vermelhas são apenas referências para o modelo, quando gerar será tudo padrão (preto).
    </p>

    <div class="contractSingle">

        <div class="mainTitle">
            <span class="cmp1"><?=$contract->cmp1;?></span>
            <span class="service mark"><?=$contract->service;?></span>
            <span class="cmp2"><?=$contract->cmp2;?></span>
        </div>

        <br/><br/>

        <span class="cmp3"><?=$contract->cmp3;?></span>
        <span class="hired_info mark"><?=$contract->hired_info;?></span>
        <span class="cmp4"><?=$contract->cmp4;?></span>

        <br/><br/>

        <div class="spaceBottom2x">
            <span class="bold">Nome:</span>
            <span class="name mark marginRight1x"><?=$contract->name;?></span>
            
            <span class="bold">Cpf:</span>
            <span class="cpf mark marginRight1x"><?=$contract->cpf;?></span>

            <span class="bold">Rg:</span>
            <span class="rg mark marginRight1x"><?=$contract->rg;?></span>
        </div>

        <div class="spaceBottom2x">
            <span class="bold">E-mail:</span>
            <span class="email mark marginRight1x"><?=$contract->email;?></span>
            
            <span class="bold">Celular:</span>
            <span class="cell mark marginRight1x"><?=$contract->cell;?></span>
        </div>

        <div class="spaceBottom2x">
            <span class="bold">Endereço:</span>
            <span class="address mark marginRight1x"><?=$contract->address;?></span>
            
            <span class="bold">Cidade:</span>
            <span class="city mark marginRight1x"><?=$contract->city;?></span>
        </div>

        <div class="spaceBottom2x">
            <span class="bold">Noiva:</span>
            <span class="bride mark marginRight1x"><?=$contract->bride;?></span>
            
            <span class="bold">Noivo:</span>
            <span class="engaged mark marginRight1x"><?=$contract->engaged;?></span>
        </div>

        <h1 class="cmp5 title1"><?=$contract->cmp5;?></h1>

        <div class="spaceBottom2x">
            <span class="cmp6"><?=$contract->cmp6;?></span>
            <span class="service mark"><?=$contract->service;?></span>
            <span class="cmp7"><?=$contract->cmp7;?></span>
            <span class="bride mark"><?=$contract->bride;?></span>
            e
            <span class="engaged mark"><?=$contract->engaged;?></span>
            <span class="cmp8"><?=$contract->cmp8;?></span>
            <span class="date mark"><?=$contract->date;?></span>
            às 
            <span class="time mark"><?=$contract->time;?></span>
            <span class="place mark"><?=$contract->place;?></span>
        </div>

        <p class="cmp9 spaceBottom1x"><?=$contract->cmp9;?></p>

        <div class="goals mark spaceBottom3x"><?=$contract->goals;?></div>

        <h1 class="cmp10 title2"><?=$contract->cmp10;?></h1>

        <span class="cmp11"><?=$contract->cmp11;?></span>
        <span class="price mark"><?=$contract->price;?></span>

        <h1 class="cmp12 title2"><?=$contract->cmp12;?></h1>

        <span class="cmp13"><?=$contract->cmp13;?></span>
        <span class="deadline mark"><?=$contract->deadline;?></span>
        <span class="cmp14"><?=$contract->cmp14;?></span>

        <h1 class="cmp15 title2"><?=$contract->cmp15;?></h1>
        <span class="cmp16"><?=$contract->cmp16;?></span>

        <h1 class="cmp17 title2"><?=$contract->cmp17;?></h1>
        <span class="cmp18"><?=$contract->cmp18;?></span>
        <span class="warranty mark"><?=$contract->warranty;?></span>
        <span class="cmp19"><?=$contract->cmp19;?></span>

        <h1 class="cmp20 title2"><?=$contract->cmp20;?></h1>
        <span class="cmp21"><?=$contract->cmp21;?></span>

        <div class="box-date mark">
            <span class="date_today"><?=$contract->date_today;?></span>
        </div>

        <div class="box-signature">
            <span class="mark">
                <span class="name"><?=$contract->name;?></span>
            </span>

            <span class="mark">
                <span class="name_hired"><?=$contract->name_hired;?></span>
            </span>
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

    
    <script>var themeMode = '<?=$user->themeMode;?>';</script>
    <script src="<?=$base;?>/assets/js/contracts/wedding1.js"></script>
    <script src="<?=$base;?>/assets/js/darkModeContrato.js"></script>
    <script src="<?=$base;?>/assets/js/contracts/contratoAberto.js"></script>
</body>
</html>