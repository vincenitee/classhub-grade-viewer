import { forms } from '../domElements/index.js';
import { authenticateUser, validateSignup } from '../services/authServices.js';

export function initializeLoginForm(){
    const loginForm = forms.loginForm;

    loginForm.addEventListener('submit', (event) => {
        event.preventDefault();
        
        const formData = new FormData(loginForm);
        
        authenticateUser(formData);
    })

}

export function initilializeSignupForm(){
    const signupForm = forms.signupForm;

    signupForm.addEventListener('submit', (event) => {
        event.preventDefault();
        
        const formData = new FormData(signupForm);

        validateSignup(formData);
    })
}