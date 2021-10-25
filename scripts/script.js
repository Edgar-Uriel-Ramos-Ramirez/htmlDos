var imagenPrincipal = 1;
mostrarImagens(imagenPrincipal);

function plusSlides(n) {
  mostrarImagens(imagenPrincipal += n);
}

function currentSlide(n) {
  mostrarImagens(imagenPrincipal = n);
}

function mostrarImagens(n) {
  var i;
  var imagenVer = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  
  if (n > imagenVer.length) {imagenPrincipal = 1}
  if (n < 1) {imagenPrincipal = imagenVer.length}
  for (i = 0; i < imagenVer.length; i++) {
      imagenVer[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  imagenVer[imagenPrincipal-1].style.display = "flex";
  dots[imagenPrincipal-1].className += " active";
}