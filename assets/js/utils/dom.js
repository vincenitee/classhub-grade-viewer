export function select(element) {
    return document.querySelector(element);
}

export function selectAll(element) {
    return document.querySelectorAll(element);
}

export function selectById(elementId) {
    return document.getElementById(elementId);
}

export function selectChildren(parentContainer, childElement){
    // Converts the NodeList to an Array
    return [...parentContainer.querySelectorAll(childElement)];
}

