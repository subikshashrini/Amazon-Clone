$(document).ready(function() {
   let slideIndex = 0;
   showSlides();

   function showSlides() {
     const slides = $(".s-img");
     slides.hide();
     slideIndex = (slideIndex + 1) % slides.length;
     slides.eq(slideIndex).show();
     setTimeout(showSlides, 1500); // Change image every 2 seconds
   }
 });