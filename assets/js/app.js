// Initialize Wow
new WOW().init();

// Dummy Slider
$(".testimonial-slider").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
});

$(".hero_slider").slick({
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
});


$(document).ready(function(){

  $(".cart_menu").click(function(){
    $(".sidenav").addClass("show"); 
    $(".cart").addClass("ovelay"); 
  });
  
  $(".closebtn").click(function(){ 
    $(".sidenav").removeClass("show");
    $(".cart").removeClass("ovelay");
  });

})

function incrementValue() {
  var inputValue = parseInt(document.getElementById('counter').value);
  document.getElementById('counter').value = inputValue + 1;
}

function decrementValue() {
  var inputValue = parseInt(document.getElementById('counter').value);
  if (inputValue > 1) {
      document.getElementById('counter').value = inputValue - 1;
  }
}

