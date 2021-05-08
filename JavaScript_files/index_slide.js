/*var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("Res");
  var bullet = document.getElementsByClassName("bullet");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < bullet.length; i++) {
      bullet[i].className = bullet[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  bullet[slideIndex-1].className += " active";
}*/

var SlideIndex = 0;
showSlides();

function showSlides(){
  var i ;
  var slides = document.getElementsByClassName("Res");
  for(i =0; i<slides.length;i++){
    slides[i].style.display = "none";

  }

  SlideIndex++;
  if(SlideIndex>slides.length){SlideIndex = 1}
  slides[SlideIndex].style.displayn = "block";
  setTimeout(showSlides,2000);
  
}