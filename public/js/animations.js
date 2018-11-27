
window.onscroll = function(e) {
    animation();
}


//SCROLL MENU
$('ul.menu').find('a').click(function(){
    var $href = $(this).attr('href');
    var $anchor = $($href).offset();
    $('html, body').animate({
        scrollTop: $anchor.top-70
    }, 2000);
    return false;
});
$('.header').find('a').click(function(){
    var $href = $(this).attr('href');
    var $anchor = $($href).offset();
    $('html, body').animate({
        scrollTop: $anchor.top-70
    }, 2000);
    return false;
});
$('ul.collapsed-menu').find('a').click(function(){
    var $href = $(this).attr('href');
    var $anchor = $($href).offset();
    $('html, body').animate({
        scrollTop: $anchor.top-70
    }, 2000);
    return false;
});
$('.collapse-button').on('click', function(){
	$('.collapsed-menu').toggleClass('show');
});
$('.collapsed-menu>li>a').on('click', function(){
	$('.collapsed-menu').toggleClass('show');
});

//HOVER SERVICIOS
$('article#servicios-web>div').hover(function(){
	$(this).find("i").css("box-shadow", "0px 0px 5px rgba(0,161,228,0.8), 0px 0px 10px rgba(0,161,228,0.8), 0px 0px 20px rgba(0,161,228,0.8)");
}, function(){
	$('article#servicios-web>div>i').css("box-shadow", "none");
});;
$('article#servicios-sistemas>div').hover(function(){
	$(this).find("i").css("box-shadow", "0px 0px 5px rgba(232,23,60,0.8), 0px 0px 10px rgba(232,23,60,0.8), 0px 0px 20px rgba(232,23,60,0.8)");
}, function(){
	$(this).find("i").css("box-shadow", "none");
});;

function animation(){
	quienes_somos();
	servicios_sistemas();
	fases_desarrollo();
	contacto();
}


function quienes_somos(){
	var quienes_somos = document.querySelector("#quienes-somos");
	if(!quienes_somos.classList.contains("entrar")){
		if(isElementVisible(quienes_somos)){
			quienes_somos.classList.add("entrar");
			document.querySelector("#resumen-empresa>h2").classList.add("fadeIn");
			document.querySelector("#resumen-empresa>p").style.animationDelay = ".3s";
			document.querySelector("#resumen-empresa>p").classList.add("fadeIn");
		}
	}
}
function contacto(){
	var container = document.querySelector("#formulario");
	var items = document.querySelectorAll("#formulario>form>input, #formulario>form>textarea, #formulario>form>button");
	var h_element = document.querySelector("#formulario>hgroup");
	var titles = h_element.children;
	for(var i = 0;i<titles.length; i++){
		titles[i].style.animationDelay = (i*750)+"ms";
		titles[i].style.opacity = 0;
	}
	container.style.animationDelay= "750ms";
	for(var i = 0;i<items.length; i++){
		items[i].style.animationDelay = (i*750+(750*2))+"ms";
		items[i].style.opacity = 0;
	}
	if(isElementVisible(container)){
		for (var i = 0; i < titles.length; i++) {
			titles[i].classList.add("entrar_abajo");
		}
		for (var i = 0; i < items.length; i++) {
			items[i].classList.add("entrar_derecha");
		}
	}
}

function isElementVisible(el) {
    var top = el.offsetTop;
	var left = el.offsetLeft;
	var width = el.offsetWidth;
	var height = el.offsetHeight;

	while(el.offsetParent) {
	el = el.offsetParent;
	top += el.offsetTop;
	left += el.offsetLeft;
	}

	return (
	top < (window.pageYOffset + window.innerHeight) &&
	left < (window.pageXOffset + window.innerWidth) &&
	(top + height) > window.pageYOffset &&
	(left + width) > window.pageXOffset
	);
}