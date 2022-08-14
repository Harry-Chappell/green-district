function mobileMenuToggle() {
  var hamburger = document.getElementById("hamburger");
  var mobileMenu = document.getElementById("menu-cntr");

  hamburger.classList.toggle("expanded");
  mobileMenu.classList.toggle("expanded");
}




var slideIndex = 1;

var myTimer;

var slideshowContainer;

window.addEventListener("load",function() {
  showSlides(slideIndex);
  myTimer = setInterval(function(){plusSlides(1)}, 5000);

  //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
  slideshowContainer = document.getElementsByClassName('hero')[0];

  //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
  // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];

  // slideshowContainer.addEventListener('mouseenter', pause)
  // slideshowContainer.addEventListener('mouseleave', resume)
})

// NEXT AND PREVIOUS CONTROL
function plusSlides(n){
clearInterval(myTimer);
if (n < 0){
  showSlides(slideIndex -= 1);
} else {
showSlides(slideIndex += 1); 
}

//COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME

if (n === -1){
  myTimer = setInterval(function(){plusSlides(n + 2)}, 5000);
} else {
  myTimer = setInterval(function(){plusSlides(n + 1)}, 5000);
}
}

//Controls the current slide and resets interval if needed
function currentSlide(n){
clearInterval(myTimer);
myTimer = setInterval(function(){plusSlides(n + 1)}, 5000);
showSlides(slideIndex = n);
}

function showSlides(n){
var i;
var slides = document.getElementsByClassName("hero-slide");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
  slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
  dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "flex";
dots[slideIndex-1].className += " active";
}

pause = () => {
clearInterval(myTimer);
}

resume = () =>{
clearInterval(myTimer);
myTimer = setInterval(function(){plusSlides(slideIndex)}, 5000);
}





const slidesContainer = document.getElementById("posts-cntr");
const slide = document.querySelector(".post-cntr");
const prevButton = document.getElementById("btn-prev");
const nextButton = document.getElementById("btn-next");

nextButton.addEventListener("click", () => {
const slideWidth = slide.clientWidth;
slidesContainer.scrollLeft += slideWidth;
});

prevButton.addEventListener("click", () => {
const slideWidth = slide.clientWidth;
slidesContainer.scrollLeft -= slideWidth;
});