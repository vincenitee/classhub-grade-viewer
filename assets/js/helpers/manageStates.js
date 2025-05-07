import { anchors } from "../domElements/anchors.js";
import { selectById, selectChildren } from "../utils/index.js";
import { getFromLocalStorage, storeToLocalStorage } from "./localStorage.js";

// Manages Select States
export function clearOptions(select){
    const options = selectChildren(select, 'option');

    options.forEach(option => {
        if(option.value != ''){
            select.removeChild(option);
        }
    })
}

export function disableAllSelectExceptFirst(selects){
    const keys = Object.keys(selects);
    
    keys.forEach((key, index) => {
        if(index !== 0) setSelectDisabled(selects[key], true);
    })
}

export function setSelectDisabled(select, disabled){
    select.disabled = disabled;
}



