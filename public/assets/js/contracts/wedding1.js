/*--------------------------------------------SAVE_CONTRACT--------------------------------------------*/
let saveContractBtn = document.querySelector('.saveContract');
var form = document.querySelector('.formSaveContract');
saveContractBtn.addEventListener('click', function(){
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
        services[i].innerText = sendCmp1.value;
    }
})
let sendInfoHired = document.getElementById('sendInfoHired');
sendInfoHired.addEventListener('keyup', function(){
    let hiredInfos = document.querySelectorAll('.hired_info');
    for(let i = 0; i < hiredInfos.length; i++){
        hiredInfos[i].innerText = sendInfoHired.value;
    }
})
let sendName = document.getElementById('sendName');
sendName.addEventListener('keyup', function(){
    let names = document.querySelectorAll('.name');
    for(let i = 0; i < names.length; i++){
        names[i].innerText = sendName.value;
    }
})
let sendCpf = document.getElementById('sendCpf');
sendCpf.addEventListener('keyup', function(){
    let cpfs = document.querySelectorAll('.cpf');
    for(let i = 0; i < cpfs.length; i++){
        cpfs[i].innerText = sendCpf.value;
    }
})
let sendRg = document.getElementById('sendRg');
sendRg.addEventListener('keyup', function(){
    let rgs = document.querySelectorAll('.rg');
    for(let i = 0; i < rgs.length; i++){
        rgs[i].innerText = sendRg.value;
    }
})
let sendEmail = document.getElementById('sendEmail');
sendEmail.addEventListener('keyup', function(){
    let emails = document.querySelectorAll('.email');
    for(let i = 0; i < emails.length; i++){
        emails[i].innerText = sendEmail.value;
    }
})
let sendCell = document.getElementById('sendCell');
sendCell.addEventListener('keyup', function(){
    let cells = document.querySelectorAll('.cell');
    for(let i = 0; i < cells.length; i++){
        cells[i].innerText = sendCell.value;
    }
})
let sendAddress = document.getElementById('sendAddress');
sendAddress.addEventListener('keyup', function(){
    let addresss = document.querySelectorAll('.address');
    for(let i = 0; i < addresss.length; i++){
        addresss[i].innerText = sendAddress.value;
    }
})
let sendCity = document.getElementById('sendCity');
sendCity.addEventListener('keyup', function(){
    let citys = document.querySelectorAll('.city');
    for(let i = 0; i < citys.length; i++){
        citys[i].innerText = sendCity.value;
    }
})
let sendBride = document.getElementById('sendBride');
sendBride.addEventListener('keyup', function(){
    let brides = document.querySelectorAll('.bride');
    for(let i = 0; i < brides.length; i++){
        brides[i].innerText = sendBride.value;
    }
})
let sendEngaged = document.getElementById('sendEngaged');
sendEngaged.addEventListener('keyup', function(){
    let engageds = document.querySelectorAll('.engaged');
    for(let i = 0; i < engageds.length; i++){
        engageds[i].innerText = sendEngaged.value;
    }
})
/*--------------------------------------------------------------------------------------------------------*/