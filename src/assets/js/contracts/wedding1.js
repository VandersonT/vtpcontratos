/*--------------------------------------------SAVE_CONTRACT--------------------------------------------*/
let saveContractBtn = document.querySelector('.saveContract');
var form = document.querySelector('.formSaveContract');
saveContractBtn.addEventListener('click', function(){

    let confirmAction = window.confirm('Você confirma a ação?');

    if(!confirmAction){
        return false;
    }

    //get the contractSingle class values
    let contractName = document.querySelector('.contractName').value;
    let cmp1 = document.querySelector('.cmp1').innerText;
    let service = document.querySelector('.service').innerText;
    let cmp2 = document.querySelector('.cmp2').innerText;
    let cmp3 = document.querySelector('.cmp3').innerText;
    let hiredInfo = document.querySelector('.hired_info').innerText;
    let cmp4 = document.querySelector('.cmp4').innerText;
    let name = document.querySelector('.name').innerText;
    let cpf = document.querySelector('.cpf').innerText;
    let rg = document.querySelector('.rg').innerText;
    let email = document.querySelector('.email').innerText;
    let cell = document.querySelector('.cell').innerText;
    let address = document.querySelector('.address').innerText;
    let city = document.querySelector('.city').innerText;
    let bride = document.querySelector('.bride').innerText;
    let engaged = document.querySelector('.engaged').innerText;
    let cmp5 = document.querySelector('.cmp5').innerText;
    let cmp6 = document.querySelector('.cmp6').innerText;
    let cmp7 = document.querySelector('.cmp7').innerText;
    let cmp8 = document.querySelector('.cmp8').innerText;
    let date = document.querySelector('.date').innerText;
    let time = document.querySelector('.time').innerText;
    let place = document.querySelector('.place').innerText;
    let cmp9 = document.querySelector('.cmp9').innerText;
    let goals = document.querySelector('.goals').innerText;
    let cmp10 = document.querySelector('.cmp10').innerText;
    let cmp11 = document.querySelector('.cmp11').innerText;
    let price = document.querySelector('.price').innerText;
    let cmp12 = document.querySelector('.cmp12').innerText;
    let cmp13 = document.querySelector('.cmp13').innerText;
    let deadline = document.querySelector('.deadline').innerText;
    let cmp14 = document.querySelector('.cmp14').innerText;
    let cmp15 = document.querySelector('.cmp15').innerText;
    let cmp16 = document.querySelector('.cmp16').innerText;
    let cmp17 = document.querySelector('.cmp17').innerText;
    let cmp18 = document.querySelector('.cmp18').innerText;
    let warranty = document.querySelector('.warranty').innerText;
    let cmp19 = document.querySelector('.cmp19').innerText;
    let cmp20 = document.querySelector('.cmp20').innerText;
    let cmp21 = document.querySelector('.cmp21').innerText;
    let nameHired = document.querySelector('.name_hired').innerText;
    let dateToday = document.querySelector('.date_today').innerText;

    //get the values for the form to be sent hidden
    document.querySelector('input[name=contractNameInput]').value = contractName;
    document.querySelector('input[name=cmp1Input]').value = cmp1;
    document.querySelector('input[name=serviceInput]').value = service;
    document.querySelector('input[name=cmp2Input]').value = cmp2;
    document.querySelector('input[name=cmp3Input]').value = cmp3;
    document.querySelector('input[name=hiredInfoInput]').value = hiredInfo;
    document.querySelector('input[name=cmp4Input]').value = cmp4;
    document.querySelector('input[name=nameInput]').value = name;
    document.querySelector('input[name=cpfInput]').value = cpf;
    document.querySelector('input[name=rgInput]').value = rg;
    document.querySelector('input[name=emailInput]').value = email;
    document.querySelector('input[name=cellInput]').value = cell;
    document.querySelector('input[name=addressInput]').value = address;
    document.querySelector('input[name=cityInput]').value = city;
    document.querySelector('input[name=brideInput]').value = bride;
    document.querySelector('input[name=engagedInput]').value = engaged;
    document.querySelector('input[name=cmp5Input]').value = cmp5;
    document.querySelector('input[name=cmp6Input]').value = cmp6;
    document.querySelector('input[name=cmp7Input]').value = cmp7;
    document.querySelector('input[name=cmp8Input]').value = cmp8;
    document.querySelector('input[name=dateInput]').value = date;
    document.querySelector('input[name=timeInput]').value = time;
    document.querySelector('input[name=placeInput]').value = place;
    document.querySelector('input[name=cmp9Input]').value = cmp9;
    document.querySelector('input[name=goalsInput]').value = goals;
    document.querySelector('input[name=cmp10Input]').value = cmp10;
    document.querySelector('input[name=cmp11Input]').value = cmp11;
    document.querySelector('input[name=priceInput]').value = price;
    document.querySelector('input[name=cmp12Input]').value = cmp12;
    document.querySelector('input[name=cmp13Input]').value = cmp13;
    document.querySelector('input[name=deadlineInput]').value = deadline;
    document.querySelector('input[name=cmp14Input]').value = cmp14;
    document.querySelector('input[name=cmp15Input]').value = cmp15;
    document.querySelector('input[name=cmp16Input]').value = cmp16;
    document.querySelector('input[name=cmp17Input]').value = cmp17;
    document.querySelector('input[name=cmp18Input]').value = cmp18;
    document.querySelector('input[name=warrantyInput]').value = warranty;
    document.querySelector('input[name=cmp19Input]').value = cmp19;
    document.querySelector('input[name=cmp20Input]').value = cmp20;
    document.querySelector('input[name=cmp21Input]').value = cmp21;
    document.querySelector('input[name=nameHiredInput]').value = nameHired;
    document.querySelector('input[name=dateTodayInput]').value = dateToday;

    //send info hidden
    form.submit();
})
/*--------------------------------------------------------------------------------------------------------*/

/*-------------------------------------------FROM_INPUT_TO_PAPER------------------------------------------*/
let sendCmp1 = document.getElementById('sendCmp1');
sendCmp1.addEventListener('keyup', function(){
    let services = document.querySelectorAll('.service');
    for(let i = 0; i < services.length; i++){
        if(sendCmp1.value == ''){
            services[i].innerText = '(SERVIÇOS)';
            services[i].classList.add('mark');
        }else{
            services[i].innerText = sendCmp1.value;
            services[i].classList.remove('mark');
        }
    }
})
let sendInfoHired = document.getElementById('sendInfoHired');
sendInfoHired.addEventListener('keyup', function(){
    let hiredInfos = document.querySelectorAll('.hired_info');
    for(let i = 0; i < hiredInfos.length; i++){
        if(sendInfoHired.value == ''){
            hiredInfos[i].innerText = '(Informações da pessoa ou empresa contratada)';
            hiredInfos[i].classList.add('mark');
        }else{
            hiredInfos[i].innerText = sendInfoHired.value;
            hiredInfos[i].classList.remove('mark');
        }
    }
})
let sendName = document.getElementById('sendName');
sendName.addEventListener('keyup', function(){
    let names = document.querySelectorAll('.name');
    for(let i = 0; i < names.length; i++){
        if(sendName.value == ''){
            names[i].innerText = '(Nome do Contratante)';
            names[i].classList.add('mark');
        }else{
            names[i].innerText = sendName.value;
            names[i].classList.remove('mark');
        }
    }
})
let sendCpf = document.getElementById('sendCpf');
sendCpf.addEventListener('keyup', function(){
    let cpfs = document.querySelectorAll('.cpf');
    for(let i = 0; i < cpfs.length; i++){
        if(sendCpf.value == ''){
            cpfs[i].innerText = '(Cpf do contratante)';
            cpfs[i].classList.add('mark');
        }else{
            cpfs[i].innerText = sendCpf.value;
            cpfs[i].classList.remove('mark');
        }
    }
})
let sendRg = document.getElementById('sendRg');
sendRg.addEventListener('keyup', function(){
    let rgs = document.querySelectorAll('.rg');
    for(let i = 0; i < rgs.length; i++){
        if(sendRg.value == ''){
            rgs[i].innerText = '(Rg do contratante)';
            rgs[i].classList.add('mark');
        }else{
            rgs[i].innerText = sendRg.value;
            rgs[i].classList.remove('mark');
        }
    }
})
let sendEmail = document.getElementById('sendEmail');
sendEmail.addEventListener('keyup', function(){
    let emails = document.querySelectorAll('.email');
    for(let i = 0; i < emails.length; i++){
        if(sendEmail.value == ''){
            emails[i].innerText = '(Email do contratante)';
            emails[i].classList.add('mark');
        }else{
            emails[i].innerText = sendEmail.value;
            emails[i].classList.remove('mark');
        }
    }
})
let sendCell = document.getElementById('sendCell');
sendCell.addEventListener('keyup', function(){
    let cells = document.querySelectorAll('.cell');
    for(let i = 0; i < cells.length; i++){
        if(sendCell.value == ''){
            cells[i].innerText = '(Cell do contratante)';
            cells[i].classList.add('mark');
        }else{
            cells[i].innerText = sendCell.value;
            cells[i].classList.remove('mark');
        }
    }
})
let sendAddress = document.getElementById('sendAddress');
sendAddress.addEventListener('keyup', function(){
    let addresss = document.querySelectorAll('.address');
    for(let i = 0; i < addresss.length; i++){
        if(sendAddress.value == ''){
            addresss[i].innerText = '(Endereço do contratante)';
            addresss[i].classList.add('mark');
        }else{
            addresss[i].innerText = sendAddress.value;
            addresss[i].classList.remove('mark');
        }
    }
})
let sendCity = document.getElementById('sendCity');
sendCity.addEventListener('keyup', function(){
    let citys = document.querySelectorAll('.city');
    for(let i = 0; i < citys.length; i++){
        if(sendCity.value == ''){
            citys[i].innerText = '(Cidade do contratante)';
            citys[i].classList.add('mark');
        }else{
            citys[i].innerText = sendCity.value;
            citys[i].classList.remove('mark');
        }
    }
})
let sendBride = document.getElementById('sendBride');
sendBride.addEventListener('keyup', function(){
    let brides = document.querySelectorAll('.bride');
    for(let i = 0; i < brides.length; i++){
        if(sendBride.value == ''){
            brides[i].innerText = '(Nome da noiva)';
            brides[i].classList.add('mark');
        }else{
            brides[i].innerText = sendBride.value;
            brides[i].classList.remove('mark');
        }
    }
})
let sendEngaged = document.getElementById('sendEngaged');
sendEngaged.addEventListener('keyup', function(){
    let engageds = document.querySelectorAll('.engaged');
    for(let i = 0; i < engageds.length; i++){
        if(sendEngaged.value == ''){
            engageds[i].innerText = '(Nome do Noivo)';
            engageds[i].classList.add('mark');
        }else{
            engageds[i].innerText = sendEngaged.value;
            engageds[i].classList.remove('mark');
        }
    }
})
let sendDate = document.getElementById('sendDate');
sendDate.addEventListener('keyup', function(){
    let dates = document.querySelectorAll('.date');
    for(let i = 0; i < dates.length; i++){
        if(sendDate.value == ''){
            dates[i].innerText = '(Data)';
            dates[i].classList.add('mark');
        }else{
            dates[i].innerText = sendDate.value;
            dates[i].classList.remove('mark');
        }
    }
})
let sendTime = document.getElementById('sendTime');
sendTime.addEventListener('keyup', function(){
    let times = document.querySelectorAll('.time');
    for(let i = 0; i < times.length; i++){
        if(sendTime.value == ''){
            times[i].innerText = '(Horario)';
            times[i].classList.add('mark');
        }else{
            times[i].innerText = sendTime.value;
            times[i].classList.remove('mark');
        }
    }
})
let sendPlace = document.getElementById('sendPlace');
sendPlace.addEventListener('keyup', function(){
    let places = document.querySelectorAll('.place');
    for(let i = 0; i < places.length; i++){
        if(sendPlace.value == ''){
            places[i].innerText = '(Local)';
            places[i].classList.add('mark');
        }else{
            places[i].innerText = sendPlace.value;
            places[i].classList.remove('mark');
        }
    }
})
let sendGoals = document.getElementById('sendGoals');
sendGoals.addEventListener('keyup', function(){
    let goals = document.querySelectorAll('.goals');
    for(let i = 0; i < goals.length; i++){
        if(sendGoals.value == ''){
            goals[i].innerText = '(Objetivos)';
            goals[i].classList.add('mark');
        }else{
            goals[i].innerText = sendGoals.value;
            goals[i].classList.remove('mark');
        }
    }
})
let sendPrice = document.getElementById('sendPrice');
sendPrice.addEventListener('keyup', function(){
    let prices = document.querySelectorAll('.price');
    for(let i = 0; i < prices.length; i++){
        if(sendPrice.value == ''){
            prices[i].innerText = '(Preço)';
            prices[i].classList.add('mark');
        }else{
            prices[i].innerText = sendPrice.value;
            prices[i].classList.remove('mark');
        }
    }
})
let sendDeadline = document.getElementById('sendDeadline');
sendDeadline.addEventListener('keyup', function(){
    let deadlines = document.querySelectorAll('.deadline');
    for(let i = 0; i < deadlines.length; i++){
        if(sendDeadline.value == ''){
            deadlines[i].innerText = '(Prazo)';
            deadlines[i].classList.add('mark');
        }else{
            deadlines[i].innerText = sendDeadline.value;
            deadlines[i].classList.remove('mark');
        }
    }
})
let sendWarranty = document.getElementById('sendWarranty');
sendWarranty.addEventListener('keyup', function(){
    let warrantys = document.querySelectorAll('.warranty');
    for(let i = 0; i < warrantys.length; i++){
        if(sendWarranty.value == ''){
            warrantys[i].innerText = '(Garantia)';
            warrantys[i].classList.add('mark');
        }else{
            warrantys[i].innerText = sendWarranty.value;
            warrantys[i].classList.remove('mark');
        }
    }
})
let sendDateToday = document.getElementById('sendDateToday');
sendDateToday.addEventListener('keyup', function(){
    let dateTodays = document.querySelectorAll('.date_today');
    for(let i = 0; i < dateTodays.length; i++){
        if(sendDateToday.value == ''){
            dateTodays[i].innerText = '(Data de hoje)';
            dateTodays[i].classList.add('mark');
        }else{
            dateTodays[i].innerText = sendDateToday.value;
            dateTodays[i].classList.remove('mark');
        }
    }
})
let sendNameHired = document.getElementById('sendNameHired');
sendNameHired.addEventListener('keyup', function(){
    let nameHireds = document.querySelectorAll('.name_hired');
    for(let i = 0; i < nameHireds.length; i++){
        if(sendNameHired.value == ''){
            nameHireds[i].innerText = '(Nome do Contratado)';
            nameHireds[i].classList.add('mark');
        }else{
            nameHireds[i].innerText = sendNameHired.value;
            nameHireds[i].classList.remove('mark');
        }
    }
})
/*--------------------------------------------------------------------------------------------------------*/





/*------------------------------------------AUTO_COMPLETE_WITH_SPACE--------------------------------------*/
if(mode > 1){
    let goals = document.querySelectorAll('.goals');
    
    if(sendGoals.value != ''){
        for(let i = 0; i < goals.length; i++){
            goals[i].innerText = sendGoals.value;
        }
    }
    
    let cmp16AutoComplete = document.getElementById('cmp16AutoComplete');
    let cmp16teste = document.querySelectorAll('.cmp16');
    for(let i = 0; i < cmp16teste.length; i++){
        cmp16teste[i].innerText = cmp16AutoComplete.value;
    }  
}
/*--------------------------------------------------------------------------------------------------------*/