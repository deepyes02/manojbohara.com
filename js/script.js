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


//make header sticky
const header_new = document.getElementById('header_new');
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header_new").style.top = "0";
  } else {
    document.getElementById("header_new").style.top = "-110px";
  }
  prevScrollpos = currentScrollPos;
}