let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');
const tr = document.querySelector(".button-up");

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
} 

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
} 

tr.addEventListener('click', () => {
    let currenScroll = document.documentElement.scrollTop;
    if (currenScroll > 0){
        document.documentElement.scrollTop = 0;
    }
})

window.addEventListener("scroll", () => {
    if(window.scrollY < 500){
        tr.style.transform = "scale(0)"
    }else{
        tr.style.transform = "scale(1)"
    }
})