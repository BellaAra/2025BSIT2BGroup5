const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById('password');

form.addEventListener('submit', e => {
    e.preventDefault();

    if (validateInputs()) {
        form.submit();
    }
});

const setError = (element, message) => {
    const inputGroup = element.parentElement;
    const errorDisplay = inputGroup.querySelector('.error');

    errorDisplay.innerText = message;
    element.classList.add('error');
    element.classList.remove('success');
};

const setSuccess = (element) => {
    const inputGroup = element.parentElement;
    const errorDisplay = inputGroup.querySelector('.error');

    errorDisplay.innerText = '';
    element.classList.add('success');
    element.classList.remove('error');
};

const validateInputs = () => {
    let success = true;

    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();

    if (usernameValue === '') {
        setError(username, 'Username is required.');
        success = false;
    } else {
        setSuccess(username);
    }

    if (passwordValue === '') {
        setError(password, 'Password is required.');
        success = false;
    } else if (passwordValue.length < 8) {
        setError(password, 'Password must be at least 8 characters.');
        success = false;
    } else {
        setSuccess(password);
    }

    return success;
};
