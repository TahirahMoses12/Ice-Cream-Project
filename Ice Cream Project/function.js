//  Code By Webdevtrick ( https://webdevtrick.com) 
var section1 = $('#section1').offset().top;
var section2 = $('#section2').offset().top;
var section3 = $('#section3').offset().top;
var section4 = $('#section4').offset().top;
 
var scrollOffset = 300;
 
$(window).scroll(function() {  
  
  var scroll = $(window).scrollTop() + scrollOffset;  
  
 
  if ( scroll < 500 ) {
    $('.grid-image img').attr('src', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fi.pinimg.com%2Foriginals%2F31%2F07%2Fe7%2F3107e7aded0502e633a6f9b5cda52991.jpg&imgrefurl=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F102527328989438320%2F&tbnid=YCqjIbTEU2glpM&vet=12ahUKEwir9dzA45ntAhXKFN8KHTx9AosQMygFegUIARCOAg..i&docid=if9NXDZmBk31iM&w=3167&h=3247&q=color%20wheel&ved=2ahUKEwir9dzA45ntAhXKFN8KHTx9AosQMygFegUIARCOAg');
  }
  
  if ( scroll > section2 ) {
    $('.grid-image img').attr('src', 'https://webdevtrick.com/wp-content/uploads/image-slider4.jpg');
  }
 
  if ( scroll > section3 ) {
    $('.grid-image img').attr('src', 'https://webdevtrick.com/wp-content/uploads/image-slider3.jpg');
  }
 
  if ( scroll > section4 ) {
    $('.grid-image img').attr('src', 'https://webdevtrick.com/wp-content/uploads/image-slider1.jpg');
  }
});