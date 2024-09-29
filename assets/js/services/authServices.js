import { showValidationMessage } from "../utils/index.js";

export async function authenticateUser(formData) {
    const loginUrl = 'authenticate-user.php';
    
    try{
        const request = axios.post(loginUrl, formData);

        const response = await request;

        console.log(response.data);

        if(response.data.login){
            window.location.href = './student/dashboard.php';
        } else{
            showValidationMessage('Login Failed', 'error', response.data.message);
        }

    } catch(error){
        console.error(error)
    }
}

export async function validateSignup(formData){
    const signupUrl = 'register-user.php';

    try{
        const request = axios.post(signupUrl, formData);

        const response = await request;

        console.log(response);

        if(response.data.success){
            showValidationMessage('Registered Successfully', 'success');
        } else{
            showValidationMessage('Detected an Issue', 'error', response.data.message);
        }
    } catch(error){
        console.error(error)
    }
}

