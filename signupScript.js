//studied form validation code in youtube...
const form = document.getElementById('form');
const username = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password'); 

form.addEventListener('submit', e =>{
    e.preventDefault();

   if(validateInputs()){
    form.submit();
   };
});


const setError = (element, message)=>{
    const inputField = element.parentElement;
    const errorDisplay = inputField.querySelector('.error');

    errorDisplay.innerText = message;
    inputField.classList.add('error');
    inputField.classList.remove('success');
}

const setSuccess = element =>{
    const inputField = element.parentElement;
    const errorDisplay = inputField.querySelector('.error');

    errorDisplay.innerText = '';
    inputField.classList.add('success');
    inputField.classList.remove('error');
}


//validation section

const isValidEmail = email => {
  const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  return re.test(String(email).toLowerCase());
}//understand further the code, because wth is this....


const validateInputs = () =>{
    let success = true;

    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();

    if (usernameValue ===''){
        setError(username, 'Username is required.');
        success = false;
    }else{
        setSuccess(username);
    }

    if (emailValue ===''){
        setError(email, 'Email is required.');
        success = false;
    }else if(!isValidEmail(emailValue)){
        setError(email, 'Provide a valid email address.')
        success = false;
    }else{
        setSuccess(email);
    }

    if (passwordValue ===''){
        setError(password, 'Password is required.');
        success = false;
    }else if(passwordValue.length<8){
        setError(password, 'Password must at least be 8 characters.')
        success = false;
    }else{
        setSuccess(password);
    }

    return success;
};
