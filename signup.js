function checkName(event) {
    const input = event.currentTarget;
    
    if (formStatus[input.name] = (input.value.length <= 0)) {
        input.nextElementSibling.classList.remove('hidden');
    } else {
        input.nextElementSibling.classList.add('hidden');
    }
}
function checkSurname(event) {
    const input = event.currentTarget;
    
    if (formStatus[input.name] = (input.value.length <= 0)) {
        input.nextElementSibling.classList.remove('hidden');
    } else {
        input.nextElementSibling.classList.add('hidden');
    }
}
function jsonCheckUsername(json) {
    console.log(json);
    if (formStatus.username = json.exists) {
        document.querySelector('#username-container div').classList.add('hidden');
    } else {
        document.querySelector('#username-container div').classList.remove('hidden');
        document.querySelector('#username-container div span').textContent = "This username is already taken.";
    }
}
function fetchResponse(response) {
    if (!response.ok) return null;
    return response.json();
}
function checkUsername(event) {
    const input = event.currentTarget;

    if(!/^[a-zA-Z0-9_]{3,15}$/.test(input.value)) {
        input.nextElementSibling.querySelector('span').textContent = "Are allowed letters, numbers and underscores. Max. 15";
        input.nextElementSibling.classList.remove('hidden');
        formStatus.username = false;
    } else {
        fetch("check_username.php?q="+encodeURIComponent(input.value)).then(fetchResponse).then(jsonCheckUsername);
    }    
}
function jsonCheckEmail(json) {
    const input = document.querySelector('#email-container input');
    if (formStatus.email = json.exists) {
        input.nextElementSibling.classList.add('hidden');
    } else {
        input.nextElementSibling.classList.remove('hidden');
        input.nextElementSibling.querySelector('span').textContent = "This e-mail is already registered.";
    }
}
function checkEmail(event) {
    const input = event.currentTarget;
    if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(input.value).toLowerCase())) {
        input.nextElementSibling.querySelector('span').textContent = "This e-mail is not valid.";
        input.nextElementSibling.classList.remove('hidden');
        formStatus.email = false;
    } else {
        fetch("check_email.php?q="+encodeURIComponent(String(emailInput.value).toLowerCase())).then(fetchResponse).then(jsonCheckEmail);
    }
}
function checkPassword(event) {
    const input = event.currentTarget;
    
    if (formStatus[input.password] = (input.value.length < 4)) {
        input.nextElementSibling.classList.remove('hidden');
    } else {
        input.nextElementSibling.classList.add('hidden');
    }
}
function checkConfirmPassword(event) {
    const input = event.currentTarget;
    const passwordInput = document.querySelector('#password-container input');

    if (formStatus[input.name] = (input.value !== passwordInput.value)) {
        input.nextElementSibling.classList.remove('hidden');
    } else {
        input.nextElementSibling.classList.add('hidden');
    }
}
function checkSignup(event) {
    const checkbox = document.getElementById('checkbox');
    formStatus[checkbox.name] = checkbox.checked;
    if (Object.keys(formStatus).length !== 8 || Object.values(formStatus).includes(false)) {
        event.preventDefault();
    }
}

const formStatus = {'upload': true};
document.querySelector('#name-container input').addEventListener('blur', checkName);
document.querySelector('#surname-container input').addEventListener('blur', checkSurname);
document.querySelector('#username-container input').addEventListener('blur', checkUsername);
document.querySelector('#email-container input').addEventListener('blur', checkEmail);
document.querySelector('#password-container input').addEventListener('blur', checkPassword);
document.querySelector('#confirm-password-container input').addEventListener('blur', checkConfirmPassword);
document.querySelector('#form-container form').addEventListener('submit', checkSignup);