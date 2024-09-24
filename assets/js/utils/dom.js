function select(element) {
    return document.querySelector(element);
}

function selectAll(element) {
    return document.querySelectorAll(element);
}

function selectById(elementId) {
    return document.getElementById(elementId);
}

function selectChildren(parentContainer, childEelement){
    return parentContainer.querySelectorAll(childEelement);
}

export { select, selectAll, selectById, selectChildren };
