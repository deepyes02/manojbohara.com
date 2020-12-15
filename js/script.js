const mobileNavCross = document.getElementById('mobileNavCross');
const menu = document.getElementById('menu');
const menu_new = document.getElementById('menu_new');


if (menu !== null){
mobileNavCross.addEventListener('click', function(){
menu.classList.toggle('slideFromTop');
})
const hamburgerButton = document.getElementById('hamburgerButton');
hamburgerButton.addEventListener('click', function(){
menu.classList.toggle('slideFromTop');
});
}

if (menu_new !== null){
mobileNavCross.addEventListener('click', function(){
    menu_new.classList.toggle('slideFromTop');
    });
    hamburgerButton.addEventListener('click', function(){
        menu_new.classList.toggle('slideFromTop');
        });
      }



//make header sticky
const header_new = document.getElementById('header_new');
var prevScrollpos = window.pageYOffset;
if (header_new !== null){
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header_new").style.top = "0";
  } else if (currentScrollPos>prevScrollpos ){
    document.getElementById("header_new").style.top = "-110px";
  } else {
    return null;
  }
  prevScrollpos = currentScrollPos;
}
}

//script for search bar
const searchInput = document.querySelector('#searchInput');
        const searchSubmit = document.querySelector('#searchSubmit');
        searchInput.placeholder = "Type something to search";
        searchInput.addEventListener('keypress', logkey);
        function logkey(){
        searchSubmit.style.backgroundColor = "rgba(190, 193, 90, 0.896)";
        }


