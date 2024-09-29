import { forms } from './domElements/index.js';


function initializePage() {
    if(forms.loginForm) {
        console.log('Login Form Found');
        import('./controllers/loginController.js')
            .then(({ initializeLoginForm }) => {
                initializeLoginForm();
            })
            .catch((error) => console.error(error));
    } else if(forms.signupForm) {
        import('./controllers/selectControllers.js')
            .then(({ initializeSelects }) => {
                initializeSelects();
            })
            .catch((error) => console.error(error));

        import('./controllers/loginController.js')
            .then(({ initilializeSignupForm }) => {
                initilializeSignupForm();
            });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    initializePage();
})
