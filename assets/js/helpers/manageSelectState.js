import { selectChildren } from "../utils/index.js";

export function clearOptions(select){
    const options = selectChildren(select, 'option');

    options.forEach(option => {
        if(option.value != ''){
            select.removeChild(option);
        }
    })
}

export function disableSelect(select){
    select.disabled = true;
}

export function enableSelect(select){
    select.disabled = false;
}