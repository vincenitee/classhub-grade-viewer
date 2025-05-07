import { forms } from "../domElements/forms.js";
import { resetForm } from "../helpers/formUtils.js";
import { showToastMessage, showValidationMessage } from "../utils/index.js";

export async function validateEntries({url, form = null, formData, redirect_url = null, notificationType = 'modal'}){
    try{
        const response = await axios.post(url, formData);

        const { success, message } = response.data;

        console.log(success)

        if(success){

            if(redirect_url){
                window.location.href = redirect_url;
            }

            if(form){
                resetFormAndNotify(form, message, notificationType);
                return;
            }

            notify(message, 'success', notificationType);

        } else{
            notify(message, 'error', notificationType);
        }

    } catch(error){
        console.error(error);
        notify(`An error occured: ${error}`, 'error', 'modal');
    }
}

export async function authenticateUser(formData){
    return validateEntries({
        url: 'authenticate-user.php',
        form: forms.login,
        formData: formData,
        redirect_url: 'student/home.php'
    });
}

export async function validateSignup(formData){
    return validateEntries({
        url: '../register-user.php',
        form: forms.signup,
        formData: formData,
    });
}

export async function validateUpdatePass(formData){
    return validateEntries({
        url: '../update-password.php',
        form: forms.updatePass,
        formData: formData,
        notificationType: 'toast'
    });
}

export async function validateUpdateUser(formData){
    return validateEntries({
        url: '../update-user-info.php',
        formData: formData,
        notificationType: 'toast'
    });
}

function resetFormAndNotify(form, message, notificationType){
    resetForm(form);

    notify(message, 'success', notificationType);
}

function notify(message, icon = 'success', notificationType = 'modal') {
    if (icon === 'error') {
        notificationType = 'modal';
    }

    switch (notificationType) {
        case 'modal':
            showValidationMessage("Notice", icon, message);
            break;

        case 'toast':
            showToastMessage(icon, message);
            break;

        default:
            showValidationMessage(message, icon);
            break;
    }
}


