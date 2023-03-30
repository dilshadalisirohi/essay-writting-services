const existingProsGroup = document.getElementById('existingPros');
const existingConsGroup = document.getElementById('existingCons');
const proInput = document.getElementById('proInput');
const conInput = document.getElementById('conInput');

const validateInput = function (input, inputName) {
    if (input.value.length !== 0) {
        return true;
    }
    alert(`Please fill new ${inputName} field`);
    return false;
}

const copyInput = function (input, existingGroup, fieldName, newId) {
    let copiedInput = input.cloneNode(true);
    copiedInput.id = "";
    copiedInput.name = `${fieldName}[${newId}][value]`;
    existingGroup.appendChild(copiedInput);
}

const clearInput = function (input) {
    input.value = "";
}

const addPro = function () {
    let inputName = "pros";
    if (!validateInput(proInput, inputName)) return;
    copyInput(proInput, existingProsGroup, inputName, newProId);
    clearInput(proInput);
    newProId++;
}

const addCon = function () {
    let inputName = "cons";
    if (!validateInput(conInput, inputName)) return;
    copyInput(conInput, existingConsGroup, inputName, newConId);
    clearInput(conInput);
    newConId++;
}

document.getElementById('addProBtn').onclick = addPro;
document.getElementById('addConBtn').onclick = addCon;
