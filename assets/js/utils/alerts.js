export function showValidationMessage(title, icon, message = ""){
    Swal.fire({
        title: title,
        icon: icon,
        text: message,
    })
}

const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});

export function showToastMessage(icon, title){
    Toast.fire({
        icon: icon,
        title: title
    }).then((result) => {
        console.log(result);
    });
}

export function showConfirmDialog({
    title = 'Are you sure?',    // Default title
    text = '',                  // Optional description text
    icon = 'warning',           // Default icon
    confirmBtnText = 'Confirm', // Default confirm button text
    denyBtnText = 'Cancel',     // Default deny button text
    confirmCallback = null,     // Callback function when confirmed
    denyCallback = null,        // Callback function when denied
    showDenyButton = true,      // Option to show or hide deny button
    showConfirmButton = true    // Option to show or hide confirm button
} = {}) {
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showDenyButton: showDenyButton,
        showConfirmButton: showConfirmButton,
        confirmButtonText: confirmBtnText,
        denyButtonText: denyBtnText,
    }).then((result) => {
        if (result.isConfirmed && confirmCallback) {
            confirmCallback();   // Call the confirm callback if provided
        } else if (result.isDenied && denyCallback) {
            denyCallback();      // Call the deny callback if provided
        }
    });
}

