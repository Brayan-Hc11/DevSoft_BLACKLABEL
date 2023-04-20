const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section"); 
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

function Next(){
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.maginLeft = "-200%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
    slider.style.transition = "none";
    slider.insertAdjacentElement('beforeend', sliderSectionFirst);
    slider.style.maginLeft = "-100%";
    }, 500);
}

function Prev(){
    let sliderSection = document.querySelectorAll(".slider__section"); 
    let sliderSectionLast = sliderSection[sliderSection.length -1];
    slider.style.maginLeft = "0";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
    slider.style.transition = "none";
    slider.insertAdjacentElement('afterbegin', sliderSectionLast);
    slider.style.maginLeft = "-100%";
    }, 500);
}

//Función para mover el slider a la derecha 
btnRight.addEventListener('click', function(){
    Next();
});

//Funci{on para mover el slider  la izuerda}
btnLeft.addEventListener('click', function(){
    Prev();
});

//Función para que avance el slider solo
setInterval(function(){
    Next();
},5000);

//funcion para la cabecera
const nav = document.querySelector('.navprod');

window.addEventListener('scroll',function(){
    nav.classList.toggle('active',window.scrollY>0)
})


