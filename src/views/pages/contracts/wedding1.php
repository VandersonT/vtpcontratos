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
        
        <input type="text" placeholder="Tipo de serviço [ex: Fotografia e filmagem]"/>
        
        <textarea placeholder="Informações do contratado, ex: pessoa fisica ou juridica, cnpj, telefone, cidade e estado "></textarea>

        <input type="text" placeholder="Nome do contratante"/>

        <input type="text" placeholder="Cpf do contratante"/>

        <input type="text" placeholder="Rg do contratante"/>

        <input type="text" placeholder="Email do contratante"/>

        <input type="text" placeholder="Celular do contratante"/>

        <input type="text" placeholder="Endereço do contratante"/>

        <input type="text" placeholder="Cidade do contratante"/>

        <input type="text" placeholder="Nome da noiva"/>
        
        <input type="text" placeholder="Nome do noivo"/>

        <input type="text" placeholder="data do casamento"/>

        <input type="text" placeholder="Hora do casamento"/>

        <input type="text" placeholder="local"/>

        <textarea placeholder="Objetivos"></textarea>

        <textarea class="middleTextArea" placeholder="Preço"></textarea>

        <textarea class="middleTextArea" placeholder="Prazo"></textarea>

        <input type="text" placeholder="Garantia"/>

        <input type="text" placeholder="Data de hoje"/>

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
            <span class="service"><?=$contract->service;?></span>
            <span class="cmp2"><?=$contract->cmp2;?></span>
        </div>

        <br/><br/>

        <span><?=$contract->cmp3;?></span>
        <span class="mark"><?=$contract->hired_info;?></span>
        <span><?=$contract->cmp4;?></span>

        <br/><br/>

        <div class="spaceBottom2x">
            <span class="bold">Nome:</span>
            <span class="mark marginRight1x"><?=$contract->name;?></span>
            
            <span class="bold">Cpf:</span>
            <span class="mark marginRight1x"><?=$contract->cpf;?></span>

            <span class="bold">Rg:</span>
            <span class="mark marginRight1x"><?=$contract->rg;?></span>
        </div>

        <div class="spaceBottom2x">
            <span class="bold">E-mail:</span>
            <span class="mark marginRight1x"><?=$contract->email;?></span>
            
            <span class="bold">Celular:</span>
            <span class="mark marginRight1x"><?=$contract->cell;?></span>
        </div>

        <div class="spaceBottom2x">
            <span class="bold">Endereço:</span>
            <span class="mark marginRight1x"><?=$contract->address;?></span>
            
            <span class="bold">Cidade:</span>
            <span class="mark marginRight1x"><?=$contract->city;?></span>
        </div>

        <div class="spaceBottom2x">
            <span class="bold">Noiva:</span>
            <span class="mark marginRight1x"><?=$contract->bride;?></span>
            
            <span class="bold">Noivo:</span>
            <span class="mark marginRight1x"><?=$contract->engaged;?></span>
        </div>

        <h1 class="title1"><?=$contract->cmp5;?></h1>

        <div class="spaceBottom2x">
            <span><?=$contract->cmp6;?></span>
            <span class="mark"><?=$contract->service;?></span>
            para casamento de
            <span class="mark"><?=$contract->bride;?></span>
            e
            <span class="mark"><?=$contract->engaged;?></span>
            <span><?=$contract->cmp8;?></span>
            <span class="mark"><?=$contract->date;?></span>
            às 
            <span class="mark"><?=$contract->time;?></span>
            <span class="mark"><?=$contract->place;?></span>
        </div>

        <p class="spaceBottom1x"><?=$contract->cmp9;?></p>

        <div class="goals mark spaceBottom3x"><?=$contract->goals;?></div>

        <h1 class="title2"><?=$contract->cmp10;?></h1>

        <span><?=$contract->cmp11;?></span>
        <span class="mark"><?=$contract->price;?></span>

        <h1 class="title2"><?=$contract->cmp12;?></h1>

        <span><?=$contract->cmp13;?></span>
        <span class="mark"><?=$contract->deadline;?></span>
        <span><?=$contract->cmp14;?></span>

        <h1 class="title2"><?=$contract->cmp15;?></h1>
        <span><?=$contract->cmp16;?></span>

        <h1 class="title2"><?=$contract->cmp17;?></h1>
        <span><?=$contract->cmp18;?></span>
        <span class="mark"><?=$contract->warranty;?></span>
        <span><?=$contract->cmp19;?></span>

        <h1 class="title2"><?=$contract->cmp20;?></h1>
        <span><?=$contract->cmp21;?></span>

        <div class="box-date mark">
            <?=$contract->date_today;?>
        </div>

        <div class="box-signature">
            <span class="mark">
                <?=$contract->name_hired;?>
            </span>

            <span class="mark">
                <?=$contract->name;?>
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
    </form>

    
    <script>var themeMode = '<?=$user->themeMode;?>';</script>
    <script src="<?=$base;?>/assets/js/contracts/wedding1.js"></script>
    <script src="<?=$base;?>/assets/js/darkModeContrato.js"></script>
    <script src="<?=$base;?>/assets/js/contracts/contratoAberto.js"></script>
</body>
</html>