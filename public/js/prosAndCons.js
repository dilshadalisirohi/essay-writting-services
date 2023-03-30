/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/admin/prosAndCons.js ***!
  \*******************************************/
var existingProsGroup = document.getElementById('existingPros');
var existingConsGroup = document.getElementById('existingCons');
var proInput = document.getElementById('proInput');
var conInput = document.getElementById('conInput');

var validateInput = function validateInput(input, inputName) {
  if (input.value.length !== 0) {
    return true;
  }

  alert("Please fill new ".concat(inputName, " field"));
  return false;
};

var copyInput = function copyInput(input, existingGroup, fieldName, newId) {
  var copiedInput = input.cloneNode(true);
  copiedInput.id = "";
  copiedInput.name = "".concat(fieldName, "[").concat(newId, "][value]");
  existingGroup.appendChild(copiedInput);
};

var clearInput = function clearInput(input) {
  input.value = "";
};

var addPro = function addPro() {
  var inputName = "pros";
  if (!validateInput(proInput, inputName)) return;
  copyInput(proInput, existingProsGroup, inputName, newProId);
  clearInput(proInput);
  newProId++;
};

var addCon = function addCon() {
  var inputName = "cons";
  if (!validateInput(conInput, inputName)) return;
  copyInput(conInput, existingConsGroup, inputName, newConId);
  clearInput(conInput);
  newConId++;
};

document.getElementById('addProBtn').onclick = addPro;
document.getElementById('addConBtn').onclick = addCon;
/******/ })()
;