let  hamburger = document.getElementById("hamburger");
let  menu = document.getElementById("menu");
let ancre = document.getElementById('ancre');

hamburger.addEventListener('click', () => {
    menu.classList.toggle("apparition");
})

window.addEventListener('scroll', (e) => {
    let valeur = window.scrollY;
    if(valeur){
        ancre.style.transform = 'scale(1)';
    }
   else if(valeur == 0){
        ancre.style.transform = 'scale(0)';
   }
})