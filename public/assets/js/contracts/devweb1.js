/*-------------------------------------------FROM_INPUT_TO_PAPER------------------------------------------*/
let sendInfoHired = document.getElementById('inputInfoHired');
sendInfoHired.addEventListener('keyup', function(){
    let info_hired = document.querySelectorAll('.info_hired');
    for(let i = 0; i < info_hired.length; i++){
        if(sendInfoHired.value == ''){
            info_hired[i].innerText = '(Informações do contratado)';
            info_hired[i].classList.add('mark');
        }else{
            info_hired[i].innerText = sendInfoHired.value;
            info_hired[i].classList.remove('mark');
        }
    }
})

let inputInfoContractor = document.getElementById('inputInfoContractor');
inputInfoContractor.addEventListener('keyup', function(){
    let info_contractor = document.querySelectorAll('.info_contractor');
    for(let i = 0; i < info_contractor.length; i++){
        if(inputInfoContractor.value == ''){
            info_contractor[i].innerText = '(Informações da pessoa ou empresa contratante)';
            info_contractor[i].classList.add('mark');
        }else{
            info_contractor[i].innerText = inputInfoContractor.value;
            info_contractor[i].classList.remove('mark');
        }
    }
})

let inputNameCompany = document.getElementById('inputNameCompany');
inputNameCompany.addEventListener('keyup', function(){
    let nameContractor = document.querySelectorAll('.name_contractor');
    for(let i = 0; i < nameContractor.length; i++){
        if(inputNameCompany.value == ''){
            nameContractor[i].innerText = '(Nome da empresa/pessoa contratante)';
            nameContractor[i].classList.add('mark');
        }else{
            nameContractor[i].innerText = inputNameCompany.value;
            nameContractor[i].classList.remove('mark');
        }
    }
})

let inputAboutProduct = document.getElementById('inputAboutProduct');
inputAboutProduct.addEventListener('keyup', function(){
    let aboutProduct = document.querySelectorAll('.about_product');
    for(let i = 0; i < aboutProduct.length; i++){
        if(inputAboutProduct.value == ''){
            aboutProduct[i].innerText = '(Sobre o Produto)';
            aboutProduct[i].classList.add('mark');
        }else{
            aboutProduct[i].innerText = inputAboutProduct.value;
            aboutProduct[i].classList.remove('mark');
        }
    }
})

let inputDeadline = document.getElementById('inputDeadline');
inputDeadline.addEventListener('keyup', function(){
    let deadline = document.querySelectorAll('.deadline');
    for(let i = 0; i < deadline.length; i++){
        if(inputDeadline.value == ''){
            deadline[i].innerText = '(Prazo)';
            deadline[i].classList.add('mark');
        }else{
            deadline[i].innerText = inputDeadline.value;
            deadline[i].classList.remove('mark');
        }
    }
})

let inputWarranty = document.getElementById('inputWarranty');
inputWarranty.addEventListener('keyup', function(){
    let warranty = document.querySelectorAll('.warranty');
    for(let i = 0; i < warranty.length; i++){
        if(inputWarranty.value == ''){
            warranty[i].innerText = '(Garantia)';
            warranty[i].classList.add('mark');
        }else{
            warranty[i].innerText = inputWarranty.value;
            warranty[i].classList.remove('mark');
        }
    }
})

let inputPrice = document.getElementById('inputPrice');
inputPrice.addEventListener('keyup', function(){
    let price = document.querySelectorAll('.price');
    for(let i = 0; i < price.length; i++){
        if(inputPrice.value == ''){
            price[i].innerText = '(Preço)';
            price[i].classList.add('mark');
        }else{
            price[i].innerText = inputPrice.value;
            price[i].classList.remove('mark');
        }
    }
})

let inputInstallments = document.getElementById('inputInstallments');
inputInstallments.addEventListener('keyup', function(){
    let installments = document.querySelectorAll('.installments');
    for(let i = 0; i < installments.length; i++){
        if(inputInstallments.value == ''){
            installments[i].innerText = '(Parcelas)';
            installments[i].classList.add('mark');
        }else{
            installments[i].innerText = inputInstallments.value;
            installments[i].classList.remove('mark');
        }
    }
})

let inputDivided = document.getElementById('inputDivided');
inputDivided.addEventListener('keyup', function(){
    let dividedIn = document.querySelectorAll('.divided_in');
    for(let i = 0; i < dividedIn.length; i++){
        if(inputDivided.value == ''){
            dividedIn[i].innerText = '(Dividido em)';
            dividedIn[i].classList.add('mark');
        }else{
            dividedIn[i].innerText = inputDivided.value;
            dividedIn[i].classList.remove('mark');
        }
    }
})

let inputDateToday = document.getElementById('inputDateToday');
inputDateToday.addEventListener('keyup', function(){
    let dateToday = document.querySelectorAll('.dateToday');
    for(let i = 0; i < dateToday.length; i++){
        if(inputDateToday.value == ''){
            dateToday[i].innerText = '({Cidade}, {dia} de {mes} de {ano})';
            dateToday[i].classList.add('mark');
        }else{
            dateToday[i].innerText = inputDateToday.value;
            dateToday[i].classList.remove('mark');
        }
    }
})

let inputNameContractorL = document.getElementById('inputNameContractor');
inputNameContractorL.addEventListener('keyup', function(){
    let nameContractorL = document.querySelectorAll('.name_contractorL');
    for(let i = 0; i < nameContractorL.length; i++){
        if(inputNameContractorL.value == ''){
            nameContractorL[i].innerText = '(Nome do contratante)';
            nameContractorL[i].classList.add('mark');
        }else{
            nameContractorL[i].innerText = inputNameContractorL.value;
            nameContractorL[i].classList.remove('mark');
        }
    }
})

let inputNameHired = document.getElementById('inputNameHired');
inputNameHired.addEventListener('keyup', function(){
    let nameHired = document.querySelectorAll('.name_hired');
    for(let i = 0; i < nameHired.length; i++){
        if(inputNameHired.value == ''){
            nameHired[i].innerText = '(Nome do contratado)';
            nameHired[i].classList.add('mark');
        }else{
            nameHired[i].innerText = inputNameHired.value;
            nameHired[i].classList.remove('mark');
        }
    }
})
/*--------------------------------------------------------------------------------------------------------*/




/*------------------------------------------AUTO_COMPLETE_WITH_SPACE--------------------------------------*/
    let cmp4AutoComplete = document.getElementById('cmp4AutoComplete');
    let cmp4teste = document.querySelectorAll('.cmp4');
    for(let i = 0; i < cmp4teste.length; i++){
        cmp4teste[i].innerText = cmp4AutoComplete.value;
    }

    let hiredObligationAutoComplete = document.getElementById('hiredObligationAutoComplete');
    let hiredObligation = document.querySelectorAll('.hired_obligation');
    for(let i = 0; i < hiredObligation.length; i++){
        hiredObligation[i].innerText = hiredObligationAutoComplete.value;
    }

    let contractObligationAutoComplete = document.getElementById('contractObligationAutoComplete');
    let contractorObligation = document.querySelectorAll('.contractor_obligation');
    for(let i = 0; i < contractorObligation.length; i++){
        contractorObligation[i].innerText = contractObligationAutoComplete.value;
    }

    let cmp15AutoComplete = document.getElementById('cmp15AutoComplete');
    let cmp15 = document.querySelectorAll('.cmp15');
    for(let i = 0; i < cmp15.length; i++){
        cmp15[i].innerText = cmp15AutoComplete.value;
    }

    let cmp30AutoComplete = document.getElementById('cmp30AutoComplete');
    let cmp30 = document.querySelectorAll('.cmp30');
    for(let i = 0; i < cmp30.length; i++){
        cmp30[i].innerText = cmp30AutoComplete.value;
    }

    let cmp32AutoComplete = document.getElementById('cmp32AutoComplete');
    let cmp32 = document.querySelectorAll('.cmp32');
    for(let i = 0; i < cmp32.length; i++){
        cmp32[i].innerText = cmp32AutoComplete.value;
    }
/*--------------------------------------------------------------------------------------------------------*/