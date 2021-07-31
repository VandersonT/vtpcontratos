var screenChat = document.getElementById('screenChat');
screenChat.scrollTop = screenChat.scrollHeight;

let btnSubmit = document.querySelector('.env');

btnSubmit.addEventListener('click', function(e){
    e.preventDefault();

    var msg = document.querySelector('.msgT').value;
    document.querySelector('.msgT').value = '';
    document.querySelector('.msgTosend').value = msg;
    
    document.querySelector('.staffMsg').submit();

})