require('./bootstrap');

const menuBtn = document.getElementById('menu-button');
const menuFixedBtn = document.getElementById('menu-fixed-button');
const menuHidden = document.getElementById('menu-hidden');
let menuActive = false;

menuBtn.addEventListener('click', function() {
    menu().toggle();
});

menuFixedBtn.addEventListener('click', function() {
    menu().toggle();
});

function menu() {
    const toggle = () => {
        if (!menuActive) {
            open();
            menuActive = true;
        } else {
            close();
            menuActive = false;
        }
        console.log(menuActive);
    }

    const open = () => {
        menuHidden.classList.add('menu-active');
    }

    const close = () => {
        menuHidden.classList.remove('menu-active');
    }

    return {
        toggle
    }
}
