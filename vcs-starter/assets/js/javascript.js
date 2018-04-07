
$(document).ready(function(){
// menu responsive



var toggleMenu = document.getElementById("menuToggle");
var menu = document.querySelectorAll(".menu");


toggleMenu.addEventListener("click",function(){

  $(menu).toggleClass('open');

});

//efektai slide


	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 700, 'swing', function () {
	        window.location.hash = target;
	    });
	});
//h1 fade in   
        $("h1").fadeIn("slow");
// mygtukai portolio
$(".choiceWebsites").click(function(){

	$("#websites").show();
	$("#others").hide();

	$(".choiceWebsites").addClass('false');
	$(".choiceWebsites").removeClass('success');
	$(".choiceOthers").addClass('success');
})
$(".choiceOthers").click(function(){

	$("#others").show();
	$("#websites").hide();

	$(".choiceOthers").addClass('false');
	$(".choiceOthers").removeClass('success');
	$(".choiceWebsites").addClass('success');
	$(".choiceWebsites").removeClass('false');
})

// h1 effect

 
  	 $("h1").fadeIn(1000);
  	 $(".slide").delay(2000).slideDown();

  //opacity for website section

  $("#websites div").mouseenter(function(){
  	$(this).find('img:first').css('opacity','0.3');
  	 $(this).find('a').css('opacity','1');
  	  $(this).find('a').css('background-color','rgba(255,0,0,0.4)');
  })
   $("#websites div").mouseleave(function(){
  	$(this).find('img:first').css('opacity','1');
  	 	$(this).find('a').css('opacity','0');

  })
// opacity for others section

    $("#others div").mouseenter(function(){
  	$(this).find('img:first').css('opacity','0.3');
  	 	$(this).find('a').css('opacity','1');
  	 	 $(this).find('a').css('background-color','rgba(255,0,0,0.4)')
  })
   $("#others div").mouseleave(function(){
  	$(this).find('img:first').css('opacity','1');
  	 	$(this).find('a').css('opacity','0');
  })

$(window).scroll(function() {
    if ($(this).scrollTop() >= 1000) {        // If page is scrolled more than 50px
        $('.to_top').fadeIn(200);    // Fade in the arrow
    } else {
        $('.to_top').fadeOut(200);   // Else fade out the arrow
    }
});
$('.to_top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});


});