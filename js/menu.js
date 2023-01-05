const xsMenu = document.querySelector('#jl_xsMenu');
const menu = document.querySelector('header nav');
const closingCross = document.querySelector('#jl_closingCross');
const triangleOpen = document.querySelector('#jl_triangleOpen');
const triangleClose = document.querySelector('#jl_triangleClose');
const footerMenu = document.querySelector('#underItem');
const additionalItem = document.querySelector('#jl_xsMenuItem');

xsMenu.addEventListener('click', () => {
    menu.style.display = 'block';
    additionalItem.style.display = 'block';
    closingCross.style.display = 'block';
});

closingCross.addEventListener('click', () => {
    menu.style.display = 'none';
    additionalItem.style.display = 'none';
    closingCross.style.display = 'none';
});

triangleOpen.addEventListener('click', () => {
    footerMenu.style.display = 'block';
    triangleOpen.style.display = 'none';
    triangleClose.style.display = 'block';
    /* /!\ COULEUR A CHANGER ICI !!!! */
    triangleClose.style.color = 'orange';
});

triangleClose.addEventListener('click', () => {
    footerMenu.style.display = 'none';
    triangleOpen.style.display = 'block';
    triangleClose.style.display = 'none';
    triangleClose.style.color = 'white';
});