let saveContractBtn = document.querySelector('.saveContract');
var form = document.querySelector('.formSaveContract');
saveContractBtn.addEventListener('click', function(){
    //get the contractSingle class values
    let cmp1 = document.querySelector('.cmp1').innerText;
    let contractName = document.querySelector('.contractName').value;
    let service = document.querySelector('.service').innerText;
    let cmp2 = document.querySelector('.cmp2').innerText;

    //get the values for the form to be sent hidden
    document.querySelector('input[name=contractNameInput]').value = contractName;
    document.querySelector('input[name=cmp1Input]').value = cmp1;
    document.querySelector('input[name=serviceInput]').value = service;
    document.querySelector('input[name=cmp2Input]').value = cmp2;

    //send info hidden
    form.submit();
})