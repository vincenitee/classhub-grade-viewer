export function storeToLocalStorage(key, value){
    try{
        if(typeof value === 'object' && value !== null){
            JSON.stringify(value);
        }

        localStorage.setItem(key, value);
        return true;
    } catch(error) {
        console.error('Failed to store to local storage: ', error)
        return false;
    }
}

export function getFromLocalStorage(key){
    const value = localStorage.getItem(key);
    if(typeof value === 'object' && value !== null){
        JSON.parse(value);
    }

    return value;
}

export function clearLocalStorage(){
    localStorage.clear();
}