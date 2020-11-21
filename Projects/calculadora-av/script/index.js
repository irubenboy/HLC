var btnNumbers = document.getElementsByClassName('btnNumbers'),
    sign = document.getElementById('sign'),
    op = document.getElementsByClassName('op'),
    inputNumber1 = document.getElementById('num1'),
    inputNumber2 = document.getElementById('num2'),
    decimal = document.getElementById('decimal');

for(let i = 0; i < btnNumbers.length; i++){
    btnNumbers[i].addEventListener('click', function(e){
        e.preventDefault();
        if(sign.value == "" || inputNumber1.value == ""){
            inputNumber1.value += btnNumbers[i].value
            // inputNumber1.focus();
        } else {
            inputNumber2.value += btnNumbers[i].value
        }
    })
}

for(let i = 0; i < op.length; i++){
    op[i].addEventListener('click', function(e){
        e.preventDefault();
        sign.value = op[i].innerText;
    })
}

inputNumber1.addEventListener('change', function(){
    for(let i = 0; i < op.length; i++){
        op[i].disabled = this.value == "" ? true : false;
    }
})

decimal.addEventListener('click', function(){
    if(sign.value == ""){
        if(!inputNumber1.value.includes(".")) {
            inputNumber1.value += ".";
        }
    } else {
        if(!inputNumber2.value.includes(".")){
            inputNumber2.value += "."
        }
    }
})