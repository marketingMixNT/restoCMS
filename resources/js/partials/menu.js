const closeBtn = document.querySelector('#closeMenu')
const openBtn = document.querySelector('#openMenu')
const menu = document.querySelector('#menu')
const headerLogo = document.querySelector('#headerLogo')



const menuHandler = () => {
    menu.classList.toggle('translate-x-[100%]')
    headerLogo.classList.toggle('opacity-0')
}

closeBtn.addEventListener('click',menuHandler)
openBtn.addEventListener('click',menuHandler)