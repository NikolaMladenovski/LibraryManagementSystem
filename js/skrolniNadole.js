$(document).ready(function () {
    slider();
	$('#fixedbutton').click(function(){
    $('body').animate({
        scrollTop: 0
    }, 'slow'); 
});
	
});

$(window).scroll(function () {
    slider();
});

function slider() {
    if (document.body.scrollTop > 100){
        $('#slider').stop().animate({"margin-top": '0'});
		$('#fixedbutton').fadeIn('medium');


		
	}
    else{
        $('#slider').stop().animate({"margin-top": '-100'});
		$('#fixedbutton').fadeOut('medium');
	}
}