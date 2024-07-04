const closeBtn = document.querySelector('#closeMenu')
const openBtn = document.querySelector('#openMenu')
const menu = document.querySelector('#menu')
const headerLogo = document.querySelector('#headerLogo')



const menuHandler = () => {
    menu.classList.toggle('translate-x-[100%]')
}

document.addEventListener('click', (event) => {
    const isClickInsideMenu = menu.contains(event.target) || openBtn.contains(event.target);
    if (!isClickInsideMenu) {
        if (!menu.classList.contains('translate-x-[100%]')) {
            menu.classList.add('translate-x-[100%]');
        }
    }
});

closeBtn.addEventListener('click',menuHandler)
openBtn.addEventListener('click',menuHandler)