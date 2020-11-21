var btnNumbers = document.getElementsByClassName('btnNumbers'),
    sign = document.getElementById('sign'),
    op = document.getElementsByClassName('op'),
    inputNumber1 = document.getElementById('num1'),
    inputNumber2 = document.getElementById('num2'),
    clear = document.getElementById('clear');

for(let i = 0; i < btnNumbers.length; i++){
    btnNumbers[i].addEventListener('click', function(e){
        e.preventDefault();
        if(sign.value == "" || inputNumber1.value == ""){
            inputNumber1.value += btnNumbers[i].value
        } else {
            inputNumber2.value += btnNumbers[i].value
        }
    })
}

for(let i = 0; i < op.length; i++){
    op[i].addEventListener('click', function(e){
        sign.value = op[i].innerText;
    })
}

clear.addEventListener('click', function(){
    inputNumber1.value = "";
    sign.value = "";
    inputNumber2.value = "";
})