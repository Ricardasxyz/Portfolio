var Picture = document.getElementById("img");
var num = 1;
var nav = document.getElementById("menu");
var clicked = false; 

// Paprastas Slider
setInterval(function(){
	if(num == 4){
		num = 1;
	}
	Picture.setAttribute("src","Images/"+num+".jpg");
	num++;
}, 2000);

function myFunction(x) {
    x.classList.toggle("change");
 	   if(nav.style.opacity == 1){
    	nav.style.opacity = 0;
    }
    else{
    	nav.style.opacity = 1
    }
}


//arrow to top
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("toTop").style.display = "block";
    } else {
        document.getElementById("toTop").style.display = "none";
    }
}
