import './bootstrap';
import Alpine from 'alpinejs';
 
window.Alpine = Alpine;
 
// navigation action onscroll
window.onscroll = function() {scrollFunction()};
let navigation = document.getElementById("header");
let sticky = navigation.offsetTop;

function scrollFunction() {
    if (window.scrollY > sticky) {
        navigation.classList.add('transparent-header');
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          mybutton.classList.remove("hidden");
        } else {
          mybutton.classList.add("hidden");
        }
    } else {
      navigation.classList.remove('transparent-header');
    }
}

Alpine.start()
