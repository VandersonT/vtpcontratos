/*---------------------------------------------SAVE_CONTRACT----------------------------------------------*/
let saveContractBtn = document.querySelector('.saveContract');
var form = document.querySelector('.formSaveContract');
saveContractBtn.addEventListener('click', function(){
    let confirmAction = window.confirm('Você confirma a ação?');

    if(!confirmAction){
        return false;
    }

    //get the contractSingle class values
    let contractName = document.querySelector('.contractName').value;
    let title = document.querySelector('.title').innerText;
    let cmp1 = document.querySelector('.cmp1').innerText;
    let cmp2 = document.querySelector('.cmp2').innerText;
    let titleInfoHired = document.querySelector('.titleInfoHired').innerText;
    let infoHired = document.querySelector('.info_hired').innerText;
    let titleInfoContractor = document.querySelector('.titleInfoContractor').innerText;
    let infoContractor = document.querySelector('.info_contractor').innerText;
    let cmp3 = document.querySelector('.cmp3').innerText;
    let cmp4 = document.querySelector('.cmp4').innerText;
    let cmp4aTitle = document.querySelector('.cmp4aTitle').innerText;
    let cmp4aContent = document.querySelector('.cmp4aContent').innerText;
    let cmp5 = document.querySelector('.cmp5').innerText;
    let cmp6 = document.querySelector('.cmp6').innerText;
    let nameContractor = document.querySelector('.name_contractor').innerText;
    let cmp7 = document.querySelector('.cmp7').innerText;
    let aboutProduct = document.querySelector('.about_product').innerText;
    let cmp10 = document.querySelector('.cmp10').innerText;
    let cmp11 = document.querySelector('.cmp11').innerText;
    let hiredObligation = document.querySelector('.hired_obligation').innerText;
    let cmp12 = document.querySelector('.cmp12').innerText;
    let contractorObligation = document.querySelector('.contractor_obligation').innerText;
    let cmp13 = document.querySelector('.cmp13').innerText;
    let cmp14 = document.querySelector('.cmp14').innerText;
    let deadline = document.querySelector('.deadline').innerText;
    let cmp15 = document.querySelector('.cmp15').innerText;
    let cmp16 = document.querySelector('.cmp16').innerText;
    let cmp17 = document.querySelector('.cmp17').innerText;
    let cmp18 = document.querySelector('.cmp18').innerText;
    let cmp19 = document.querySelector('.cmp19').innerText;
    let cmp20 = document.querySelector('.cmp20').innerText;
    let cmp21 = document.querySelector('.cmp21').innerText;
    let cmp22 = document.querySelector('.cmp22').innerText;
    let cmp23 = document.querySelector('.cmp23').innerText;
    let cmp24 = document.querySelector('.cmp24').innerText;
    let cmp25 = document.querySelector('.cmp25').innerText;
    let warranty = document.querySelector('.warranty').innerText;
    let cmp26 = document.querySelector('.cmp26').innerText;
    let cmp27 = document.querySelector('.cmp27').innerText;
    let cmp28 = document.querySelector('.cmp28').innerText;
    let price = document.querySelector('.price').innerText;
    let installments = document.querySelector('.installments').innerText;
    let dividedIn = document.querySelector('.divided_in').innerText;
    let cmp29 = document.querySelector('.cmp29').innerText;
    let cmp30 = document.querySelector('.cmp30').innerText;
    let cmp31 = document.querySelector('.cmp31').innerText;
    let cmp32 = document.querySelector('.cmp32').innerText;
    let cmp33 = document.querySelector('.cmp33').innerText;
    let dateToday = document.querySelector('.dateToday').innerText;
    let nameContractorL = document.querySelector('.name_contractorL').innerText;
    let nameHired = document.querySelector('.name_hired').innerText;

    //get the values for the form to be sent hidden
    document.querySelector('input[name=contractNameInput]').value = contractName;
    document.querySelector('input[name=titleInput]').value = title;
    document.querySelector('input[name=cmp1Input]').value = cmp1;
    document.querySelector('input[name=cmp2Input]').value = cmp2;
    document.querySelector('input[name=titleInfoHiredInput]').value = titleInfoHired;
    document.querySelector('input[name=infoHiredInput]').value = infoHired;
    document.querySelector('input[name=titleInfoContractorInput]').value = titleInfoContractor;
    document.querySelector('input[name=infoContractorInput]').value = infoContractor;
    document.querySelector('input[name=cmp3Input]').value = cmp3;
    document.querySelector('input[name=cmp4Input]').value = cmp4;
    document.querySelector('input[name=cmp4aTitleInput]').value = cmp4aTitle;
    document.querySelector('input[name=cmp4aContentInput]').value = cmp4aContent;
    document.querySelector('input[name=cmp5Input]').value = cmp5;
    document.querySelector('input[name=cmp6Input]').value = cmp6;
    document.querySelector('input[name=nameContractorInput]').value = nameContractor;
    document.querySelector('input[name=cmp7Input]').value = cmp7;
    document.querySelector('input[name=aboutProductInput]').value = aboutProduct;
    document.querySelector('input[name=cmp10Input]').value = cmp10;
    document.querySelector('input[name=cmp11Input]').value = cmp11;
    document.querySelector('input[name=hiredObligationInput]').value = hiredObligation;
    document.querySelector('input[name=cmp12Input]').value = cmp12;
    document.querySelector('input[name=contractorObligationInput]').value = contractorObligation;
    document.querySelector('input[name=cmp13Input]').value = cmp13;
    document.querySelector('input[name=cmp14Input]').value = cmp14;
    document.querySelector('input[name=deadlineInput]').value = deadline;
    document.querySelector('input[name=cmp15Input]').value = cmp15;
    document.querySelector('input[name=cmp16Input]').value = cmp16;
    document.querySelector('input[name=cmp17Input]').value = cmp17;
    document.querySelector('input[name=cmp18Input]').value = cmp18;
    document.querySelector('input[name=cmp19Input]').value = cmp19;
    document.querySelector('input[name=cmp20Input]').value = cmp20;
    document.querySelector('input[name=cmp21Input]').value = cmp21;
    document.querySelector('input[name=cmp22Input]').value = cmp22;
    document.querySelector('input[name=cmp23Input]').value = cmp23;
    document.querySelector('input[name=cmp24Input]').value = cmp24;
    document.querySelector('input[name=cmp25Input]').value = cmp25;
    document.querySelector('input[name=warrantyInput]').value = warranty;
    document.querySelector('input[name=cmp26Input]').value = cmp26;
    document.querySelector('input[name=cmp27Input]').value = cmp27;
    document.querySelector('input[name=cmp28Input]').value = cmp28;
    document.querySelector('input[name=priceInput]').value = price;
    document.querySelector('input[name=installmentsInput]').value = installments;
    document.querySelector('input[name=dividedInInput]').value = dividedIn;
    document.querySelector('input[name=cmp29Input]').value = cmp29;
    document.querySelector('input[name=cmp30Input]').value = cmp30;
    document.querySelector('input[name=cmp31Input]').value = cmp31;
    document.querySelector('input[name=cmp32Input]').value = cmp32;
    document.querySelector('input[name=cmp33Input]').value = cmp33;
    document.querySelector('input[name=dateTodayInput]').value = dateToday;
    document.querySelector('input[name=hiredNameInput]').value = nameHired;
    document.querySelector('input[name=contractorNameInput]').value = nameContractorL;

    //send info hidden
    form.submit();

})
/*--------------------------------------------------------------------------------------------------------*/

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