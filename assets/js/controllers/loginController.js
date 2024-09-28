import { forms } from '../domElements/index.js';
import { authenticateUser } from '../services/authServices.js';

export function initializeLoginForm(){
    
    const loginForm = forms.loginForm;

    loginForm.addEventListener('submit', (event) => {
        event.preventDefault();
        
        const formData = new FormData(loginForm);
        
        authenticateUser(formData);
    })

}