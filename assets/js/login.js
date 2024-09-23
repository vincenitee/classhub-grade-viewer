import { selectById } from './utils/dom.js';
import { showValidationMessage } from './utils/alerts.js';

const loginForm = selectById('login-form');

loginForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const formData = new FormData(loginForm);
    validateLogin(formData);
});

async function validateLogin(formData){
    try{
        const response = await fetch('authenticate-user.php', {
            method: 'POST',
            body: formData
        })

        const data = await response.json();

        if(!data.login){
            showValidationMessage('Detected an Issue', 'error', data.message);
            console.log(JSON.stringify(data));
        } 

    } catch(error){
        showValidationMessage('Detected an Issue', 'error', error);
    }
}


