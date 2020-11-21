var codes = document.getElementsByClassName("code"),
    btnCodes = document.getElementsByClassName("btnCode"),
    btnSolutions = document.getElementsByClassName("btnSolution"),
    back = document.getElementById('back');

if(back != undefined){
    back.addEventListener('click', function(){
        location.href = '../index.php'
    })
}

for (let i = 0; i < btnCodes.length; i++) {
    btnCodes[i].addEventListener("click", function () {
        hide(codes, i);
        showCodes(i);
    })
}

for(let i = 0; i < btnSolutions.length; i++){
    btnSolutions[i].addEventListener('click', function(){
        location.href = 'exercises/search_' + (i + 1) + '.php';
    });
}

function showCodes(element) {

    if (codes[element].style.display === "none" || codes[element].style.display === "") {
        codes[element].style.display = "block";
    } else {
        codes[element].style.display = "none";
    }
}

function hide(array, e) {
    for (let i = 0; i < array.length; i++) {
        if (i != e) {
            array[i].style.display = "none";
        }
    }
}
