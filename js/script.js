const mobileNavCross = document.getElementById('mobileNavCross');
const menu = document.getElementById('menu');
mobileNavCross.addEventListener('click', function(){
menu.classList.toggle('displayBlock');
})
const hamburgerButton = document.getElementById('hamburgerButton');
hamburgerButton.addEventListener('click', function(){
menu.classList.toggle('displayBlock');
});


const menu_new = document.getElementById('menu_new');
mobileNavCross.addEventListener('click', function(){
    menu_new.classList.toggle('displayBlock');
    });
    hamburgerButton.addEventListener('click', function(){
        menu_new.classList.toggle('displayBlock');
        });
