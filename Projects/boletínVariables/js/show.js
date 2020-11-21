
var solutions = document.getElementsByClassName("solution"),
    codes = document.getElementsByClassName("code"),
    btnCodes = document.getElementsByClassName("btnCode"),
    btnSolutions = document.getElementsByClassName("btnSolution");

function showCodes(element) {

    if (codes[element].style.display === "none" || codes[element].style.display === "") {
        codes[element].style.display = "block";
    } else {
        codes[element].style.display = "none";
    }
}

function showSolution(element) {
    if (solutions[element].style.display === "none" || solutions[element].style.display === "") {
        solutions[element].style.display = "block";
    } else {
        solutions[element].style.display = "none";
    }
}

function hide(array, e) {
    for (let i = 0; i < array.length; i++) {
        if (i != e) {
            array[i].style.display = "none";
        }
    }
}

for (let i = 0; i < btnSolutions.length; i++) {
    btnSolutions[i].addEventListener("click", function () {
        hide(solutions, i);
        hide(codes, btnSolutions.length);
        showSolution(i);
    })
}

for (let i = 0; i < btnCodes.length; i++) {
    btnCodes[i].addEventListener("click", function () {
        hide(solutions, btnSolutions.length);
        hide(codes, i);
        showCodes(i);
    })
}