import { components, forms } from './domElements/index.js';

function initializePage() {

    // Checks if login form exists
    if(forms.login) {
        console.log('Login Form Found');
        import('./controllers/authFormControllers.js')
            .then(({ initializeLoginForm }) => {
                initializeLoginForm();
            })
            .catch((error) => console.error(error));
    } 
    
    // Imports signup form validation logic
    if(forms['student-signup']){
        console.log('Student Signup Form Found')
        import('./controllers/authFormControllers.js')
            .then(({ initializeSignupForm }) => {
                initializeSignupForm();
            }).catch((error) => console.error(error));
        
        import('./controllers/selectControllers.js')
            .then(({ initializeSelects }) => {
                initializeSelects();
            })
            .catch((error) => console.error(error));
    }

    // Checks if the update pass form exists
    if(forms.updatePass){
        console.log('Update Pass Form Found');
        import('./controllers/authFormControllers.js')
            .then(({ initializeUpdatePassForm }) => {
                initializeUpdatePassForm();
            }).catch((error) => console.error(error))
    }

    if(forms.updateUserInfo){
        console.log('Update User Info Form Found');
        import('./controllers/authFormControllers.js')
            .then(({ initializeUpdateUserInfoForm }) => {
                initializeUpdateUserInfoForm();
            }).catch((error) => console.error(error))
    }

    // Checks if navbar exists
    if(components.navbar){
        import('./controllers/anchorControllers.js')
            .then(({ initializeAnchorListeners }) => {
                initializeAnchorListeners();
            }).catch((error) => console.error(error));
    }

    if(components.sidebar){
        import('./controllers/sidebarController.js')
            .then(({ initializeSidebar }) => {
                initializeSidebar();
            }).catch((error) => console.error(error))
    }

}

document.addEventListener('DOMContentLoaded', () => {
    initializePage();
})
