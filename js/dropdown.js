let dropdown = document.querySelector('.menu');
let submenu      = document.querySelector('.sub-menu');
let buttonClick  = document.querySelector('.check-button');
let hamburguer   = document.querySelector('.menu-icon');

buttonClick.addEventListener( 'click', () => {
    dropdown.classList.toggle( 'show-dropdown' );
    if(submenu){
        submenu.classList.toggle( 'show-dropdown' );
    }
    hamburguer.classList.toggle( 'animate-button' );
} );