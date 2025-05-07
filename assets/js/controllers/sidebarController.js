import { toggleClass } from '../helpers/index.js';
import { buttons, components } from '../domElements/index.js';
import { select, selectAll } from '../utils/dom.js';

const toggleSidebarBtn = buttons.sidebarToggle;
const sidebar = components.sidebar;

export function initializeSidebar(){
    toggleSidebarBtn.addEventListener('click', () => {

        sidebar.classList.toggle('shrinked');

        if(sidebar.classList.contains('shrinked')){
            toggleSidebarMenuTexts();
            return;
        }

        toggleSidebarMenuTexts();
    })

}

function toggleSidebarMenuTexts(){ 
    const sidebarTitle = select('#logo-container > span');
    const menuItemTexts = selectAll('.nav-link > .description');

    console.log('Sidebar Retracted!');

    toggleClass(sidebarTitle, 'd-none');

    menuItemTexts.forEach((item) => {
        toggleClass(item, 'd-none');
    })
}