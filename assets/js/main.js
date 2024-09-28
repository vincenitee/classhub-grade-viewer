import { academicSelects, locationSelects } from './domElements/index.js';
import { forms } from './domElements/index.js';


function initializePage() {
    if(forms.loginForm) {
        console.log('Login Form Found');
        import('./controllers/loginController.js')
            .then(({ initializeLoginForm }) => {
                initializeLoginForm();
            })
            .catch((error) => console.error(error));
    } else if(locationSelects.regionSelect) {
        // console.log('Region Select Found');
        import('./controllers/selectControllers.js')
            .then(({ initializeSelects }) => {
                
                initializeSelects();
            })
            .catch((error) => console.error(error));
    }
}


document.addEventListener('DOMContentLoaded', () => {
    initializePage();
})
