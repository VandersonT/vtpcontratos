/*------------------------------------------GENERATE-CONTRACT-----------------------------------------------------*/
let generateBtn = document.querySelector('.generateBtn');
generateBtn.addEventListener('click',function(e){
    e.preventDefault();
    print();
})
/*---------------------------------------------------------------------------------------------------------------*/

/*---------------------------------------------SAVE-CONTRACT-----------------------------------------------------*/
/*Form*/
let btnSubmit = document.querySelector('.saveContract');
let contractForm = document.querySelector('.formSaveContract');


btnSubmit.addEventListener("click", function(){

    let contractName = '';
    while(contractName == ''){
        contractName = window.prompt("Digite o nome do contrato!");
        
        if(contractName == ''){
            alert("É obrigatorio colocar um nome para o contrato.");
        }
        if(contractName.length > 30){
            alert("O nome é muito grande, digite um menor.");
            contractName = '';
        }
    }

    let confirm = window.confirm('Quer realmente salvar o contrato:'+contractName);
    
    if(!confirm){
        return false;
    }

    /*fields*/
    let cmp1 = document.querySelector('.cmp1').innerText;
    let service = document.querySelector('.service').innerText;
    let cmp2 = document.querySelector('.cmp2').innerText;
    let cmp3 = document.querySelector('.cmp3').innerText;
    let hired_info = document.querySelector('.hired_info').innerText;
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
    let name_hired = document.querySelector('.name_hired').innerText;
    let date_today = document.querySelector('.date_today').innerText;

    /*writing the values in inputs*/
    contractForm.querySelector('input[name=contractName]').value = contractName;
    contractForm.querySelector('input[name=cmp1]').value = cmp1;
    contractForm.querySelector('input[name=service]').value = service;
    contractForm.querySelector('input[name=cmp2]').value = cmp2;
    contractForm.querySelector('input[name=cmp3]').value = cmp3;
    contractForm.querySelector('input[name=hired_info]').value = hired_info;
    contractForm.querySelector('input[name=cmp4]').value = cmp4;
    contractForm.querySelector('input[name=name]').value = name;
    contractForm.querySelector('input[name=cpf]').value = cpf;
    contractForm.querySelector('input[name=rg]').value = rg;
    contractForm.querySelector('input[name=email]').value = email;
    contractForm.querySelector('input[name=cell]').value = cell;
    contractForm.querySelector('input[name=address]').value = address;
    contractForm.querySelector('input[name=city]').value = city;
    contractForm.querySelector('input[name=bride]').value = bride;
    contractForm.querySelector('input[name=engaged]').value = engaged;
    contractForm.querySelector('input[name=cmp5]').value = cmp5;
    contractForm.querySelector('input[name=cmp6]').value = cmp6;
    contractForm.querySelector('input[name=cmp7]').value = cmp7;
    contractForm.querySelector('input[name=cmp8]').value = cmp8;
    contractForm.querySelector('input[name=date]').value = date;
    contractForm.querySelector('input[name=time]').value = time;
    contractForm.querySelector('input[name=place]').value = place;
    contractForm.querySelector('input[name=cmp9]').value = cmp9;
    contractForm.querySelector('input[name=goals]').value = goals;
    contractForm.querySelector('input[name=cmp10]').value = cmp10;
    contractForm.querySelector('input[name=cmp11]').value = cmp11;
    contractForm.querySelector('input[name=price]').value = price;
    contractForm.querySelector('input[name=cmp12]').value = cmp12;
    contractForm.querySelector('input[name=cmp13]').value = cmp13;
    contractForm.querySelector('input[name=deadline]').value = deadline;
    contractForm.querySelector('input[name=cmp14]').value = cmp14;
    contractForm.querySelector('input[name=cmp15]').value = cmp15;
    contractForm.querySelector('input[name=cmp16]').value = cmp16;
    contractForm.querySelector('input[name=cmp17]').value = cmp17;
    contractForm.querySelector('input[name=cmp18]').value = cmp18;
    contractForm.querySelector('input[name=warranty]').value = warranty;
    contractForm.querySelector('input[name=cmp19]').value = cmp19;
    contractForm.querySelector('input[name=cmp20]').value = cmp20;
    contractForm.querySelector('input[name=cmp21]').value = cmp21;
    contractForm.querySelector('input[name=name_hired]').value = name_hired;
    contractForm.querySelector('input[name=date_today]').value = date_today;

    let verifyAction = btnSubmit.innerText;
    
    if(verifyAction == 'SALVAR'){
        contractForm.querySelector('input[name=action]').value = 'save';
    }else{
        contractForm.querySelector('input[name=action]').value = 'editar';
    }

    /*Send to save in DB*/
    contractForm.submit();
})

/*---------------------------------------------------------------------------------------------------------------*/

/*-------------------------------------------FROM-INPUT-TO-CONTRACT-MODEL\real time--------------------------------------------------*/
    let inputService = document.querySelector('.inputService');
    let service = document.querySelectorAll('.service');
    inputService.addEventListener("keyup", function(){
        for(let i = 0; i < service.length; i++){
            service[i].innerText = inputService.value;
        }
    })

    let inputInfoHired = document.querySelector('.inputInfoHired');
    let InfoHired = document.querySelectorAll('.hired_info');
    inputInfoHired.addEventListener("keyup", function(){
        for(let i = 0; i < InfoHired.length; i++){
            InfoHired[i].innerText = inputInfoHired.value;
        }
    })

    let inputContractorName = document.querySelector('.inputContractorName');
    let nome = document.querySelectorAll('.name');
    inputContractorName.addEventListener("keyup", function(){
        for(let i = 0; i < nome.length; i++){
            nome[i].innerText = inputContractorName.value;
        }
    })

    let inputContractorCpf = document.querySelector('.inputContractorCpf');
    let cpf = document.querySelectorAll('.cpf');
    inputContractorCpf.addEventListener("keyup", function(){
        for(let i = 0; i < cpf.length; i++){
            cpf[i].innerText = inputContractorCpf.value;
        }
    })

    let inputContractorRg = document.querySelector('.inputContractorRg');
    let rg = document.querySelectorAll('.rg');
    inputContractorRg.addEventListener("keyup", function(){
        for(let i = 0; i < rg.length; i++){
            rg[i].innerText = inputContractorRg.value;
        }
    })

    let inputContractorEmail = document.querySelector('.inputContractorEmail');
    let email = document.querySelectorAll('.email');
    inputContractorEmail.addEventListener("keyup", function(){
        for(let i = 0; i < email.length; i++){
            email[i].innerText = inputContractorEmail.value;
        }
    })

    let inputContractorCell = document.querySelector('.inputContractorCell');
    let cell = document.querySelectorAll('.cell');
    inputContractorCell.addEventListener("keyup", function(){
        for(let i = 0; i < cell.length; i++){
            cell[i].innerText = inputContractorCell.value;
        }
    })

    let inputContractorAddress = document.querySelector('.inputContractorAddress');
    let address = document.querySelectorAll('.address');
    inputContractorAddress.addEventListener("keyup", function(){
        for(let i = 0; i < address.length; i++){
            address[i].innerText = inputContractorAddress.value;
        }
    })

    let inputContractorCity = document.querySelector('.inputContractorCity');
    let city = document.querySelectorAll('.city');
    inputContractorCity.addEventListener("keyup", function(){
        for(let i = 0; i < city.length; i++){
            city[i].innerText = inputContractorCity.value;
        }
    })

    let inputBride = document.querySelector('.inputBride');
    let bride = document.querySelectorAll('.bride');
    inputBride.addEventListener("keyup", function(){
        for(let i = 0; i < bride.length; i++){
            bride[i].innerText = inputBride.value;
        }
    })

    let inputEngaged = document.querySelector('.inputEngaged');
    let engaged = document.querySelectorAll('.engaged');
    inputEngaged.addEventListener("keyup", function(){
        for(let i = 0; i < engaged.length; i++){
            engaged[i].innerText = inputEngaged.value;
        }
    })

    let inputDate = document.querySelector('.inputDate');
    let date = document.querySelectorAll('.date');
    inputDate.addEventListener("keyup", function(){
        for(let i = 0; i < date.length; i++){
            date[i].innerText = inputDate.value;
        }
    })

    let inputTime = document.querySelector('.inputTime');
    let time = document.querySelectorAll('.time');
    inputTime.addEventListener("keyup", function(){
        for(let i = 0; i < time.length; i++){
            time[i].innerText = inputTime.value;
        }
    })

    let inputPlace = document.querySelector('.inputPlace');
    let place = document.querySelectorAll('.place');
    inputPlace.addEventListener("keyup", function(){
        for(let i = 0; i < place.length; i++){
            place[i].innerText = inputPlace.value;
        }
    })

    let inputGoals = document.querySelector('.inputGoals');
    let goals = document.querySelectorAll('.goals');
    inputGoals.addEventListener("keyup", function(){
        for(let i = 0; i < goals.length; i++){
            goals[i].innerText = inputGoals.value;
        }
    })

    let inputPrice = document.querySelector('.inputPrice');
    let price = document.querySelectorAll('.price');
    inputPrice.addEventListener("keyup", function(){
        for(let i = 0; i < price.length; i++){
            price[i].innerText = inputPrice.value;
        }
    })

    let inputDeadline = document.querySelector('.inputDeadline');
    let deadline = document.querySelectorAll('.deadline');
    inputDeadline.addEventListener("keyup", function(){
        for(let i = 0; i < deadline.length; i++){
            deadline[i].innerText = inputDeadline.value;
        }
    })

    let inputWarranty = document.querySelector('.inputWarranty');
    let warranty = document.querySelectorAll('.warranty');
    inputWarranty.addEventListener("keyup", function(){
        for(let i = 0; i < warranty.length; i++){
            warranty[i].innerText = inputWarranty.value;
        }
    })

    let inputDateToday = document.querySelector('.inputDateToday');
    let dateToday = document.querySelectorAll('.date_today');
    inputDateToday.addEventListener("keyup", function(){
        for(let i = 0; i < dateToday.length; i++){
            dateToday[i].innerText = inputDateToday.value;
        }
    })

    let inputNameHired = document.querySelector('.inputNameHired');
    let nameHired = document.querySelectorAll('.name_hired');
    inputNameHired.addEventListener("keyup", function(){
        for(let i = 0; i < nameHired.length; i++){
            nameHired[i].innerText = inputNameHired.value;
        }
    })

/*---------------------------------------------------------------------------------------------------------------*/