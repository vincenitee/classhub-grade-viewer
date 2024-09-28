import { clearOptions } from './manageSelectState.js';
import { mapToGeneric } from './mapToGeneric.js'

export function populateSelect(select, options){
    clearOptions(select);

    if(select.disabled){
        disableSelect(select)
    }

    if(options.length === 0){
        select.add(new Option('No Options Available', ''))
        return;
    }

    const mappedOptions = mapToGeneric(options)

    mappedOptions.forEach(option => {
        select.add(new Option(option.value.toUpperCase(), option.id));
    })
}