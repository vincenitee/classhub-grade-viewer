import { showValidationMessage } from "../utils/index.js";

export async function authenticateUser(formData) {
    const loginUrl = 'authenticate-user.php';
    
    try{
        const request = axios.post(loginUrl, formData);

        const response = await request;

        console.log(response);

        if(!response.data.status){
            showValidationMessage('Login Failed', 'error', response.data.message);
        } 

    } catch(error){
        showValidationMessage('Unknown Error Occured', 'error', error)
    }
}