// Alert button

let btn = document.querySelector('#alert-btn');

btn.addEventListener('click', function() {
    alert('Hello World!');
});

// Upper & lower case

let btns = document.querySelectorAll('button');
let textInput = document.querySelector('#text-editor');

for (let b of btns) {
    b.addEventListener('click', function() {

        let textInputVal = textInput.value;
        let otherLetter = textInputVal.slice(1);

        if (b.textContent == 'To Upper Case') {
            textInput.value = textInputVal.toUpperCase();
        } else if (b.textContent == 'To Lower Case') {
            textInput.value = textInputVal.toLowerCase();
        } else if (b.textContent == 'First Upper Case') {
            let firstLetter = textInputVal[0].toUpperCase();
            textInput.value = firstLetter + otherLetter;
        } else if (b.textContent == 'First Lower Case') {
            let firstLetter = textInputVal[0].toLowerCase();
            textInput.value = firstLetter + otherLetter;
        }
    });
}

// Form with validation

let formValidate = document.querySelector('#form-validaition');
let emailErr = document.querySelector('#err-email');
let phoneErr = document.querySelector('#err-phone');
let emailInp = document.querySelector('#email-validation');
let phoneInp = document.querySelector('#phone-validation');
let arrayErr = ['border', 'border-danger', 'border-3'];

formValidate.addEventListener('submit', function(event) {
    event.preventDefault()

    let emailForm = /\S+@\S+\.\S+/;
    let phoneForm = /^\+?(3706)\)?([0-9]{7})$/;
    let errFound = false;

    if (emailInp.value.match(emailForm)) {
        emailErr.style.display = 'none';
        emailInp.classList.remove(...arrayErr);
    } else {
        emailErr.style.display = 'inline';
        emailInp.classList.add(...arrayErr);
        errFound = true;
    }

    if (phoneInp.value.match(phoneForm)) {
        phoneErr.style.display = 'none';
        phoneInp.classList.remove(...arrayErr);
    } else {
        phoneErr.style.display = 'inline';
        phoneInp.classList.add(...arrayErr);
        errFound = true;
    }

    if (!errFound) {
        formValidate.submit();
    }
});

// Input block/unblock

let blockBtb = document.querySelector('#block-button');
let unblockBtn = document.querySelector('#unblock-button');
let inputBlock = document.querySelector('#blocking-input');

blockBtb.addEventListener('click', function() {
    inputBlock.setAttribute('disabled', '');
});

unblockBtn.addEventListener('click', function() {
    inputBlock.removeAttribute('disabled');
});

// Changing monkeys

let changeImg = document.querySelector('#test-monkey');

changeImg.addEventListener('mouseover', function() {
    this.src = 'https://i.imgur.com/PLDVxza.jpg';
});

changeImg.addEventListener('mouseout', function() {
    this.src = 'https://i.imgur.com/0DElr0H.jpg';
});

// Blockquote modifications

let blockQ = document.querySelector('figure');
let resetBtn = document.querySelector('#button-reset');

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', function() {
        let dataPrp = this.getAttribute('data-property');
        let dataVal = this.getAttribute('data-property-value');
        blockQ.style[dataPrp] = dataVal;
    });
}

resetBtn.addEventListener('click', function() {
    blockQ.style.cursor = null;
    blockQ.style.color = null;
    blockQ.style.border = null;
});