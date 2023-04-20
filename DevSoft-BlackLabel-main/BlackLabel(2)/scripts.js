const nav = document.querySelector('.navcat');

window.addEventListener('scroll',function(){
    nav.classList.toggle('active',window.scrollY>0)
})