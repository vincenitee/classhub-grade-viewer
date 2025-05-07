import { anchors } from "../domElements/index.js";
import { showConfirmDialog } from "../utils/alerts.js";

export function initializeAnchorListeners(){
    if (anchors.logout){
        anchors.logout.addEventListener('click', (event) => {
            event.preventDefault();

            // displays the confirm dialog
            showConfirmDialog({
                title: 'Do you want to proceed?',
                text: 'This action will sign you out',
                confirmBtnText: 'Yes, proceed',
                confirmCallback: () => {
                    window.location.href = '../logout.php';
                }
            });
        })
    }
}