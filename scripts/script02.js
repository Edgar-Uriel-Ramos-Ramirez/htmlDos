var imagenPrincipal = 0;
var mouseMover = false;
mostrarImagens();

let images = document.getElementsByClassName("imagen");

function halt(){
    mouseMover = true;
}

function resume(){
    mouseMover = false;
}

function mostrarImagens() { 
  if(mouseMover == false){      
    var i;
    var imagenVer = document.getElementsByClassName("imagen");
    for (i = 0; i < imagenVer.length; i++) {
        imagenVer[i].style.display = "none";
    }

    imagenPrincipal++;

    if (imagenPrincipal > imagenVer.length) {imagenPrincipal = 1}
    imagenVer[imagenPrincipal-1].style.display = "block";
  }else{

    }
    setTimeout(mostrarImagens, 4500);
}

function plusSlides(n) {
    moveSlides(imagenPrincipal += n);
}
  
function currentSlide(n) {
    moveSlides(imagenPrincipal = n);
}

function moveSlides(n) {
    var i;
    var imagenVer = document.getElementsByClassName("imagen");

    if (n > imagenVer.length) {imagenPrincipal = 1}
    if (n < 1) {imagenPrincipal = imagenVer.length}
    for (i = 0; i < imagenVer.length; i++) {
        imagenVer[i].style.display = "none";
    }
    imagenVer[imagenPrincipal-1].style.display = "flex";
}
