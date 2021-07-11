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
    <link rel="stylesheet" href="<?=$base;?>/assets/css/contratoAbertoBase.css" />
    <link rel="stylesheet" href="<?=$base;?>/assets/css/contracts/weddings/casamento1.css" />

    <script src="https://kit.fontawesome.com/90bf9437da.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="box-contract">
        
        <div class="fillMenuClose"><i class="fas fa-caret-square-down"></i></div>
        <div class="fillMenuOpen"><i class="fas fa-caret-square-down"></i></div>
        
        <form class="fillMenu animate__animated">
            <input class="inputService" type="text" placeholder="Serviços (ex: Fotografi|Filmagem etc)" />
            <input class="inputInfoHired" type="text" placeholder="Informações do contratado" />
            <input class="inputContractorName" type="text" placeholder="Nome do contratante" />
            <input class="inputContractorCpf" type="text" placeholder="Cpf do contratante" />
            <input class="inputContractorRg" type="text" placeholder="Rg do contratante" />
            <input class="inputContractorEmail" type="text" placeholder="E-mail do contratante" />
            <input class="inputContractorCell" type="text" placeholder="Celular do contratante" />
            <input class="inputContractorAddress" type="text" placeholder="Endereço do contratante" />
            <input class="inputContractorCity" type="text" placeholder="Cidade do contratante" />
            <input class="inputBride" type="text" placeholder="Nome da noiva" />
            <input class="inputEngaged" type="text" placeholder="Nome do noivo" />
            <input class="inputDate" type="text" placeholder="Data do casamento" />
            <input class="inputTime" type="text" placeholder="Horario do casamento" />
            <input class="inputPlace" type="text" placeholder="Local do contrato" />
            <textarea class="inputGoals" placeholder="Objetivos do contrato"></textarea>
            <input class="inputPrice" type="text" placeholder="Preço" />
            <input class="inputDeadline" type="text" placeholder="Prazo" />
            <input class="inputWarranty" type="text" placeholder="Garantia" />
            <input class="inputDateToday" type="text" placeholder="Data de hoje" />
            <input class="inputNameHired" type="text" placeholder="Nome do contratado" />
            <button class="generateBtn">Gerar</button>
        </form>
        <div class="box-contractSingle">
            <div class="barMenu">
                <a href="javascript:history.go(-1)" class="btnContract return">
                    Voltar
                </a>
                <a href="#" class="setFavorite">
                    <i style="color: red;" class="fas fa-star"></i>
                    Favorito
                </a>
                <a class="btnContract saveContract">
                    <?= $idContract > 1 ? 'Editar' : 'Salvar'?>
                </a>
            </div>
            
            <p class="warning">
                <i class="fas fa-exclamation-triangle"></i>
                As cores vermelhas são apenas referências para o modelo, quando gerar será tudo padrão (preto).
            </p>
            
            <div class="contractSingle">
                
                <div contentEditable="true" class="box-mainTitle">
                    <span class="cmp1"><?=$contract->cmp1;?></span>
                    <span class="service mark"><?=$contract->service;?></span>
                    <span class="cmp2"><?=$contract->cmp2;?><span>
                </div>

                <div contentEditable="true" class="introduction">
                    <span class="cmp3"><?=$contract->cmp3;?></span>
                    <span class="hired_info mark"><?=$contract->hired_info;?></span>
                    <span class="cmp4"><?=$contract->cmp4;?></span>
                </div>

                <div class="info_contractor">
                    <div class="line">
                        <span class="bold">Nome: </span>
                        <span contentEditable="true" class="name mark"><?=$contract->name;?></span>
                        <span class="bold spaceLeft" >Cpf: </span>
                        <span contentEditable="true" class="cpf mark"><?=$contract->cpf;?></span>
                        <span class="bold spaceLeft">Rg: </span>
                        <span contentEditable="true" class="rg mark"><?=$contract->rg;?></span>
                    </div>

                    <div class="line">
                        <span class="bold">E-mail: </span>
                        <span contentEditable="true" class="email mark"><?=$contract->email;?></span>
                        <span class="bold spaceLeft">Celular: </span>
                        <span contentEditable="true" class="cell mark"><?=$contract->cell;?></span>
                    </div>

                    <div class="line">
                        <span class="bold">Endereço: </span>
                        <span contentEditable="true" class="address mark"><?=$contract->address;?></span>
                        <span class="bold spaceLeft">Cidade: </span>
                        <span contentEditable="true" class="city mark"><?=$contract->city;?></span>
                    </div>

                    <div class="line">
                        <span class="bold" contentEditable="false">Noiva: </span>
                        <span contentEditable="true" class="bride mark"><?=$contract->bride;?></span>
                        <span class="bold spaceLeft" contentEditable="false">Noivo: </span>
                        <span contentEditable="true" class="engaged mark"><?=$contract->engaged;?></span>
                    </div>
                </div>

                <br/>

                <div>
                    <h3 contentEditable="true" class="cmp5"><?=$contract->cmp5;?></h3>
                    <span contentEditable="true" class="cmp6"><?=$contract->cmp6;?></span>
                    <span contentEditable="true" class="service mark"><?=$contract->service;?></span>
                    <span contentEditable="true" class="cmp7"><?=$contract->cmp7;?></span>
                    <span contentEditable="true" class="bride mark"><?=$contract->bride;?></span>
                    e
                    <span contentEditable="true" class="engaged mark"><?=$contract->engaged;?></span>
                    <span contentEditable="true" class="cmp8"><?=$contract->cmp8;?></span>
                    <span contentEditable="true" class="date mark"><?=$contract->date;?></span>
                    às 
                    <span contentEditable="true" class="time mark"><?=$contract->time;?></span>
                    horas
                    <span contentEditable="true" class="place mark"><?=$contract->place;?></span>
                    .
                </div>

                <br/><br/>

                <div contentEditable="true">
                    <p class="cmp9"><?=$contract->cmp9;?></p>
                    <p class="goals line mark"><?=$contract->goals;?></p>
                </div>

                <br/>

                <div  contentEditable="true">
                    <p class="cmp10 bold"><?=$contract->cmp10;?></p>
                    <span class="cmp11"><?=$contract->cmp11;?></span>
                    <span class="price mark"><?=$contract->price;?></span>
                </div>

                <br/>

                <div contentEditable="true">
                    <p class="cmp12 bold"><?=$contract->cmp12;?></p>
                    <span class="cmp13"><?=$contract->cmp13;?></span>
                    <span class="deadline mark"><?=$contract->deadline;?></span>
                    <span class="cmp14"><?=$contract->cmp14;?></span>
                </div>

                <br/>

                <div contentEditable="true">
                    <p class="cmp15 bold"><?=$contract->cmp15;?></p>
                    <span class="cmp16"><?=$contract->cmp16;?></span>
                </div>

                <br/>

                <div contentEditable="true">
                    <p class="cmp17 bold"><?=$contract->cmp17;?></p>
                    <span class="cmp18"><?=$contract->cmp18;?></span>
                    <span class="warranty mark"><?=$contract->warranty;?></span>
                    <span class="cmp19"><?=$contract->cmp19;?></span>
                </div>

                <br/>

                <div contentEditable="true">
                    <p class="cmp20 bold"><?=$contract->cmp20;?></p>
                    <span class="cmp21"><?=$contract->cmp21;?></span>
                </div>

                <div class="date_today date mark">
                    <?=$contract->date_today;?>
                </div>

                <div class="box-signature">
                    <div class="signature_hired">
                        <p>______________________________</p>
                        <p contentEditable="true" class="name_hired mark"><?=$contract->name_hired;?></p>
                    </div>
                    <div class="signature_contractor">
                        <p>______________________________</p>
                        <p contentEditable="true" class="name mark"><?=$contract->name;?></p>
                    </div>
                </div>

            </div><!--contractSingle-->
        </div>
    </section>

    
    <div id="toPrint">
        
        <div class="box-mainTitle">
            <span class="cmp1"><?=$contract->cmp1;?></span>
            <span class="service"><?=$contract->service;?></span>
            <span class="cmp2"><?=$contract->cmp2;?><span>
        </div>

        <div class="introduction">
            <span class="cmp3"><?=$contract->cmp3;?></span>
            <span class="hired_info"><?=$contract->hired_info;?></span>
            <span class="cmp4"><?=$contract->cmp4;?></span>
        </div>

        <div class="info_contractor">
            <div class="line">
                <span class="bold">Nome: </span>
                <span class="name"><?=$contract->name;?></span>
                <span class="bold spaceLeft" >Cpf: </span>
                <span class="cpf"><?=$contract->cpf;?></span>
                <span class="bold spaceLeft">Rg: </span>
                <span class="rg"><?=$contract->rg;?></span>
            </div>

            <div class="line">
                <span class="bold">E-mail: </span>
                <span class="email"><?=$contract->email;?></span>
                <span class="bold spaceLeft">Celular: </span>
                <span class="cell"><?=$contract->cell;?></span>
            </div>

            <div class="line">
                <span class="bold">Endereço: </span>
                <span class="address"><?=$contract->address;?></span>
                <span class="bold spaceLeft">Cidade: </span>
                <span class="city"><?=$contract->city;?></span>
            </div>

            <div class="line">
                <span class="bold" contentEditable="false">Noiva: </span>
                <span class="bride"><?=$contract->bride;?></span>
                <span class="bold spaceLeft" contentEditable="false">Noivo: </span>
                <span class="engaged"><?=$contract->engaged;?></span>
            </div>
        </div>

        <br/>

        <div>
            <h3 class="cmp5"><?=$contract->cmp5;?></h3>
            <span class="cmp6"><?=$contract->cmp6;?></span>
            <span class="service"><?=$contract->service;?></span>
            <span class="cmp7"><?=$contract->cmp7;?></span>
            <span class="bride"><?=$contract->bride;?></span>
            e
            <span class="engaged"><?=$contract->engaged;?></span>
            <span class="cmp8"><?=$contract->cmp8;?></span>
            <span class="date"><?=$contract->date;?></span>
            às 
            <span class="time"><?=$contract->time;?></span>
            horas
            <span class="place"><?=$contract->place;?></span>
            .
        </div>

        <br/><br/>

        <div>
            <p class="cmp9"><?=$contract->cmp9;?></p>
            <p class="goals line"><?=$contract->goals;?></p>
        </div>

        <br/>

        <div>
            <p class="cmp10 bold"><?=$contract->cmp10;?></p>
            <span class="cmp11"><?=$contract->cmp11;?></span>
            <span class="price"><?=$contract->price;?></span>
        </div>

        <br/>

        <div>
            <p class="cmp12 bold"><?=$contract->cmp12;?></p>
            <span class="cmp13"><?=$contract->cmp13;?></span>
            <span class="deadline"><?=$contract->deadline;?></span>
            <span class="cmp14"><?=$contract->cmp14;?></span>
        </div>

        <br/>

        <div>
            <p class="cmp15 bold"><?=$contract->cmp15;?></p>
            <span class="cmp16"><?=$contract->cmp16;?></span>
        </div>

        <br/>

        <div>
            <p class="cmp17 bold"><?=$contract->cmp17;?></p>
            <span class="cmp18"><?=$contract->cmp18;?></span>
            <span class="warranty"><?=$contract->warranty;?></span>
            <span class="cmp19"><?=$contract->cmp19;?></span>
        </div>

        <br/>

        <div>
            <p class="cmp20 bold"><?=$contract->cmp20;?></p>
            <span class="cmp21"><?=$contract->cmp21;?></span>
        </div>

        <div class="date_today date">
            <?=$contract->date_today;?>
        </div>

        <div class="box-signature">
            <div class="signature_hired">
                <p>______________________________</p>
                <p class="name_hired"><?=$contract->name_hired;?></p>
            </div>
            <div class="signature_contractor">
                <p>______________________________</p>
                <p class="name"><?=$contract->name;?></p>
            </div>
        </div>

    </div><!--toPrint-->


    <form class="formSaveContract" method="POST" action="<?=$base;?>/salvar/casamento1">
        <input type="hidden" name="idContract" value="<?=$idContract;?>"/>
        <input class="contractName" type="hidden" name="contractName"/>
        <input class="action" type="hidden" name="action" />
        <input class="cmp1" type="hidden" name="cmp1" />
        <input class="service" type="hidden" name="service" />
        <input class="cmp2" type="hidden" name="cmp2" />
        <input class="cmp3" type="hidden" name="cmp3" />
        <input class="hired_info" type="hidden" name="hired_info" />
        <input class="cmp4" type="hidden" name="cmp4" />
        <input class="name" type="hidden" name="name" />
        <input class="cpf" type="hidden" name="cpf" />
        <input class="rg" type="hidden" name="rg" />
        <input class="email" type="hidden" name="email" />
        <input class="cell" type="hidden" name="cell" />
        <input class="address" type="hidden" name="address" />
        <input class="city" type="hidden" name="city" />
        <input class="bride" type="hidden" name="bride" />
        <input class="engaged" type="hidden" name="engaged" />
        <input class="cmp5" type="hidden" name="cmp5" />
        <input class="cmp6" type="hidden" name="cmp6" />
        <input class="cmp7" type="hidden" name="cmp7" />
        <input class="cmp8" type="hidden" name="cmp8" />
        <input class="date" type="hidden" name="date" />
        <input class="time" type="hidden" name="time" />
        <input class="place" type="hidden" name="place" />
        <input class="cmp9" type="hidden" name="cmp9" />
        <input class="goals" type="hidden" name="goals" />
        <input class="cmp10" type="hidden" name="cmp10" />
        <input class="cmp11" type="hidden" name="cmp11" />
        <input class="price" type="hidden" name="price" />
        <input class="cmp12" type="hidden" name="cmp12" />
        <input class="cmp13" type="hidden" name="cmp13" />
        <input class="deadline" type="hidden" name="deadline" />
        <input class="cmp14" type="hidden" name="cmp14" />
        <input class="cmp15" type="hidden" name="cmp15" />
        <input class="cmp16" type="hidden" name="cmp16" />
        <input class="cmp17" type="hidden" name="cmp17" />
        <input class="cmp18" type="hidden" name="cmp18" />
        <input class="warranty" type="hidden" name="warranty" />
        <input class="cmp19" type="hidden" name="cmp19" />
        <input class="cmp20" type="hidden" name="cmp20" />
        <input class="cmp21" type="hidden" name="cmp21" />
        <input class="name_hired" type="hidden" name="name_hired" />
        <input class="date_today" type="hidden" name="date_today" />
    </form>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="<?=$base;?>/assets/js/contracts/weddings/casamento1.js"></script>
    <script src="<?=$base;?>/assets/js/darkModeContrato.js"></script>
    <script src="<?=$base;?>/assets/js/contratoAberto.js"></script>
</body>
</html>