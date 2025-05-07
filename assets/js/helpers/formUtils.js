import { disableAllSelectExceptFirst } from "./manageStates.js";
import { locationSelects, academicSelects, forms } from "../domElements/index.js";

export function resetForm(form) {
    form.reset();

    if(form.id === 'signup-form'){
        disableAllSelectExceptFirst(locationSelects);
        disableAllSelectExceptFirst(academicSelects);  
    }
    
}
