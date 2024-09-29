export function showValidationMessage(title, icon, message = ""){
    Swal.fire({
        title: title,
        icon: icon,
        text: message,
    })
}