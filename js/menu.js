const navToggle= document.querySelector(".menu_bar");

const navMenu= document.querySelector(".navS");

navToggle.addEventListener("click",()=>{
    navMenu.classList.toggle("navS_visible");
});