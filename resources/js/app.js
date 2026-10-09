import './bootstrap';

// Main menu (remains unchanged)
const hamMenu = document.querySelector('.ham-menu');
const offScreenMenu = document.querySelector('.off-screen-menu');

if (hamMenu && offScreenMenu) {
    hamMenu.addEventListener('click', () => {
        hamMenu.classList.toggle('active');
        offScreenMenu.classList.toggle('active');
    });
}

// Fixed Multiple More Menus using your exact HTML structure
const moreMenus = document.querySelectorAll('.more-menu');

moreMenus.forEach((menu) => {
    menu.addEventListener('click', () => {
        // 1. Toggle the button itself
        menu.classList.toggle('active');
        
        // 2. Go up to the shared card container, then find the screen inside it
        const cardContainer = menu.closest('.more-menu-container');
        const associatedScreen = cardContainer ? cardContainer.querySelector('.more-menu-screen') : null;

        // 3. Toggle the screen if found
        if (associatedScreen) {
            associatedScreen.classList.toggle('active');
        } else {
            console.error("Could not find '.more-menu-screen' inside '.category-card' for this button:", menu);
        }
    });
});
