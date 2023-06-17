//funcion para la cabecera
const nav = document.querySelector('.navprod');

window.addEventListener('scroll',function(){
    nav.classList.toggle('active',window.scrollY>0)
})