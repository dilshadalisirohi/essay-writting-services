/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/admin/faq.js ***!
  \***********************************/
var existingFaqGroup = document.getElementById('existing-faqs');
var newCustomFaqTitleInput = document.getElementById('newFaqTitleInput');
var newCustomFaqBodyInput = document.getElementById('newFaqBodyInput');

function addFaq() {
  if (!validateNewCustomFaqInput()) return;
  copyFields();
  clearNewCustomInput();
}

function validateNewCustomFaqInput() {
  if (newCustomFaqTitleInput.value.length === 0) {
    alert('Please fill new faq title field');
    return false;
  }

  if (newCustomFaqBodyInput.value.length === 0) {
    alert('Please fill new faq body field');
    return false;
  }

  return true;
}

function copyFields() {
  var copiedFaqTitle = newCustomFaqTitleInput.cloneNode(true);
  var copiedFaqBody = newCustomFaqBodyInput.cloneNode(true);
  copiedFaqTitle.id = "";
  copiedFaqBody.id = "";
  copiedFaqTitle.name = 'faq[' + newFaqId + '][title]';
  copiedFaqBody.name = 'faq[' + newFaqId + '][description]';
  copiedFaqTitle.maxlength = 256;
  copiedFaqBody.maxlength = 512;
  var faqGroupWrapper = document.createElement('div');
  faqGroupWrapper.classList.add('faq-group');
  faqGroupWrapper.appendChild(copiedFaqTitle);
  faqGroupWrapper.appendChild(copiedFaqBody);
  existingFaqGroup.appendChild(faqGroupWrapper);
  newFaqId++;
}

function clearNewCustomInput() {
  newCustomFaqTitleInput.value = '';
  newCustomFaqBodyInput.value = '';
}

document.getElementById('addFaqBtn').onclick = addFaq;
/******/ })()
;