let btnCloseMainNav = document.querySelector('.closeMainNav');

btnCloseMainNav.addEventListener('click', function() {
    document.body.classList.remove('has-menu-opened')
});

let btnOpenMainNav = document.querySelector('.openMainNav');

btnOpenMainNav.addEventListener('click', function() {
    document.body.classList.add('has-menu-opened')
});


