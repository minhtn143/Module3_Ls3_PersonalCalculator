let displayInput = document.getElementById("displayInput");

function clickBtn(value) {
        displayInput.value += value;
}

function clearBtn(value) {
    if (value == "CE"){
        displayInput.value = "";
    }
    if (value == "C")
        displayInput.value = displayInput.value.substr(1, displayInput.value.length - 1);
}
